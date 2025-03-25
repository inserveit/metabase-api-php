<?php

namespace Inserve\MetabaseAPI\API;

use Inserve\MetabaseAPI\MetabaseAPIException;
use Inserve\MetabaseAPI\Model\Database\Field;

/**
 *
 */
final class FieldAPI extends AbstractAPIClient
{
    /**
     * @param int $id
     *
     * @return Field|null
     *
     * @throws MetabaseAPIException
     */
    public function get(int $id): ?Field
    {
        $response = $this->apiClient->call(
            'GET',
            sprintf('/api/field/%d', $id)
        );

        return $this->apiClient->deserialize($response, Field::class);
    }

    /**
     * @param Field $field
     *
     * @return Field|null
     *
     * @throws MetabaseAPIException
     */
    public function update(Field $field): ?Field
    {
        $fieldId = $field->getId();
        if ($fieldId === null) {
            return null;
        }

        $response = $this->apiClient->call(
            'PUT',
            sprintf('/api/field/%d', $fieldId),
            $this->apiClient->serialize($field)
        );

        return $this->apiClient->deserialize($response, Field::class);
    }
}
