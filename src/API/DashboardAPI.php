<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Dashboard\Dashboard;

/**
 *
 */
class DashboardAPI extends AbstractAPIClient
{
    /**
     * @return Dashboard[]
     *
     * @throws MetabaseAPIException
     *
     * For filter options see: https://www.metabase.com/docs/latest/api/dashboard#get-apidashboard
     */
    public function list(string $filter = 'all'): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/dashboard?f=%s', $filter)
        );

        return $this->apiClient->deserializeList($response, Dashboard::class);
    }

    /**
     * @param int $id
     *
     * @return Dashboard|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?Dashboard
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/dashboard/%d', $id)
        );

        return $this->apiClient->deserialize($response, Dashboard::class);
    }

    /**
     * @param Dashboard $dashboard
     *
     * @return Dashboard|null
     *
     * @throws MetabaseAPIException
     */
    public function create(Dashboard $dashboard): ?Dashboard
    {
        $response = $this->apiClient->call(
            'POST',
            '/api/dashboard/',
            $this->apiClient->serialize($dashboard)
        );

        return $this->apiClient->deserialize($response, Dashboard::class);
    }

    /**
     * @param Dashboard $dashboard
     *
     * @return Dashboard|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Dashboard $dashboard): ?Dashboard
    {
        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/dashboard/%d', $dashboard->getId()),
            $this->apiClient->serialize($dashboard)
        );

        return $this->apiClient->deserialize($response, Dashboard::class);
    }

    /**
     * @param int $id
     *
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function delete(int $id): void
    {
        $this->apiClient->call(
            'DELETE',
            sprintf('/api/dashboard/%d', $id)
        );
    }
}
