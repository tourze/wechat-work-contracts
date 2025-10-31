<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\CorpInterface;

/**
 * 验证 CorpInterface 接口存在性的测试
 *
 * @internal
 */
#[CoversClass(CorpInterface::class)]
final class CorpInterfaceTest extends TestCase
{
    public function testCorpInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(CorpInterface::class));
    }

    public function testCorpInterfaceHasRequiredMethods(): void
    {
        $reflection = new \ReflectionClass(CorpInterface::class);
        $expectedMethods = ['getCorpId', 'getCorpSecret'];

        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', CorpInterface::class, $methodName)
            );
        }
    }
}
