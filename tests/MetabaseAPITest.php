<?php

namespace Inserve\MetabaseAPI\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Inserve\MetabaseAPI\MetabaseAPI;
use PHPUnit\Framework\TestCase;
use Inserve\MetabaseAPI\MetabaseAPIException;

/**
 *
 */
class MetabaseAPITest extends TestCase
{
    protected ClientInterface $httpClient;
    protected MetabaseAPI $metabaseAPI;

    /**
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function testAuthenticateException(): void
    {
        $this->setExpectedResponses([
            new RequestException('Whoops', new Request('GET', 'unittest')),
        ]);

        $this->expectExceptionMessage('Whoops');
        $this->expectException(MetabaseAPIException::class);
        $this->metabaseAPI->authenticate('unit', 'test');
    }

    /**
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function testAuthenticateInvalidResponseCode(): void
    {
        $this->setExpectedResponses([
            new Response(301),
        ]);

        $this->expectException(MetabaseAPIException::class);
        $this->expectExceptionMessage('Unable to authenticate.');
        $this->metabaseAPI->authenticate('unit', 'test');
    }

    /**
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function testAuthenticateInvalidResponse(): void
    {
        $this->setExpectedResponses([
            new Response(200, [], json_encode(['invalid'])),
        ]);

        $this->expectException(MetabaseAPIException::class);
        $this->expectExceptionMessage('Invalid authentication response.');
        $this->metabaseAPI->authenticate('unit', 'test');
    }

    /**
     * @return void
     *
     * @throws MetabaseAPIException
     */
    public function testAuthenticate(): void
    {
        $this->setExpectedResponses([
            new Response(200, [], json_encode(['id' => 'unittest'])),
        ]);

        self::assertEquals('unittest', $this->metabaseAPI->authenticate('unit', 'test'));
    }

    /**
     * @param array $responses
     *
     * @return void
     */
    protected function setExpectedResponses(array $responses): void
    {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);

        $this->httpClient = new Client(['handler' => $handlerStack]);
        $this->metabaseAPI = new MetabaseAPI($this->httpClient);
    }
}
