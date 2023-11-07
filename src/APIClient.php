<?php

namespace Inserve\MetabaseAPI;

use Exception;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
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
    public function __construct(protected ClientInterface $client)
    {
        $this->normalizer = new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter());
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
            //@todo log error

            var_dump($exception->getMessage());

            return null;
        }
    }

    /**
     * @param mixed  $data
     * @param string $class
     *
     * @return mixed
     */
    public function denormalize(mixed $data, string $class): mixed
    {
        return $this->normalizer->denormalize($data, $class);
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
}
