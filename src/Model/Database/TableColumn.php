<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class TableColumn
{
    protected ?string $name = null;
    protected ?array $fieldRef = null;
    protected ?bool $enabled = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return array|null
     */
    public function getFieldRef(): ?array
    {
        return $this->fieldRef;
    }

    /**
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
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
     * @param array|null $fieldRef
     *
     * @return self
     */
    public function setFieldRef(?array $fieldRef): self
    {
        $this->fieldRef = $fieldRef;

        return $this;
    }

    /**
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
