<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Dashboard\Dashboard;
use Inserve\MetabaseAPI\Model\Dashboard\OrderedCard;

/**
 *
 */
final class DashboardAPI extends AbstractAPIClient
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
        $dashboardId = $dashboard->getId();
        if ($dashboardId === null) {
            return null;
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/dashboard/%d', $dashboardId),
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

    /**
     * @param Dashboard $dashboard
     * @param array     $cards
     *
     * @return OrderedCard[]
     *
     * @throws MetabaseAPIException
     */
    public function addCards(Dashboard $dashboard, array $cards): array
    {
        $dashboardId = $dashboard->getId();
        if ($dashboardId == null) {
            return [];
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/dashboard/%d/cards', $dashboardId),
            $this->apiClient->serialize(['cards' => $cards])
        );

        return $this->apiClient->deserializeList($response, OrderedCard::class, 'cards');
    }
}
