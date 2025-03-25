<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class GlobalObject
{
    protected ?int $distinctCount = null;
    protected int|float|null $nil = null;

    /**
     * @return int|null
     */
    public function getDistinctCount(): ?int
    {
        return $this->distinctCount;
    }

    /**
     * @return int|float|null
     */
    public function getNil(): int|float|null
    {
        return $this->nil;
    }

    /**
     * @param int|null $distinctCount
     *
     * @return self
     */
    public function setDistinctCount(?int $distinctCount): self
    {
        $this->distinctCount = $distinctCount;

        return $this;
    }

    /**
     * @param int|float|null $nil
     *
     * @return self
     */
    public function setNil(int|float|null $nil): self
    {
        $this->nil = $nil;

        return $this;
    }
}
