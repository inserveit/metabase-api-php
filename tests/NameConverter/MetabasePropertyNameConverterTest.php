<?php

namespace Inserve\MetabaseAPI\Tests\NameConverter;

use Inserve\MetabaseAPI\NameConverter\MetabasePropertyNameConverter;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class MetabasePropertyNameConverterTest extends TestCase
{
    /**
     * @return void
     */
    public function testNormalize(): void
    {
        $converter = new MetabasePropertyNameConverter();
        self::assertSame('unit_test', $converter->normalize('unit_test'));
        self::assertSame('unit_test', $converter->normalize('unitTest'));

        self::assertSame('source-table', $converter->normalize('source-table'));
        self::assertSame('source-table', $converter->normalize('sourceTable'));
    }

    /**
     * @return void
     */
    public function testDenormalize(): void
    {
        $converter = new MetabasePropertyNameConverter();
        self::assertSame('unitTest', $converter->denormalize('unit_test'));
        self::assertSame('unitTest', $converter->denormalize('unitTest'));

        self::assertSame('sourceTable', $converter->denormalize('source-table'));
        self::assertSame('sourceTable', $converter->denormalize('sourceTable'));
    }
}
