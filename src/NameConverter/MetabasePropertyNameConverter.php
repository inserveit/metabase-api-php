<?php

namespace Inserve\MetabaseAPI\NameConverter;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

/**
 *
 */
class MetabasePropertyNameConverter extends CamelCaseToSnakeCaseNameConverter
{
    const METABASE_PROPERTIES = [
        'source-table' => 'sourceTable'
    ];

    /**
     * @param string $propertyName
     *
     * @return string
     */
    public function normalize(string $propertyName): string
    {
        $property = array_search($propertyName, self::METABASE_PROPERTIES);
        if ($property !== false) {
            return $property;
        }

        return parent::normalize($propertyName);
    }

    /**
     * @param string $propertyName
     *
     * @return string
     */
    public function denormalize(string $propertyName): string
    {
        if (array_key_exists($propertyName, self::METABASE_PROPERTIES)) {
            return self::METABASE_PROPERTIES[$propertyName];
        }

        return parent::denormalize($propertyName);
    }
}
