<?php

namespace Inserve\MetabaseAPI\Model\Card;

use Inserve\MetabaseAPI\Model\Database\Fingerprint;

/**
 *
 */
final class ResultMetadata
{
    protected ?string $description = null;
    protected ?string $semanticType = null;
    protected ?string $name = null;
    /** @var (string|int|null|FieldRef)[]|null */
    protected ?array $fieldRef = null;
    protected ?string $effectiveType = null;
    protected ?int $id = null;
    protected ?string $visibilityType = null;
    protected ?string $displayName = null;
    protected ?Fingerprint $fingerprint = null;
    protected ?string $baseType = null;
    protected ?string $unit = null;


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
    public function getSemanticType(): ?string
    {
        return $this->semanticType;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return (string|int|null|FieldRef)[]|null
     */
    public function getFieldRef(): ?array
    {
        return $this->fieldRef;
    }

    /**
     * @return string|null
     */
    public function getEffectiveType(): ?string
    {
        return $this->effectiveType;
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
    public function getVisibilityType(): ?string
    {
        return $this->visibilityType;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
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
    public function getBaseType(): ?string
    {
        return $this->baseType;
    }

    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
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
     * @param (string|int|null|FieldRef)[]|null $fieldRef
     */
    public function setFieldRef(?array $fieldRef): self
    {
        $this->fieldRef = $fieldRef;

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
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }
}
