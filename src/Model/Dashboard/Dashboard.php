<?php

namespace Inserve\MetabaseAPI\Model\Dashboard;

use Inserve\MetabaseAPI\Model\Collection\Collection;

/**
 *
 */
class Dashboard
{
    protected ?string $description = null;
    protected ?bool $archived = null;
    protected ?int $collectionPosition = null;
    /** @var OrderedCard[]|null */
    protected ?array $orderedCards = null;
    protected ?array $paramValues = null;
    protected ?bool $canWrite = null;
    protected ?bool $enableEmbedding = null;
    protected ?int $collectionId = null;
    protected ?bool $showInGettingStarted = null;
    protected ?string $name = null;
    protected ?int $creatorId = null;
    protected ?string $updatedAt = null;
    protected ?int $madePublicById = null;
    protected ?array $embeddingParams = null;
    protected ?int $cacheTtl = null;
    protected ?array $orderedTabs = null;
    protected ?int $id = null;
    protected null $position = null;
    protected ?string $entityId = null;
    protected ?array $paramFields = null;
    protected ?Collection $collection = null;
    protected ?array $parameters = null;
    protected ?bool $autoApplyFilters = null;
    protected ?string $createdAt = null;
    protected ?string $publicUuid = null;
    protected ?string $pointsOfInterest = null;

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
     * @return int|null
     */
    public function getCollectionPosition(): ?int
    {
        return $this->collectionPosition;
    }

    /**
     * @return OrderedCard[]|null
     */
    public function getOrderedCards(): ?array
    {
        return $this->orderedCards;
    }

    /**
     * @return array|null
     */
    public function getParamValues(): ?array
    {
        return $this->paramValues;
    }

    /**
     * @return bool|null
     */
    public function getCanWrite(): ?bool
    {
        return $this->canWrite;
    }

    /**
     * @return bool|null
     */
    public function getEnableEmbedding(): ?bool
    {
        return $this->enableEmbedding;
    }

    /**
     * @return int|null
     */
    public function getCollectionId(): ?int
    {
        return $this->collectionId;
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
     * @return int|null
     */
    public function getCreatorId(): ?int
    {
        return $this->creatorId;
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
    public function getMadePublicById(): ?int
    {
        return $this->madePublicById;
    }

    /**
     * @return array|null
     */
    public function getEmbeddingParams(): ?array
    {
        return $this->embeddingParams;
    }

    /**
     * @return int|null
     */
    public function getCacheTtl(): ?int
    {
        return $this->cacheTtl;
    }

    /**
     * @return array|null
     */
    public function getOrderedTabs(): ?array
    {
        return $this->orderedTabs;
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
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * @return array|null
     */
    public function getParamFields(): ?array
    {
        return $this->paramFields;
    }

    /**
     * @return Collection|null
     */
    public function getCollection(): ?Collection
    {
        return $this->collection;
    }

    /**
     * @return array|null
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @return bool|null
     */
    public function getAutoApplyFilters(): ?bool
    {
        return $this->autoApplyFilters;
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
    public function getPublicUuid(): ?string
    {
        return $this->publicUuid;
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
     * @param int|null $collectionPosition
     *
     * @return self
     */
    public function setCollectionPosition(?int $collectionPosition): self
    {
        $this->collectionPosition = $collectionPosition;
        
        return $this;
    }

    /**
     * @param OrderedCard[]|null $orderedCards
     */
    public function setOrderedCards(?array $orderedCards): self
    {
        $this->orderedCards = $orderedCards;
        
        return $this;
    }

    /**
     * @param array|null $paramValues
     *
     * @return self
     */
    public function setParamValues(?array $paramValues): self
    {
        $this->paramValues = $paramValues;
        
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
     * @param bool|null $enableEmbedding
     *
     * @return self
     */
    public function setEnableEmbedding(?bool $enableEmbedding): self
    {
        $this->enableEmbedding = $enableEmbedding;
        
        return $this;
    }

    /**
     * @param int|null $collectionId
     *
     * @return self
     */
    public function setCollectionId(?int $collectionId): self
    {
        $this->collectionId = $collectionId;
        
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
     * @param int|null $madePublicById
     *
     * @return self
     */
    public function setMadePublicById(?int $madePublicById): self
    {
        $this->madePublicById = $madePublicById;
        
        return $this;
    }

    /**
     * @param array|null $embeddingParams
     *
     * @return self
     */
    public function setEmbeddingParams(?array $embeddingParams): self
    {
        $this->embeddingParams = $embeddingParams;
        
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
     * @param array|null $orderedTabs
     *
     * @return self
     */
    public function setOrderedTabs(?array $orderedTabs): self
    {
        $this->orderedTabs = $orderedTabs;
        
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
     * @param array|null $paramFields
     *
     * @return self
     */
    public function setParamFields(?array $paramFields): self
    {
        $this->paramFields = $paramFields;
        
        return $this;
    }

    /**
     * @param Collection|null $collection
     *
     * @return self
     */
    public function setCollection(?Collection $collection): self
    {
        $this->collection = $collection;
        
        return $this;
    }

    /**
     * @param array|null $parameters
     *
     * @return self
     */
    public function setParameters(?array $parameters): self
    {
        $this->parameters = $parameters;
        
        return $this;
    }

    /**
     * @param bool|null $autoApplyFilters
     *
     * @return self
     */
    public function setAutoApplyFilters(?bool $autoApplyFilters): self
    {
        $this->autoApplyFilters = $autoApplyFilters;
        
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
     * @param string|null $publicUuid
     *
     * @return self
     */
    public function setPublicUuid(?string $publicUuid): self
    {
        $this->publicUuid = $publicUuid;
        
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
