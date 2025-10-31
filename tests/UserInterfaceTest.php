<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\UserInterface;

/**
 * 验证 UserInterface 接口存在性和基本结构的测试
 *
 * @internal
 */
#[CoversClass(UserInterface::class)]
final class UserInterfaceTest extends TestCase
{
    public function testUserInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(UserInterface::class));
    }

    public function testUserInterfaceHasRequiredMethods(): void
    {
        $reflection = new \ReflectionClass(UserInterface::class);
        $expectedMethods = ['getUserId', 'getName'];

        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', UserInterface::class, $methodName)
            );
        }
    }
}
