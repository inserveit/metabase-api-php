<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Database\Table;

/**
 *
 */
class TableAPI extends AbstractAPIClient
{
    /**
     * @param int $id
     *
     * @return Table|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?Table
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/table/%d', $id)
        );

        return $this->apiClient->deserialize($response, Table::class);
    }

    /**
     * @return Table[]
     *
     * @throws MetabaseAPIException
     */
    public function list(): array
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/table'
        );

        return $this->apiClient->deserializeList($response, Table::class);
    }

    /**
     * @param Table $table
     *
     * @return Table|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Table $table): ?Table
    {
        $tableId = $table->getId();
        if (!$tableId) {
            return null;
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/table/%d', $tableId),
            $this->apiClient->serialize($table)
        );

        return $this->apiClient->deserialize($response, Table::class);
    }

    /**
     * @param array $tableIds
     * @param array $params
     *
     * @return Table[]
     *
     * @throws MetabaseAPIException
     *
     * For params see: https://www.metabase.com/docs/latest/api/table#put-apitable
     */
    public function updateAll(array $tableIds, array $params): array
    {
        $response = $this->apiClient->call(
            'PUT',
            '/api/table',
            $this->apiClient->serialize(array_merge([
                'ids' => $tableIds
            ], $params))
        );


        return $this->apiClient->deserializeList($response, Table::class);
    }
}
