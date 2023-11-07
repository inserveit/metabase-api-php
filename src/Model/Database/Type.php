<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class Type
{
    protected ?TypeText $typeText = null;
    protected ?TypeNumber $typeNumber = null;
    protected ?TypeDateTime $typeDateTime = null;

    /**
     * @return TypeText|null
     */
    public function getTypeText(): ?TypeText
    {
        return $this->typeText;
    }

    /**
     * @return TypeNumber|null
     */
    public function getTypeNumber(): ?TypeNumber
    {
        return $this->typeNumber;
    }

    /**
     * @return TypeDateTime|null
     */
    public function getTypeDateTime(): ?TypeDateTime
    {
        return $this->typeDateTime;
    }

    /**
     * @param TypeText|null $typeText
     *
     * @return self
     */
    public function setTypeText(?TypeText $typeText): self
    {
        $this->typeText = $typeText;

        return $this;
    }

    /**
     * @param TypeNumber|null $typeNumber
     *
     * @return self
     */
    public function setTypeNumber(?TypeNumber $typeNumber): self
    {
        $this->typeNumber = $typeNumber;

        return $this;
    }

    /**
     * @param TypeDateTime|null $typeDateTime
     *
     * @return self
     */
    public function setTypeDateTime(?TypeDateTime $typeDateTime): self
    {
        $this->typeDateTime = $typeDateTime;

        return $this;
    }
}
