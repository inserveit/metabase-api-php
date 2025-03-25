<?php

namespace Inserve\MetabaseAPI\Model\Permissions;

/**
 *
 */
final class Group
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?int $memberCount = null;

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getMemberCount(): ?int
    {
        return $this->memberCount;
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
     * @param int|null $memberCount
     *
     * @return self
     */
    public function setMemberCount(?int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }
}
