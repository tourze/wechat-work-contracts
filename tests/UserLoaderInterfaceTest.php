<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\UserLoaderInterface;

/**
 * 验证 UserLoaderInterface 接口存在性的测试
 *
 * @internal
 */
#[CoversClass(UserLoaderInterface::class)]
final class UserLoaderInterfaceTest extends TestCase
{
    public function testUserLoaderInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(UserLoaderInterface::class));
    }

    public function testUserLoaderInterfaceHasRequiredMethods(): void
    {
        $reflection = new \ReflectionClass(UserLoaderInterface::class);
        $expectedMethods = ['loadUserByUserIdAndCorp', 'createUser'];

        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', UserLoaderInterface::class, $methodName)
            );
        }
    }
}
