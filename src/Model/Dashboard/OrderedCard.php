<?php

namespace Inserve\MetabaseAPI\Model\Dashboard;

use Inserve\MetabaseAPI\Model\Card\Card;
use Inserve\MetabaseAPI\Model\Card\VisualizationSettings;

/**
 *
 */
class OrderedCard
{
    protected ?int $sizeX = null;
    protected ?int $dashboardTabId = null;
    protected ?array $series = null;
    protected ?int $actionId = null;
    protected ?Card $card = null;
    protected ?string $updatedAt = null;
    protected ?int $col = null;
    protected ?int $id = null;
    protected ?array $parameterMappings = null;
    protected ?int $cardId = null;
    protected ?string $entityId = null;
    protected ?VisualizationSettings $visualizationSettings = null;
    protected ?int $sizeY = null;
    protected ?int $dashboardId = null;
    protected ?string $createdAt = null;
    protected ?int $row = null;

    /**
     * @return int|null
     */
    public function getSizeX(): ?int
    {
        return $this->sizeX;
    }

    /**
     * @return int|null
     */
    public function getDashboardTabId(): ?int
    {
        return $this->dashboardTabId;
    }

    /**
     * @return array|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }

    /**
     * @return int|null
     */
    public function getActionId(): ?int
    {
        return $this->actionId;
    }

    /**
     * @return Card|null
     */
    public function getCard(): ?Card
    {
        return $this->card;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @return int|null
     */
    public function getCol(): ?int
    {
        return $this->col;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return array|null
     */
    public function getParameterMappings(): ?array
    {
        return $this->parameterMappings;
    }

    /**
     * @return int|null
     */
    public function getCardId(): ?int
    {
        return $this->cardId;
    }

    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * @return VisualizationSettings|null
     */
    public function getVisualizationSettings(): ?VisualizationSettings
    {
        return $this->visualizationSettings;
    }

    /**
     * @return int|null
     */
    public function getSizeY(): ?int
    {
        return $this->sizeY;
    }

    /**
     * @return int|null
     */
    public function getDashboardId(): ?int
    {
        return $this->dashboardId;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @return int|null
     */
    public function getRow(): ?int
    {
        return $this->row;
    }

    /**
     * @param int|null $sizeX
     *
     * @return self
     */
    public function setSizeX(?int $sizeX): self
    {
        $this->sizeX = $sizeX;

        return $this;
    }

    /**
     * @param int|null $dashboardTabId
     *
     * @return self
     */
    public function setDashboardTabId(?int $dashboardTabId): self
    {
        $this->dashboardTabId = $dashboardTabId;

        return $this;
    }

    /**
     * @param array|null $series
     *
     * @return self
     */
    public function setSeries(?array $series): self
    {
        $this->series = $series;

        return $this;
    }

    /**
     * @param int|null $actionId
     *
     * @return self
     */
    public function setActionId(?int $actionId): self
    {
        $this->actionId = $actionId;

        return $this;
    }

    /**
     * @param Card|null $card
     *
     * @return self
     */
    public function setCard(?Card $card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @param int|null $col
     *
     * @return self
     */
    public function setCol(?int $col): self
    {
        $this->col = $col;

        return $this;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param array|null $parameterMappings
     *
     * @return self
     */
    public function setParameterMappings(?array $parameterMappings): self
    {
        $this->parameterMappings = $parameterMappings;

        return $this;
    }

    /**
     * @param int|null $cardId
     *
     * @return self
     */
    public function setCardId(?int $cardId): self
    {
        $this->cardId = $cardId;

        return $this;
    }

    /**
     * @param string|null $entityId
     *
     * @return self
     */
    public function setEntityId(?string $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    /**
     * @param VisualizationSettings|null $visualizationSettings
     *
     * @return self
     */
    public function setVisualizationSettings(?VisualizationSettings $visualizationSettings): self
    {
        $this->visualizationSettings = $visualizationSettings;

        return $this;
    }

    /**
     * @param int|null $sizeY
     *
     * @return self
     */
    public function setSizeY(?int $sizeY): self
    {
        $this->sizeY = $sizeY;

        return $this;
    }

    /**
     * @param int|null $dashboardId
     *
     * @return self
     */
    public function setDashboardId(?int $dashboardId): self
    {
        $this->dashboardId = $dashboardId;

        return $this;
    }

    /**
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param int|null $row
     *
     * @return self
     */
    public function setRow(?int $row): self
    {
        $this->row = $row;

        return $this;
    }
}
