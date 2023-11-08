<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 *
 */
class FieldRef
{
    protected ?string $temporalUnit = null;

    /**
     * @return string|null
     */
    public function getTemporalUnit(): ?string
    {
        return $this->temporalUnit;
    }

    /**
     * @param string|null $temporalUnit
     *
     * @return self
     */
    public function setTemporalUnit(?string $temporalUnit): self
    {
        $this->temporalUnit = $temporalUnit;

        return $this;
    }
}
