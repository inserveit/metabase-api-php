<?php

namespace Inserve\MetabaseAPI\Model\Database;

/**
 *
 */
class Fingerprint
{
    protected ?GlobalObject $global = null;
    protected ?Type $type = null;

    /**
     * @return GlobalObject|null
     */
    public function getGlobal(): ?GlobalObject
    {
        return $this->global;
    }

    /**
     * @return Type|null
     */
    public function getType(): ?Type
    {
        return $this->type;
    }

    /**
     * @param GlobalObject|null $global
     *
     * @return self
     */
    public function setGlobal(?GlobalObject $global): self
    {
        $this->global = $global;

        return $this;
    }

    /**
     * @param Type|null $type
     *
     * @return self
     */
    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }
}
