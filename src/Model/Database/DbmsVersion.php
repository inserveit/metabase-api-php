<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class DbmsVersion
{
    protected ?string $flavor = null;
    protected ?string $version = null;
    protected ?array $semanticVersion = [];

    /**
     * @return string|null
     */
    public function getFlavor(): ?string
    {
        return $this->flavor;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @return int[]|null
     */
    public function getSemanticVersion(): ?array
    {
        return $this->semanticVersion;
    }

    /**
     * @param string|null $flavor
     *
     * @return self
     */
    public function setFlavor(?string $flavor): self
    {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param int[]|null $semanticVersion
     *
     * @return self
     */
    public function setSemanticVersion(?array $semanticVersion): self
    {
        $this->semanticVersion = $semanticVersion;

        return $this;
    }
}
