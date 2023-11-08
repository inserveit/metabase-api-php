<?php

namespace Inserve\MetabaseAPI;

use Exception;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Inserve\MetabaseAPI\NameConverter\MetabasePropertyNameConverter;
use Psr\Log\LoggerInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 *
 */
class APIClient
{
    protected ?string $sessionToken = null;
    protected Serializer $serializer;
    protected ObjectNormalizer $normalizer;

    /**
     * @param ClientInterface $client
     */
    public function __construct(protected ClientInterface $client, protected ?LoggerInterface $logger)
    {
        $this->normalizer = new ObjectNormalizer(null, new MetabasePropertyNameConverter(), null, new ReflectionExtractor());
        $this->serializer = new Serializer([$this->normalizer], [new JsonEncoder()]);
    }

    /**
     * @return ClientInterface
     */
    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    /**
     * @param string $sessionToken
     *
     * @return void
     */
    public function setSessionToken(string $sessionToken): void
    {
        $this->sessionToken = $sessionToken;
    }

    /**
     * @param string      $method
     * @param string      $url
     * @param string|null $body
     * @param array       $headers
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    public function call(string $method, string $url, ?string $body = null, array $headers = []): string
    {
        try {
            $request = new Request($method, $url, array_merge($headers, $this->getDefaultHeaders()), $body);
            $response = $this->client->send($request);

            return (string) $response->getBody();
        } catch (GuzzleException $exception) {
            throw new MetabaseAPIException(sprintf('(%s) %s: %s', $method, $url, $exception->getMessage()), $exception->getCode());
        }
    }

    /**
     * @param mixed $data
     *
     * @return string
     */
    public function serialize(mixed $data): string
    {
        return $this->serializer->serialize($data, 'json');
    }

    /**
     * @param string|null $response
     * @param string      $class
     *
     * @return mixed
     */
    public function deserialize(?string $response, string $class): mixed
    {
        try {
            return $this->serializer->deserialize($response, $class, 'json');
        } catch (Exception $exception) {
            $this->logError(sprintf('(%s): %s', __FUNCTION__, $exception->getMessage()));

            return null;
        }
    }

    /**
     * @param string|null $response
     * @param string      $class
     * @param string|null $key
     *
     * @return array
     */
    public function deserializeList(?string $response, string $class, ?string $key = null): array
    {
        try {
            $response = json_decode($response, true);
            if ($key && !isset($response[$key])) {
                return [];
            }

            $list = [];
            $items = $key ? $response[$key] : $response;

            foreach ($items as $item) {
                $list[] = $this->normalizer->denormalize($item, $class);
            }

            return $list;
        } catch (Exception $exception) {
            $this->logError(sprintf('(%s): %s', __FUNCTION__, $exception->getMessage()));

            return [];
        }
    }

    /**
     * @return string[]
     */
    protected function getDefaultHeaders(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
        ];

        if (!empty($this->sessionToken)) {
            $headers['X-Metabase-Session'] = $this->sessionToken;
        }

        return $headers;
    }

    /**
     * @param string $message
     *
     * @return void
     */
    private function logError(string $message): void
    {
        if (!$this->logger) {
            return;
        }

        $this->logger->error($message);
    }
}
