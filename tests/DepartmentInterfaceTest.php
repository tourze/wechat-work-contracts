<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\DepartmentInterface;

/**
 * 验证 DepartmentInterface 接口存在性的测试
 *
 * @internal
 */
#[CoversClass(DepartmentInterface::class)]
final class DepartmentInterfaceTest extends TestCase
{
    public function testDepartmentInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(DepartmentInterface::class));
    }

    public function testDepartmentInterfaceHasRequiredMethods(): void
    {
        $reflection = new \ReflectionClass(DepartmentInterface::class);
        $expectedMethods = ['getId', 'getName'];

        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', DepartmentInterface::class, $methodName)
            );
        }
    }
}
