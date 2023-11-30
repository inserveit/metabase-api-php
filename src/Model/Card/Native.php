<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 * 
 */
class Native
{
    /**
     * @var string|null
     */
    protected ?string $query = null;

    /**
     * @var string|null
     */
    protected ?string $collection = null;

    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @return string|null
     */
    public function getCollection(): ?string
    {
        return $this->collection;
    }

    /**
     * @param string|null $query
     *
     * @return self
     */
    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param string|null $collection
     *
     * @return self
     */
    public function setCollection(?string $collection): self
    {
        $this->collection = $collection;

        return $this;
    }
}
