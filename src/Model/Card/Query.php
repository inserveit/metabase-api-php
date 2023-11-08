<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 *
 */
class Query
{
    protected ?int $sourceTable = null;

    /**
     * @return int|null
     */
    public function getSourceTable(): ?int
    {
        return $this->sourceTable;
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
}
