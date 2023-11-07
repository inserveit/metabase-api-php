<?php

namespace Inserve\MetabaseAPI\Model\Permissions;

/**
 *
 */
class Permission
{
    protected ?int $revision = null;
    protected array $groups = [];

    /**
     * @return int|null
     */
    public function getRevision(): ?int
    {
        return $this->revision;
    }

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param int|null $revision
     *
     * @return self
     */
    public function setRevision(?int $revision): self
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * @param array $groups
     *
     * @return self
     */
    public function setGroups(array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }
}
