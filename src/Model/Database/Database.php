<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class Database
{
    protected ?string $description = null;
    protected array $features = [];
    protected ?string $cacheFieldValuesSchedule = null;
    protected ?string $timezone = null;
    protected ?bool $autoRunQueries = false;
    protected ?string $metadataSyncSchedule = null;
    protected ?string $name = null;
    protected ?bool $canManage = false;
    protected ?int $creatorId = null;
    protected ?bool $isFullSync = false;
    protected ?string $updatedAt = null;
    protected ?int $cacheTtl = null;
    protected ?Details $details = null;
    protected ?bool $isSample = false;
    protected ?int $id = null;
    protected ?bool $isOnDemand = false;
    protected ?Schedule $schedules = null;
    protected ?string $engine = null;
    protected ?string $initialSyncStatus = null;
    protected ?bool $isAudit = false;
    protected ?DbmsVersion $dbmsVersion = null;
    protected ?bool $refingerprint = null;
    protected ?string $createdAt = null;
    protected ?string $pointsOfInterest = null;
    protected ?bool $canUpload = null;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * @return string|null
     */
    public function getCacheFieldValuesSchedule(): ?string
    {
        return $this->cacheFieldValuesSchedule;
    }

    /**
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * @return bool|null
     */
    public function getAutoRunQueries(): ?bool
    {
        return $this->autoRunQueries;
    }

    /**
     * @return string|null
     */
    public function getMetadataSyncSchedule(): ?string
    {
        return $this->metadataSyncSchedule;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return bool|null
     */
    public function getCanManage(): ?bool
    {
        return $this->canManage;
    }

    /**
     * @return int|null
     */
    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }

    /**
     * @return bool|null
     */
    public function getIsFullSync(): ?bool
    {
        return $this->isFullSync;
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
    public function getCacheTtl(): ?int
    {
        return $this->cacheTtl;
    }

    /**
     * @return Details|null
     */
    public function getDetails(): ?Details
    {
        return $this->details;
    }

    /**
     * @return bool|null
     */
    public function getIsSample(): ?bool
    {
        return $this->isSample;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return bool|null
     */
    public function getIsOnDemand(): ?bool
    {
        return $this->isOnDemand;
    }

    /**
     * @return Schedule|null
     */
    public function getSchedules(): ?Schedule
    {
        return $this->schedules;
    }

    /**
     * @return string|null
     */
    public function getEngine(): ?string
    {
        return $this->engine;
    }

    /**
     * @return string|null
     */
    public function getInitialSyncStatus(): ?string
    {
        return $this->initialSyncStatus;
    }

    /**
     * @return bool|null
     */
    public function getIsAudit(): ?bool
    {
        return $this->isAudit;
    }

    /**
     * @return DbmsVersion|null
     */
    public function getDbmsVersion(): ?DbmsVersion
    {
        return $this->dbmsVersion;
    }

    /**
     * @return bool|null
     */
    public function getRefingerprint(): ?bool
    {
        return $this->refingerprint;
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
     * @return bool|null
     */
    public function getCanUpload(): ?bool
    {
        return $this->canUpload;
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
     * @param string[]|null $features
     *
     * @return self
     */
    public function setFeatures(?array $features): self
    {
        $this->features = $features;

        return $this;
    }

    /**
     * @param string|null $cacheFieldValuesSchedule
     *
     * @return self
     */
    public function setCacheFieldValuesSchedule(?string $cacheFieldValuesSchedule): self
    {
        $this->cacheFieldValuesSchedule = $cacheFieldValuesSchedule;

        return $this;
    }

    /**
     * @param string|null $timezone
     *
     * @return self
     */
    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @param bool|null $autoRunQueries
     *
     * @return self
     */
    public function setAutoRunQueries(?bool $autoRunQueries): self
    {
        $this->autoRunQueries = $autoRunQueries;

        return $this;
    }

    /**
     * @param string|null $metadataSyncSchedule
     *
     * @return self
     */
    public function setMetadataSyncSchedule(?string $metadataSyncSchedule): self
    {
        $this->metadataSyncSchedule = $metadataSyncSchedule;

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
     * @param bool|null $canManage
     *
     * @return self
     */
    public function setCanManage(?bool $canManage): self
    {
        $this->canManage = $canManage;

        return $this;
    }

    /**
     * @param int|null $creatorId
     *
     * @return self
     */
    public function setCreatorId(?int $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    /**
     * @param bool|null $isFullSync
     *
     * @return self
     */
    public function setIsFullSync(?bool $isFullSync): self
    {
        $this->isFullSync = $isFullSync;

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
     * @param int|null $cacheTtl
     *
     * @return self
     */
    public function setCacheTtl(?int $cacheTtl): self
    {
        $this->cacheTtl = $cacheTtl;

        return $this;
    }

    /**
     * @param Details|null $details
     *
     * @return self
     */
    public function setDetails(?Details $details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @param bool|null $isSample
     *
     * @return self
     */
    public function setIsSample(?bool $isSample): self
    {
        $this->isSample = $isSample;

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
     * @param bool|null $isOnDemand
     *
     * @return self
     */
    public function setIsOnDemand(?bool $isOnDemand): self
    {
        $this->isOnDemand = $isOnDemand;

        return $this;
    }

    /**
     * @param Schedule|null $schedules
     *
     * @return self
     */
    public function setSchedules(?Schedule $schedules): self
    {
        $this->schedules = $schedules;

        return $this;
    }

    /**
     * @param string|null $engine
     *
     * @return self
     */
    public function setEngine(?string $engine): self
    {
        $this->engine = $engine;

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
     * @param bool|null $isAudit
     *
     * @return self
     */
    public function setIsAudit(?bool $isAudit): self
    {
        $this->isAudit = $isAudit;

        return $this;
    }

    /**
     * @param DbmsVersion|null $dbmsVersion
     *
     * @return self
     */
    public function setDbmsVersion(?DbmsVersion $dbmsVersion): self
    {
        $this->dbmsVersion = $dbmsVersion;

        return $this;
    }

    /**
     * @param bool|null $refingerprint
     *
     * @return self
     */
    public function setRefingerprint(?bool $refingerprint): self
    {
        $this->refingerprint = $refingerprint;

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

    /**
     * @param bool|null $canUpload
     *
     * @return self
     */
    public function setCanUpload(?bool $canUpload): self
    {
        $this->canUpload = $canUpload;

        return $this;
    }
}
