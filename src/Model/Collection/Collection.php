<?php

namespace Inserve\MetabaseAPI\Model\Collection;

/**
 *
 */
class Collection
{
    protected ?string $name = null;
    protected string|int|null $id = null;
    protected ?int $parentId = null;
    protected ?string $effectiveLocation = null;
    protected ?array $effectiveAncestors = null;
    protected ?bool $canWrite = null;
    protected ?string $description = null;
    protected ?bool $archived = null;
    protected ?string $slug = null;
    protected ?string $color = null;
    protected ?int $personalOwnerId = null;
    protected ?string $type = null;
    protected ?string $entityId = null;
    protected ?string $location = null;
    protected ?string $namespace = null;
    protected ?string $createdAt = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|int|null
     */
    public function getId(): string|int|null
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return string|null
     */
    public function getEffectiveLocation(): ?string
    {
        return $this->effectiveLocation;
    }

    /**
     * @return array|null
     */
    public function getEffectiveAncestors(): ?array
    {
        return $this->effectiveAncestors;
    }

    /**
     * @return bool|null
     */
    public function getCanWrite(): ?bool
    {
        return $this->canWrite;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return bool|null
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @return int|null
     */
    public function getPersonalOwnerId(): ?int
    {
        return $this->personalOwnerId;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @return string|null
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
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
     * @param string|int|null $id
     *
     * @return self
     */
    public function setId(string|int|null $id): self
    {
        $this->id = $id;
        
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
     * @param string|null $effectiveLocation
     *
     * @return self
     */
    public function setEffectiveLocation(?string $effectiveLocation): self
    {
        $this->effectiveLocation = $effectiveLocation;
        
        return $this;
    }

    /**
     * @param array|null $effectiveAncestors
     *
     * @return self
     */
    public function setEffectiveAncestors(?array $effectiveAncestors): self
    {
        $this->effectiveAncestors = $effectiveAncestors;
        
        return $this;
    }

    /**
     * @param bool|null $canWrite
     *
     * @return self
     */
    public function setCanWrite(?bool $canWrite): self
    {
        $this->canWrite = $canWrite;
        
        return $this;
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
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;
        
        return $this;
    }

    /**
     * @param string|null $slug
     *
     * @return self
     */
    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;
        
        return $this;
    }

    /**
     * @param string|null $color
     *
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        
        return $this;
    }

    /**
     * @param int|null $personalOwnerId
     *
     * @return self
     */
    public function setPersonalOwnerId(?int $personalOwnerId): self
    {
        $this->personalOwnerId = $personalOwnerId;
        
        return $this;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        
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
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location): self
    {
        $this->location = $location;
        
        return $this;
    }

    /**
     * @param string|null $namespace
     *
     * @return self
     */
    public function setNamespace(?string $namespace): self
    {
        $this->namespace = $namespace;

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
}
