<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Bookmark\Bookmark;
use Inserve\MetabaseAPI\Model\Bookmark\BookmarkCreated;

/**
 *
 */
class BookmarkAPI extends AbstractAPIClient
{
    /**
     * @return Bookmark[]
     *
     * @throws MetabaseAPIException
     */
    public function list(): array
    {
        $response = $this->apiClient->call(
            'GET',
            '/api/bookmark'
        );

        return $this->apiClient->deserializeList($response, Bookmark::class);
    }

    /**
     * @param string $type
     * @param int $modelId
     *
     * @return BookmarkCreated|null
     *
     * @throws MetabaseAPIException
     */
    public function create(string $type, int $modelId): ?BookmarkCreated
    {
        $response = $this->apiClient->call(
            'POST',
            sprintf('/api/bookmark/%s/%d', $type, $modelId)
        );

        return $this->apiClient->deserialize($response, BookmarkCreated::class);
    }
}
