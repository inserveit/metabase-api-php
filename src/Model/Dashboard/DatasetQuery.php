<?php

namespace Inserve\MetabaseAPI\Model\Dashboard;

/**
 *
 */
class DatasetQuery
{
    protected ?int $database = null;
    protected ?string $type = null;
    protected ?Query $query = null;

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
