<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\AgentInterface;
use Tourze\WechatWorkContracts\CorpInterface;
use Tourze\WechatWorkContracts\DepartmentInterface;
use Tourze\WechatWorkContracts\UserInterface;
use Tourze\WechatWorkContracts\UserLoaderInterface;

/**
 * 验证接口存在性和基本结构的测试
 */
class InterfaceExistenceTest extends TestCase
{
    /**
     * @dataProvider interfaceProvider
     */
    public function testInterfaceExists(string $interfaceName): void
    {
        $this->assertTrue(interface_exists($interfaceName));
    }

    /**
     * @dataProvider interfaceMethodsProvider
     */
    public function testInterfaceHasRequiredMethods(string $interfaceName, array $expectedMethods): void
    {
        $reflection = new \ReflectionClass($interfaceName);
        
        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', $interfaceName, $methodName)
            );
        }
    }

    public function interfaceProvider(): array
    {
        return [
            'AgentInterface' => [AgentInterface::class],
            'CorpInterface' => [CorpInterface::class],
            'DepartmentInterface' => [DepartmentInterface::class],
            'UserInterface' => [UserInterface::class],
            'UserLoaderInterface' => [UserLoaderInterface::class],
        ];
    }

    public function interfaceMethodsProvider(): array
    {
        return [
            'UserInterface methods' => [
                UserInterface::class,
                ['getUserId', 'getName'],
            ],
        ];
    }
}