<?php

namespace Inserve\MetabaseAPI\Model\Bookmark;

/**
 *
 */
class BookmarkCreated
{
    protected ?int $id = null;
    protected ?int $userId = null;
    protected ?int $dashboardId = null;
    protected ?string $createdAt = null;

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
    public function getUserId(): ?int
    {
        return $this->userId;
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
     * @param int|null $userId
     *
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        
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
}
