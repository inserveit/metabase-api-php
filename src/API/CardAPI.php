<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Card\Card;

/**
 *
 */
final class CardAPI extends AbstractAPIClient
{
    /**
     * @return Card[]
     *
     * @throws MetabaseAPIException
     *
     * For filter options see: https://www.metabase.com/docs/latest/api/card#get-apicard
     */
    public function list(string $filter = 'all'): array
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/card?f=%s', $filter)
        );

        return $this->apiClient->deserializeList($response, Card::class);
    }

    /**
     * @param int $id
     *
     * @return Card|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?Card
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/card/%d', $id)
        );

        return $this->apiClient->deserialize($response, Card::class);
    }

    /**
     * @param Card $card
     *
     * @return Card|null
     *
     * @throws MetabaseAPIException
     */
    public function create(Card $card): ?Card
    {
        $response = $this->apiClient->call(
            'POST',
            '/api/card/',
            $this->apiClient->serialize($card)
        );

        return $this->apiClient->deserialize($response, Card::class);
    }

    /**
     * @param Card $card
     *
     * @return Card|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Card $card): ?Card
    {
        $cardId = $card->getId();
        if ($cardId === null) {
            return null;
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/card/%d', $cardId),
            $this->apiClient->serialize($card)
        );

        return $this->apiClient->deserialize($response, Card::class);
    }
}
