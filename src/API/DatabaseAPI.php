<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Database\Database;
use Inserve\MetabaseAPI\Model\Database\Table;

/**
 *
 */
class DatabaseAPI extends AbstractAPIClient
{
    /**
     * @param Database $database
     *
     * @return Database|null
     *
     * @throws MetabaseAPIException
     */
    public function create(Database $database): ?Database
    {
        $response = $this->apiClient->call(
            'POST',
            '/api/database',
            $this->apiClient->serialize($database)
        );

        return $this->apiClient->deserialize($response, Database::class);
    }

    /**
     * @param Database $database
     *
     * @return Database|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Database $database): ?Database
    {
        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/database/%d', $database->getId()),
            $this->apiClient->serialize($database)
        );

        return $this->apiClient->deserialize($response, Database::class);
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
            sprintf('/api/database/%d', $id)
        );
    }

    /**
     * @param int $id
     *
     * @return Database|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?Database
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/database/%d', $id)
        );

        return $this->apiClient->deserialize($response, Database::class);
    }

    /**
     * @param array $options
     *
     * @return Database[]
     *
     * @throws MetabaseAPIException
     *
     * For options see: https://www.metabase.com/docs/latest/api/database#get-apidatabase
     */
    public function list(array $options = []): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/database?%s', http_build_query($options))
        );

        return $this->apiClient->deserializeList($response, Database::class, 'data');
    }

    /**
     * @param int   $id
     * @param array $options
     *
     * @throws MetabaseAPIException
     *
     * @return Table[]
     *
     * For options see: https://www.metabase.com/docs/latest/api/database#get-apidatabaseidmetadata
     */
    public function getMetadata(int $id, array $options = []): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/database/%d/metadata?%s', $id, http_build_query($options))
        );

        return $this->apiClient->deserializeList($response, Table::class, 'tables');
    }

    /**
     * @param int $id
     *
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function syncSchema(int $id): void
    {
        $this->apiClient->call(
            'POST',
            sprintf('/api/database/%d/sync_schema', $id)
        );
    }

    /**
     * @param int $id
     *
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function rescanValues(int $id): void
    {
        $this->apiClient->call(
            'POST',
            sprintf('/api/database/%d/rescan_values', $id)
        );
    }
}
