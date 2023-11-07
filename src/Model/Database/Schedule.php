<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class Schedule
{
    protected ?CacheFieldValues $cacheFieldValues;
    protected ?MetadataSync $metadataSync;

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
     * @param CacheFieldValues|null $cacheFieldValues
     *
     * @return self
     */
    public function setCacheFieldValues(?CacheFieldValues $cacheFieldValues): self
    {
        $this->cacheFieldValues = $cacheFieldValues;

        return $this;
    }

    /**
     * @param MetadataSync|null $metadataSync
     *
     * @return self
     */
    public function setMetadataSync(?MetadataSync $metadataSync): self
    {
        $this->metadataSync = $metadataSync;

        return $this;
    }
}
