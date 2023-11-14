<?php

namespace Inserve\MetabaseAPI\API;

use DateTimeImmutable;
use Inserve\MetabaseAPI\MetabaseAPIException;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

/**
 *
 */
class EmbedAPI extends AbstractAPIClient
{
    protected string $embeddedSecretKey = '';
    protected ?DateTimeImmutable $expiresAt = null;

    /**
     * @param string $embeddedSecretKey
     *
     * @return self
     */
    public function setKey(string $embeddedSecretKey): self
    {
        $this->embeddedSecretKey = $embeddedSecretKey;

        return $this;
    }

    /**
     * @param int|null $seconds
     *
     * @return self
     */
    public function setExpiresAt(?int $seconds = null): self
    {
        if (!$seconds) {
            $this->expiresAt = null;
        } else {
            $this->expiresAt = (new DateTimeImmutable())->modify(sprintf('+%d seconds', $seconds));
        }

        return $this;
    }

    /**
     * @param int   $id
     * @param array $options
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    public function dashboard(int $id, array $options = []): string
    {
        return $this->getEmbedUrl('dashboard', $id, $options);
    }

    /**
     * @param int   $id
     * @param array $options
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    public function card(int $id, array $options = []): string
    {
        return $this->getEmbedUrl('question', $id, $options);
    }

    /**
     * @param string $resource
     * @param int    $id
     * @param array  $options
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    protected function getEmbedUrl(string $resource, int $id, array $options = []): string
    {
        $token = $this->getToken($resource, $id, $options);

        return sprintf('embed/%s/%s#', $resource, $token);
    }

    /**
     * @param string $resource
     * @param int    $id
     * @param array  $params
     *
     * @return string
     *
     * @throws MetabaseAPIException
     */
    protected function getToken(string $resource, int $id, array $params = []): string
    {
        if (!$this->embeddedSecretKey) {
            throw new MetabaseAPIException('The embedded secret key should be set.');
        }

        $jwtConfig = Configuration::forSymmetricSigner(
            new Sha256(),
            InMemory::plainText($this->embeddedSecretKey)
        );

        $jwtBuilder = $jwtConfig->builder();
        $jwtBuilder
            ->withClaim('resource', [$resource => $id])
            ->withClaim('params', empty($params) ? (object)[] : $params)
        ;

        if ($this->expiresAt) {
            $jwtBuilder->expiresAt($this->expiresAt);
        }

        return $jwtBuilder
            ->getToken($jwtConfig->signer(), $jwtConfig->signingKey())
            ->toString()
        ;
    }
}
