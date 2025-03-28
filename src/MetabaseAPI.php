<?php

namespace Inserve\MetabaseAPI;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Inserve\MetabaseAPI\API\BookmarkAPI;
use Inserve\MetabaseAPI\API\CardAPI;
use Inserve\MetabaseAPI\API\CollectionAPI;
use Inserve\MetabaseAPI\API\DashboardAPI;
use Inserve\MetabaseAPI\API\EmbedAPI;
use Inserve\MetabaseAPI\API\FieldAPI;
use Inserve\MetabaseAPI\API\PermissionsAPI;
use Inserve\MetabaseAPI\API\SettingAPI;
use Inserve\MetabaseAPI\API\TableAPI;
use Inserve\MetabaseAPI\API\UserAPI;
use Inserve\MetabaseAPI\API\DatabaseAPI;
use Psr\Log\LoggerInterface;

/**
 * @property BookmarkAPI    $bookmark
 * @property CardAPI        $card
 * @property CollectionAPI  $collection
 * @property DatabaseAPI    $database
 * @property DashboardAPI   $dashboard
 * @property EmbedAPI       $embed
 * @property FieldAPI       $field
 * @property PermissionsAPI $permissions
 * @property SettingAPI     $setting
 * @property TableAPI       $table
 * @property UserAPI        $user
 */
class MetabaseAPI
{
    protected APIClient $apiClient;

    /**
     * @param ClientInterface      $client
     * @param LoggerInterface|null $logger
     */
    public function __construct(protected ClientInterface $client, protected ?LoggerInterface $logger = null)
    {
        $this->apiClient = new APIClient($this->client, $this->logger);
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        return $this->__get($name);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        $fqdnClass = sprintf('%s\\API\\%sAPI', __NAMESPACE__, ucfirst($name));

        if (class_exists($fqdnClass)) {
            return new $fqdnClass($this->apiClient);
        }

        return null;
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    public function authenticate(string $username, string $password): string
    {
        $loginData = json_encode([
            'username' => $username,
            'password' => $password,
        ]);

        if ($loginData === false) {
            $loginData = null;
        }

        $request = new Request('POST', '/api/session', ['Content-Type' => 'application/json'], $loginData);

        try {
            $response = $this->apiClient->getClient()->send($request);
            if ($response->getStatusCode() !== 200) {
                throw new MetabaseAPIException('Unable to authenticate.');
            }

            $response = json_decode((string) $response->getBody());
            if (!isset($response->id)) {
                throw new MetabaseAPIException('Invalid authentication response.');
            }

            $this->apiClient->setSessionToken($response->id);

            return $response->id;
        } catch (GuzzleException $exception) {
            throw new MetabaseAPIException($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @return string
     *
     * @throws MetabaseAPIException
     */
    public function getSessionToken(): string
    {
        $sessionToken = $this->apiClient->getSessionToken();

        if ($sessionToken === null) {
            throw new MetabaseAPIException('Not authenticated', 401);
        }

        return $sessionToken;
    }

    /**
     * @param string $json
     * @param string $class
     *
     * @return mixed
     */
    public function createFromJson(string $json, string $class): mixed
    {
        return $this->apiClient->deserialize($json, $class);
    }
}
