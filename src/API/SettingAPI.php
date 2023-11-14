<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;

/**
 *
 */
class SettingAPI extends AbstractAPIClient
{
    /**
     * @return array
     *
     * @throws MetabaseAPIException
     */
    public function list(): array
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/setting'
        );

        return json_decode($response, true);
    }

    /**
     * @param string $key
     *
     * @return mixed
     *
     * @throws MetabaseAPIException
     */
    public function get(string $key): mixed
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/setting/%s', $key)
        );

        $responseBody = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $responseBody;
        }

        return $response;
    }
}
