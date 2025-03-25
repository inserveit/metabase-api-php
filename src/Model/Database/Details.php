<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
final class Details
{
    protected ?string $host = null;
    protected ?int $port = null;
    protected ?string $dbname = null;
    protected ?string $user = null;
    protected ?string $password = null;
    protected ?bool $ssl = null;
    protected ?bool $tunnelEnabled = null;
    protected ?bool $advancedOptions = null;

    /**
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * @return string|null
     */
    public function getDbname(): ?string
    {
        return $this->dbname;
    }

    /**
     * @return string|null
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return bool|null
     */
    public function getSsl(): ?bool
    {
        return $this->ssl;
    }

    /**
     * @return bool|null
     */
    public function getTunnelEnabled(): ?bool
    {
        return $this->tunnelEnabled;
    }

    /**
     * @return bool|null
     */
    public function getAdvancedOptions(): ?bool
    {
        return $this->advancedOptions;
    }

    /**
     * @param string|null $host
     * @return self
     */
    public function setHost(?string $host): self
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @param int|null $port
     *
     * @return self
     */
    public function setPort(?int $port): self
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @param string|null $dbname
     * @return self
     */
    public function setDbname(?string $dbname): self
    {
        $this->dbname = $dbname;
        return $this;
    }

    /**
     * @param string|null $user
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param string|null $password
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @param bool|null $ssl
     * @return self
     */
    public function setSsl(?bool $ssl): self
    {
        $this->ssl = $ssl;
        return $this;
    }

    /**
     * @param bool|null $tunnelEnabled
     * @return self
     */
    public function setTunnelEnabled(?bool $tunnelEnabled): self
    {
        $this->tunnelEnabled = $tunnelEnabled;
        return $this;
    }

    /**
     * @param bool|null $advancedOptions
     * @return self
     */
    public function setAdvancedOptions(?bool $advancedOptions): self
    {
        $this->advancedOptions = $advancedOptions;
        return $this;
    }
}
