<?php

namespace Inserve\MetabaseAPI\Model\Permissions;

/**
 *
 */
final class Membership
{
    protected ?string $firstName = null;
    protected ?string $lastName = null;
    protected ?string $email = null;
    protected ?int $userId = null;
    protected ?int $groupId = null;
    protected ?int $membershipId = null;
    protected ?bool $isGroupManager = null;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
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
    public function getMembershipId(): ?int
    {
        return $this->membershipId;
    }

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @return bool|null
     */
    public function getIsGroupManager(): ?bool
    {
        return $this->isGroupManager;
    }

    /**
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
     * @param int|null $membershipId
     *
     * @return self
     */
    public function setMembershipId(?int $membershipId): self
    {
        $this->membershipId = $membershipId;

        return $this;
    }


    /**
     * @param bool|null $isGroupManager
     *
     * @return self
     */
    public function setIsGroupManager(?bool $isGroupManager): Membership
    {
        $this->isGroupManager = $isGroupManager;

        return $this;
    }

    /**
     * @param int|null $groupId
     *
     * @return self
     */
    public function setGroupId(?int $groupId): Membership
    {
        $this->groupId = $groupId;

        return $this;
    }
}
