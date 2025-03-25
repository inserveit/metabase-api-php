<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class Field
{
    protected ?string $description = null;
    protected ?string $databaseType = null;
    protected ?string $semanticType = null;
    protected ?int $tableId = null;
    protected ?string $name = null;
    protected ?int $fingerprintVersion = null;
    protected ?string $hasFieldValues = null;
    protected ?int $fkTargetFieldId = null;
    protected ?string $updatedAt = null;
    protected ?int $customPosition = null;
    protected ?string $effectiveType = null;
    protected ?bool $active = null;
    /** @var string[]|null */
    protected ?array $nfcPath = [];
    protected ?int $parentId  = null;
    protected ?int $id = null;
    protected ?string $lastAnalyzed = null;
    protected ?bool $databaseIsAutoIncrement = null;
    protected ?bool $jsonUnfolding = null;
    protected ?int $position = null;
    protected ?string $visibilityType = null;
    protected ?Field $target = null;
    protected ?bool $previewDisplay = null;
    protected ?string $displayName = null;
    protected ?int $databasePosition = null;
    protected ?bool $databaseRequired = null;
    protected ?Fingerprint $fingerprint = null;
    protected ?string $createdAt = null;
    protected ?string $baseType = null;
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
    public function getDatabaseType(): ?string
    {
        return $this->databaseType;
    }

    /**
     * @return string|null
     */
    public function getSemanticType(): ?string
    {
        return $this->semanticType;
    }

    /**
     * @return int|null
     */
    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getFingerprintVersion(): ?int
    {
        return $this->fingerprintVersion;
    }

    /**
     * @return string|null
     */
    public function getHasFieldValues(): ?string
    {
        return $this->hasFieldValues;
    }

    /**
     * @return int|null
     */
    public function getFkTargetFieldId(): ?int
    {
        return $this->fkTargetFieldId;
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
    public function getCustomPosition(): ?int
    {
        return $this->customPosition;
    }

    /**
     * @return string|null
     */
    public function getEffectiveType(): ?string
    {
        return $this->effectiveType;
    }

    /**
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * @return string[]|null
     */
    public function getNfcPath(): ?array
    {
        return $this->nfcPath;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getLastAnalyzed(): ?string
    {
        return $this->lastAnalyzed;
    }

    /**
     * @return bool|null
     */
    public function getDatabaseIsAutoIncrement(): ?bool
    {
        return $this->databaseIsAutoIncrement;
    }

    /**
     * @return bool|null
     */
    public function getJsonUnfolding(): ?bool
    {
        return $this->jsonUnfolding;
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string|null
     */
    public function getVisibilityType(): ?string
    {
        return $this->visibilityType;
    }

    /**
     * @return Field|null
     */
    public function getTarget(): ?Field
    {
        return $this->target;
    }

    /**
     * @return bool|null
     */
    public function getPreviewDisplay(): ?bool
    {
        return $this->previewDisplay;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @return int|null
     */
    public function getDatabasePosition(): ?int
    {
        return $this->databasePosition;
    }

    /**
     * @return bool|null
     */
    public function getDatabaseRequired(): ?bool
    {
        return $this->databaseRequired;
    }

    /**
     * @return Fingerprint|null
     */
    public function getFingerprint(): ?Fingerprint
    {
        return $this->fingerprint;
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
    public function getBaseType(): ?string
    {
        return $this->baseType;
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
     * @param string|null $databaseType
     *
     * @return self
     */
    public function setDatabaseType(?string $databaseType): self
    {
        $this->databaseType = $databaseType;

        return $this;
    }

    /**
     * @param string|null $semanticType
     *
     * @return self
     */
    public function setSemanticType(?string $semanticType): self
    {
        $this->semanticType = $semanticType;

        return $this;
    }

    /**
     * @param int|null $tableId
     *
     * @return self
     */
    public function setTableId(?int $tableId): self
    {
        $this->tableId = $tableId;

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
     * @param int|null $fingerprintVersion
     *
     * @return self
     */
    public function setFingerprintVersion(?int $fingerprintVersion): self
    {
        $this->fingerprintVersion = $fingerprintVersion;

        return $this;
    }

    /**
     * @param string|null $hasFieldValues
     *
     * @return self
     */
    public function setHasFieldValues(?string $hasFieldValues): self
    {
        $this->hasFieldValues = $hasFieldValues;

        return $this;
    }

    /**
     * @param int|null $fkTargetFieldId
     *
     * @return self
     */
    public function setFkTargetFieldId(?int $fkTargetFieldId): self
    {
        $this->fkTargetFieldId = $fkTargetFieldId;

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
     * @param int|null $customPosition
     *
     * @return self
     */
    public function setCustomPosition(?int $customPosition): self
    {
        $this->customPosition = $customPosition;

        return $this;
    }

    /**
     * @param string|null $effectiveType
     *
     * @return self
     */
    public function setEffectiveType(?string $effectiveType): self
    {
        $this->effectiveType = $effectiveType;

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
     * @param string[]|null $nfcPath
     */
    public function setNfcPath(?array $nfcPath): self
    {
        $this->nfcPath = $nfcPath;

        return $this;
    }

    /**
     * @param int|null $parentId
     *
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;

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
     * @param string|null $lastAnalyzed
     *
     * @return self
     */
    public function setLastAnalyzed(?string $lastAnalyzed): self
    {
        $this->lastAnalyzed = $lastAnalyzed;

        return $this;
    }

    /**
     * @param bool|null $databaseIsAutoIncrement
     *
     * @return self
     */
    public function setDatabaseIsAutoIncrement(?bool $databaseIsAutoIncrement): self
    {
        $this->databaseIsAutoIncrement = $databaseIsAutoIncrement;

        return $this;
    }

    /**
     * @param bool|null $jsonUnfolding
     *
     * @return self
     */
    public function setJsonUnfolding(?bool $jsonUnfolding): self
    {
        $this->jsonUnfolding = $jsonUnfolding;

        return $this;
    }

    /**
     * @param int|null $position
     *
     * @return self
     */
    public function setPosition(?int $position): self
    {
        $this->position = $position;

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
     * @param Field|null $target
     *
     * @return self
     */
    public function setTarget(?Field $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @param bool|null $previewDisplay
     *
     * @return self
     */
    public function setPreviewDisplay(?bool $previewDisplay): self
    {
        $this->previewDisplay = $previewDisplay;

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
     * @param int|null $databasePosition
     *
     * @return self
     */
    public function setDatabasePosition(?int $databasePosition): self
    {
        $this->databasePosition = $databasePosition;

        return $this;
    }

    /**
     * @param bool|null $databaseRequired
     *
     * @return self
     */
    public function setDatabaseRequired(?bool $databaseRequired): self
    {
        $this->databaseRequired = $databaseRequired;

        return $this;
    }

    /**
     * @param Fingerprint|null $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?Fingerprint $fingerprint): self
    {
        $this->fingerprint = $fingerprint;

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
     * @param string|null $baseType
     *
     * @return self
     */
    public function setBaseType(?string $baseType): self
    {
        $this->baseType = $baseType;

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
