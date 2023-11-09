<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 *
 */
class Query
{
    protected ?int $sourceTable = null;
    protected ?array $aggregation = null;
    /**
     * @return int|null
     */
    public function getSourceTable(): ?int
    {
        return $this->sourceTable;
    }

    /**
     * @return array|null
     */
    public function getAggregation(): ?array
    {
        return $this->aggregation;
    }

    /**
     * @param int|null $sourceTable
     *
     * @return self
     */
    public function setSourceTable(?int $sourceTable): self
    {
        $this->sourceTable = $sourceTable;

        return $this;
    }

    /**
     * @param array|null $aggregation
     *
     * @return self
     */
    public function setAggregation(?array $aggregation): self
    {
        $this->aggregation = $aggregation;

        return $this;
    }
}
