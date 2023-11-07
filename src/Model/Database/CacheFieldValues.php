<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class CacheFieldValues
{
    protected ?int $scheduleMinute = null;
    protected ?int $scheduleDay = null;
    protected ?int $scheduleFrame = null;
    protected ?int $scheduleHour = null;
    protected ?string $scheduleType = null;

    /**
     * @return int|null
     */
    public function getScheduleMinute(): ?int
    {
        return $this->scheduleMinute;
    }

    /**
     * @return int|null
     */
    public function getScheduleDay(): ?int
    {
        return $this->scheduleDay;
    }

    /**
     * @return int|null
     */
    public function getScheduleFrame(): ?int
    {
        return $this->scheduleFrame;
    }

    /**
     * @return int|null
     */
    public function getScheduleHour(): ?int
    {
        return $this->scheduleHour;
    }

    /**
     * @return string|null
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param int|null $scheduleMinute
     *
     * @return self
     */
    public function setScheduleMinute(?int $scheduleMinute): self
    {
        $this->scheduleMinute = $scheduleMinute;

        return $this;
    }

    /**
     * @param int|null $scheduleDay
     *
     * @return self
     */
    public function setScheduleDay(?int $scheduleDay): self
    {
        $this->scheduleDay = $scheduleDay;

        return $this;
    }

    /**
     * @param int|null $scheduleFrame
     *
     * @return self
     */
    public function setScheduleFrame(?int $scheduleFrame): self
    {
        $this->scheduleFrame = $scheduleFrame;

        return $this;
    }

    /**
     * @param int|null $scheduleHour
     *
     * @return self
     */
    public function setScheduleHour(?int $scheduleHour): self
    {
        $this->scheduleHour = $scheduleHour;

        return $this;
    }

    /**
     * @param string|null $scheduleType
     *
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;

        return $this;
    }
}
