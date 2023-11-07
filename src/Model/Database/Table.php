<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class Table
{
    protected ?string $description = null;
    protected ?string $entityType = null;
    protected ?bool $showInGettingStarted = null;
    protected ?string $name = null;
    /** @var Field[]|null */
    protected ?array $fields = [];
    protected ?array $segments = [];
    protected ?string $updatedAt = null;
    protected ?bool $active = null;
    protected ?string $visibilityType = null;
    protected ?int $id = null;
    protected ?int $dbId = null;
    protected ?string $fieldOrder = null;
    protected ?bool $isUpload = null;
    protected ?string $initialSyncStatus = null;
    protected ?string $displayName = null;
    protected ?array $metrics = null;
    protected ?string $createdAt = null;
    protected ?string $pointsOfInterest = null;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getEntityType(): ?string
    {
        return $this->entityType;
    }

    /**
     * @return bool|null
     */
    public function getShowInGettingStarted(): ?bool
    {
        return $this->showInGettingStarted;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Field[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @return array|null
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @return string|null
     */
    public function getVisibilityType(): ?string
    {
        return $this->visibilityType;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getDbId(): ?int
    {
        return $this->dbId;
    }

    /**
     * @return string|null
     */
    public function getFieldOrder(): ?string
    {
        return $this->fieldOrder;
    }

    /**
     * @return bool|null
     */
    public function getIsUpload(): ?bool
    {
        return $this->isUpload;
    }

    /**
     * @return string|null
     */
    public function getInitialSyncStatus(): ?string
    {
        return $this->initialSyncStatus;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @return array|null
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @return string|null
     */
    public function getPointsOfInterest(): ?string
    {
        return $this->pointsOfInterest;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string|null $entityType
     *
     * @return self
     */
    public function setEntityType(?string $entityType): self
    {
        $this->entityType = $entityType;
        return $this;
    }

    /**
     * @param bool|null $showInGettingStarted
     *
     * @return self
     */
    public function setShowInGettingStarted(?bool $showInGettingStarted): self
    {
        $this->showInGettingStarted = $showInGettingStarted;

        return $this;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param Field[]|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param array|null $segments
     *
     * @return self
     */
    public function setSegments(?array $segments): self
    {
        $this->segments = $segments;

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
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @param string|null $visibilityType
     *
     * @return self
     */
    public function setVisibilityType(?string $visibilityType): self
    {
        $this->visibilityType = $visibilityType;

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
     * @param int|null $dbId
     *
     * @return self
     */
    public function setDbId(?int $dbId): self
    {
        $this->dbId = $dbId;

        return $this;
    }

    /**
     * @param string|null $fieldOrder
     *
     * @return self
     */
    public function setFieldOrder(?string $fieldOrder): self
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    /**
     * @param bool|null $isUpload
     *
     * @return self
     */
    public function setIsUpload(?bool $isUpload): self
    {
        $this->isUpload = $isUpload;

        return $this;
    }

    /**
     * @param string|null $initialSyncStatus
     *
     * @return self
     */
    public function setInitialSyncStatus(?string $initialSyncStatus): self
    {
        $this->initialSyncStatus = $initialSyncStatus;

        return $this;
    }

    /**
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @param array|null $metrics
     *
     * @return self
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;

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
     * @param string|null $pointsOfInterest
     *
     * @return self
     */
    public function setPointsOfInterest(?string $pointsOfInterest): self
    {
        $this->pointsOfInterest = $pointsOfInterest;

        return $this;
    }
}
