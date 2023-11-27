<?php

namespace Inserve\MetabaseAPI\Model\User;

/**
 *
 */
class User
{
    protected ?string $email = null;
    protected ?string $firstName = null;
    protected ?string $locale = null;
    protected ?string $lastLogin = null;
    protected ?bool $isActive = null;
    /** @var UserGroupMemberships[]|null */
    protected ?array $userGroupMemberships = [];
    protected ?array $groupIds = [];
    protected ?bool $isQbnewb = null;
    protected ?string $updatedAt = null;
    protected ?bool $isSuperuser = null;
    protected ?array $loginAttributes = null;
    protected ?int $id = null;
    protected ?string $lastName = null;
    protected ?string $dateJoined = null;
    protected ?string $ssoSource  = null;
    protected ?string $commonName = null;

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

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
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @return string|null
     */
    public function getLastLogin(): ?string
    {
        return $this->lastLogin;
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @return UserGroupMemberships[]|null
     */
    public function getUserGroupMemberships(): ?array
    {
        return $this->userGroupMemberships;
    }

    /**
     * @return array|null
     */
    public function getGroupIds(): ?array
    {
        return $this->groupIds;
    }

    /**
     * @return bool|null
     */
    public function getIsQbnewb(): ?bool
    {
        return $this->isQbnewb;
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
    public function getIsSuperuser(): ?bool
    {
        return $this->isSuperuser;
    }

    /**
     * @return array|null
     */
    public function getLoginAttributes(): ?array
    {
        return $this->loginAttributes;
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
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getDateJoined(): ?string
    {
        return $this->dateJoined;
    }

    /**
     * @return string|null
     */
    public function getSsoSource(): ?string
    {
        return $this->ssoSource;
    }

    /**
     * @return string|null
     */
    public function getCommonName(): ?string
    {
        return $this->commonName;
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
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @param string|null $lastLogin
     *
     * @return self
     */
    public function setLastLogin(?string $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @param UserGroupMemberships[]|null $userGroupMemberships
     *
     * @return self
     */
    public function setUserGroupMemberships(?array $userGroupMemberships): self
    {
        $this->userGroupMemberships = $userGroupMemberships;

        return $this;
    }

    /**
     * @param array|null $groupIds
     *
     * @return self
     */
    public function setGroupIds(?array $groupIds): self
    {
        $this->groupIds = $groupIds;

        return $this;
    }

    /**
     * @param bool|null $isQbnewb
     *
     * @return self
     */
    public function setIsQbnewb(?bool $isQbnewb): self
    {
        $this->isQbnewb = $isQbnewb;

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
     * @param bool|null $isSuperuser
     *
     * @return self
     */
    public function setIsSuperuser(?bool $isSuperuser): self
    {
        $this->isSuperuser = $isSuperuser;

        return $this;
    }

    /**
     * @param array|null $loginAttributes
     *
     * @return self
     */
    public function setLoginAttributes(?array $loginAttributes): self
    {
        $this->loginAttributes = $loginAttributes;

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
     * @param string|null $dateJoined
     *
     * @return self
     */
    public function setDateJoined(?string $dateJoined): self
    {
        $this->dateJoined = $dateJoined;

        return $this;
    }

    /**
     * @param string|null $ssoSource
     *
     * @return self
     */
    public function setSsoSource(?string $ssoSource): self
    {
        $this->ssoSource = $ssoSource;

        return $this;
    }

    /**
     * @param string|null $commonName
     *
     * @return self
     */
    public function setCommonName(?string $commonName): self
    {
        $this->commonName = $commonName;

        return $this;
    }
}
