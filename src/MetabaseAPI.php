<?php

namespace Inserve\MetabaseAPI;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Inserve\MetabaseAPI\API\PermissionsAPI;
use Inserve\MetabaseAPI\API\UserAPI;
use Inserve\MetabaseAPI\API\DatabaseAPI;

/**
 * @property UserAPI        $user
 * @property DatabaseAPI    $database
 * @property PermissionsAPI $permissions
 */
class MetabaseAPI
{
    protected APIClient $apiClient;

    /**
     * @param ClientInterface $client
     */
    public function __construct(protected ClientInterface $client)
    {
        $this->apiClient = new APIClient($this->client);
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
        return $this->__get($name);
    }

    /**
     * @param string $name
     *
     * @return mixed|null
     */
    public function __get(string $name)
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

        $request = new Request('POST', '/api/session', ['Content-Type' => 'application/json'], $loginData);

        try {
            $response = $this->apiClient->getClient()->send($request);
            if ($response->getStatusCode() !== 200) {
                throw new MetabaseAPIException('Unable to authenticate.');
            }

            $response = json_decode($response->getBody());
            if (!isset($response->id)) {
                throw new MetabaseAPIException('Invalid authentication response.');
            }

            $this->apiClient->setSessionToken($response->id);

            return $response->id;
        } catch (GuzzleException $exception) {
            throw new MetabaseAPIException($exception->getMessage(), $exception->getCode());
        }
    }
}
