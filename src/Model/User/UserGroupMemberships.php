<?php

namespace Inserve\MetabaseAPI\Model\User;

/**
 *
 */
class UserGroupMemberships
{
    protected ?int $id = null;
    protected ?bool $isGroupManager = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
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
     * @return bool|null
     */
    public function getIsGroupManager(): ?bool
    {
        return $this->isGroupManager;
    }

    /**
     * @param bool|null $isGroupManager
     *
     * @return self
     */
    public function setIsGroupManager(?bool $isGroupManager): UserGroupMemberships
    {
        $this->isGroupManager = $isGroupManager;

        return $this;
    }
}
