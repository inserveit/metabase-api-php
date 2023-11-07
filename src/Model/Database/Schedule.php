<?php

namespace Inserve\MetabaseAPI\Model\Database;

use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 *
 */
class Schedule
{
    protected ?CacheFieldValues $cacheFieldValues;
    protected ?MetadataSync $metadataSync;
    private ObjectNormalizer $normalizer;

    public function __construct()
    {
        $this->normalizer = new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter());
    }

    /**
     * @return CacheFieldValues|null
     */
    public function getCacheFieldValues(): ?CacheFieldValues
    {
        return $this->cacheFieldValues;
    }

    /**
     * @return MetadataSync|null
     */
    public function getMetadataSync(): ?MetadataSync
    {
        return $this->metadataSync;
    }

    /**
     * @param CacheFieldValues|array $cacheFieldValues
     *
     * @return self
     */
    public function setCacheFieldValues(CacheFieldValues|array $cacheFieldValues): self
    {
        if (is_array($cacheFieldValues)) {
            $cacheFieldValues = $this->normalizer->denormalize($cacheFieldValues, CacheFieldValues::class);
        }

        $this->cacheFieldValues = $cacheFieldValues;

        return $this;
    }

    /**
     * @param MetadataSync|array $metadataSync
     *
     * @return self
     */
    public function setMetadataSync(MetadataSync|array $metadataSync): self
    {
        if (is_array($metadataSync)) {
            $metadataSync = $this->normalizer->denormalize($metadataSync, MetadataSync::class);
        }

        $this->metadataSync = $metadataSync;

        return $this;
    }
}
