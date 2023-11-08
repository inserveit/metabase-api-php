<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Collection\Collection;
use Inserve\MetabaseAPI\Model\Permissions\Permission;

/**
 *
 */
class CollectionAPI extends AbstractAPIClient
{
    /**
     * @param string|int $id
     *
     * @return Collection|null
     *
     * @throws MetabaseAPIException
     */
    public function get(string|int $id): ?Collection
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/collection/%s', $id)
        );

        return $this->apiClient->deserialize($response, Collection::class);
    }

    /**
     * @param array $options
     *
     * @return Collection[]
     *
     * @throws MetabaseAPIException
     *
     * For options see: https://www.metabase.com/docs/latest/api/collection#get-apicollection
     */
    public function list(array $options): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/collection?%s', http_build_query($options))
        );

        return $this->apiClient->deserializeList($response, Collection::class);
    }

    /**
     * @param Collection $collection
     *
     * @return Collection|null
     *
     * @throws MetabaseAPIException
     */
    public function create(Collection $collection): ?Collection
    {
        $response = $this->apiClient->call(
            'POST',
            '/api/collection',
            $this->apiClient->serialize($collection)
        );

        return $this->apiClient->deserialize($response, Collection::class);
    }

    /**
     * @param Collection $collection
     *
     * @return Collection|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Collection $collection): ?Collection
    {
        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/collection/%s', $collection->getId()),
            $this->apiClient->serialize($collection)
        );

        return $this->apiClient->deserialize($response, Collection::class);
    }

    /**
     * @return Permission|null
     *
     * @throws MetabaseAPIException
     */
    public function graph(): ?Permission
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/collection/graph'
        );

        return $this->apiClient->deserialize($response, Permission::class);
    }

    /**
     * @param Permission $permission
     *
     * @return Permission|null
     *
     * @throws MetabaseAPIException
     */
    public function updateGraph(Permission $permission): ?Permission
    {
        $response = $this->apiClient->call(
            'PUT',
            '/api/collection/graph',
            $this->apiClient->serialize($permission)
        );

        return $this->apiClient->deserialize($response, Permission::class);
    }
}
