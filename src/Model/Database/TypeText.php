<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class TypeText
{
    protected int|float|null $percentJson = null;
    protected ?int $percentUrl = null;
    protected int|float|null $percentEmail = null;
    protected int|float|null $percentState = null;
    protected int|float|null $averageLength = null;

    /**
     * @return int|float|null
     */
    public function getPercentJson(): int|float|null
    {
        return $this->percentJson;
    }

    /**
     * @return int|null
     */
    public function getPercentUrl(): ?int
    {
        return $this->percentUrl;
    }

    /**
     * @return int|float|null
     */
    public function getPercentEmail(): int|float|null
    {
        return $this->percentEmail;
    }

    /**
     * @return int|float|null
     */
    public function getPercentState(): int|float|null
    {
        return $this->percentState;
    }

    /**
     * @return int|float|null
     */
    public function getAverageLength(): int|float|null
    {
        return $this->averageLength;
    }

    /**
     * @param int|float|null $percentJson
     *
     * @return self
     */
    public function setPercentJson(int|float|null $percentJson): self
    {
        $this->percentJson = $percentJson;

        return $this;
    }

    /**
     * @param int|null $percentUrl
     *
     * @return self
     */
    public function setPercentUrl(?int $percentUrl): self
    {
        $this->percentUrl = $percentUrl;

        return $this;
    }

    /**
     * @param int|float|null $percentEmail
     *
     * @return self
     */
    public function setPercentEmail(int|float|null $percentEmail): self
    {
        $this->percentEmail = $percentEmail;

        return $this;
    }

    /**
     * @param int|float|null $percentState
     *
     * @return self
     */
    public function setPercentState(int|float|null $percentState): self
    {
        $this->percentState = $percentState;

        return $this;
    }

    /**
     * @param int|float|null $averageLength
     *
     * @return self
     */
    public function setAverageLength(int|float|null $averageLength): self
    {
        $this->averageLength = $averageLength;

        return $this;
    }
}
