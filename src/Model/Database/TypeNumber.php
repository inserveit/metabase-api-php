<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class TypeNumber
{
    protected int|float|null $min = null;
    protected int|float|null $q1 = null;
    protected int|float|null $q3 = null;
    protected int|float|null $max = null;
    protected float|int|null $sd = null;
    protected float|int|null $avg = null;

    /**
     * @return int|float|null
     */
    public function getMin(): int|float|null
    {
        return $this->min;
    }

    /**
     * @return int|float|null
     */
    public function getQ1(): int|float|null
    {
        return $this->q1;
    }

    /**
     * @return int|float|null
     */
    public function getQ3(): int|float|null
    {
        return $this->q3;
    }

    /**
     * @return int|float|null
     */
    public function getMax(): int|float|null
    {
        return $this->max;
    }

    /**
     * @return int|float|null
     */
    public function getSd(): float|int|null
    {
        return $this->sd;
    }

    /**
     * @return int|float|null
     */
    public function getAvg(): float|int|null
    {
        return $this->avg;
    }

    /**
     * @param int|float|null $min
     *
     * @return self
     */
    public function setMin(int|float|null $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @param int|float|null $q1
     *
     * @return self
     */
    public function setQ1(int|float|null $q1): self
    {
        $this->q1 = $q1;

        return $this;
    }

    /**
     * @param int|float|null $q3
     *
     * @return self
     */
    public function setQ3(int|float|null $q3): self
    {
        $this->q3 = $q3;
        return $this;
    }

    /**
     * @param int|float|null $max
     *
     * @return self
     */
    public function setMax(int|float|null $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param int|float|null $sd
     *
     * @return self
     */
    public function setSd(float|int|null $sd): self
    {
        $this->sd = $sd;

        return $this;
    }

    /**
     * @param int|float|null $avg
     *
     * @return self
     */
    public function setAvg(float|int|null $avg): self
    {
        $this->avg = $avg;

        return $this;
    }
}
