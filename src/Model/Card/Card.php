<?php

namespace Inserve\MetabaseAPI\Model\Card;

/**
 *
 */
class Card
{
    protected ?string $description = null;
    protected ?bool $archived = null;
    protected ?int $collectionPosition = null;
    protected ?int $tableId = null;
    /** @var ResultMetadata[]|null */
    protected ?array $resultMetadata = null;
    protected ?int $databaseId = null;
    protected ?bool $enableEmbedding = null;
    protected ?int $collectionId = null;
    protected ?string $queryType = null;
    protected ?string $name = null;
    protected ?int $queryAverageDuration = null;
    protected ?int $creatorId = null;
    protected ?array $moderationReviews = null;
    protected ?string $updatedAt = null;
    protected ?int $madePublicById = null;
    protected ?array $embeddingParams = null;
    protected ?int $cacheTtl = null;
    protected ?DatasetQuery $datasetQuery = null;
    protected ?int $id = null;
    protected ?array $parameterMappings = null;
    protected ?string $display = null;
    protected ?string $entityId = null;
    protected ?bool $collectionPreview = null;
    protected ?VisualizationSettings $visualizationSettings = null;
    protected ?array $parameters = null;
    protected ?bool $dataset = null;
    protected ?string $createdAt = null;
    protected ?string $publicUuid = null;

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
     * @return int|null
     */
    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    /**
     * @return ResultMetadata[]|null
     */
    public function getResultMetadata(): ?array
    {
        return $this->resultMetadata;
    }

    /**
     * @return int|null
     */
    public function getDatabaseId(): ?int
    {
        return $this->databaseId;
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
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
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
    public function getQueryAverageDuration(): ?int
    {
        return $this->queryAverageDuration;
    }

    /**
     * @return int|null
     */
    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }

    /**
     * @return array|null
     */
    public function getModerationReviews(): ?array
    {
        return $this->moderationReviews;
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
     * @return DatasetQuery|null
     */
    public function getDatasetQuery(): ?DatasetQuery
    {
        return $this->datasetQuery;
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
     * @return string|null
     */
    public function getDisplay(): ?string
    {
        return $this->display;
    }

    /**
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->entityId;
    }

    /**
     * @return bool|null
     */
    public function getCollectionPreview(): ?bool
    {
        return $this->collectionPreview;
    }

    /**
     * @return VisualizationSettings|null
     */
    public function getVisualizationSettings(): ?VisualizationSettings
    {
        return $this->visualizationSettings;
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
    public function getDataset(): ?bool
    {
        return $this->dataset;
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
     * @param ResultMetadata[]|null $resultMetadata
     */
    public function setResultMetadata(?array $resultMetadata): self
    {
        $this->resultMetadata = $resultMetadata;

        return $this;
    }

    /**
     * @param int|null $databaseId
     *
     * @return self
     */
    public function setDatabaseId(?int $databaseId): self
    {
        $this->databaseId = $databaseId;

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
     * @param string|null $queryType
     *
     * @return self
     */
    public function setQueryType(?string $queryType): self
    {
        $this->queryType = $queryType;

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
     * @param int|null $queryAverageDuration
     *
     * @return self
     */
    public function setQueryAverageDuration(?int $queryAverageDuration): self
    {
        $this->queryAverageDuration = $queryAverageDuration;

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
     * @param array|null $moderationReviews
     *
     * @return self
     */
    public function setModerationReviews(?array $moderationReviews): self
    {
        $this->moderationReviews = $moderationReviews;

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
     * @param DatasetQuery|null $datasetQuery
     *
     * @return self
     */
    public function setDatasetQuery(?DatasetQuery $datasetQuery): self
    {
        $this->datasetQuery = $datasetQuery;

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
     * @param string|null $display
     *
     * @return self
     */
    public function setDisplay(?string $display): self
    {
        $this->display = $display;

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
     * @param bool|null $collectionPreview
     *
     * @return self
     */
    public function setCollectionPreview(?bool $collectionPreview): self
    {
        $this->collectionPreview = $collectionPreview;

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
     * @param bool|null $dataset
     *
     * @return self
     */
    public function setDataset(?bool $dataset): self
    {
        $this->dataset = $dataset;

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
}
