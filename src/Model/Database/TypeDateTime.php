<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class TypeDateTime
{
    protected ?string $earliest = null;
    protected ?string $latest = null;

    /**
     * @return string|null
     */
    public function getEarliest(): ?string
    {
        return $this->earliest;
    }

    /**
     * @return string|null
     */
    public function getLatest(): ?string
    {
        return $this->latest;
    }

    /**
     * @param string|null $earliest
     *
     * @return self
     */
    public function setEarliest(?string $earliest): self
    {
        $this->earliest = $earliest;

        return $this;
    }

    /**
     * @param string|null $latest
     *
     * @return self
     */
    public function setLatest(?string $latest): self
    {
        $this->latest = $latest;

        return $this;
    }
}
