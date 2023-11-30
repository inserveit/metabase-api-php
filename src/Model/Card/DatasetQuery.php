<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 *
 */
class DatasetQuery
{
    protected ?int $database = null;
    protected ?string $type = null;
    protected ?Query $query = null;
    protected ?Native $native = null;

    /**
     * @return int|null
     */
    public function getDatabase(): ?int
    {
        return $this->database;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return Query|null
     */
    public function getQuery(): ?Query
    {
        return $this->query;
    }

    /**
     * @return Native|null
     */
    public function getNative(): ?Native
    {
        return $this->native;
    }

    /**
     * @param int|null $database
     *
     * @return self
     */
    public function setDatabase(?int $database): self
    {
        $this->database = $database;
        
        return $this;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     * @param Native|null $native
     *
     * @return self
     */
    public function setNative(?Native $native): self
    {
        $this->native = $native;

        return $this;
    }

    /**
     * @param Query|null $query
     *
     * @return self
     */
    public function setQuery(?Query $query): self
    {
        $this->query = $query;
        
        return $this;
    }
}
