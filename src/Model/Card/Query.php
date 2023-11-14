<?php

namespace Inserve\MetabaseAPI\Model\Card;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 *
 */
class Query
{
    protected ?array $filter = null;
    protected ?array $breakout = null;
    protected ?array $aggregation = null;

    #[SerializedName('source-query')]
    protected ?Query $sourceQuery = null;

    #[SerializedName('source-table')]
    protected ?int $sourceTable = null;

    /**
     * @return array|null
     */
    public function getFilter(): ?array
    {
        return $this->filter;
    }

    /**
     * @return array|null
     */
    public function getBreakout(): ?array
    {
        return $this->breakout;
    }

    /**
     * @return Query|null
     */
    public function getSourceQuery(): ?Query
    {
        return $this->sourceQuery;
    }

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
     * @param array|null $filter
     *
     * @return self
     */
    public function setFilter(?array $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @param array|null $breakout
     *
     * @return self
     */
    public function setBreakout(?array $breakout): self
    {
        $this->breakout = $breakout;

        return $this;
    }

    /**
     * @param Query|null $sourceQuery
     *
     * @return self
     */
    public function setSourceQuery(?Query $sourceQuery): self
    {
        $this->sourceQuery = $sourceQuery;

        return $this;
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
