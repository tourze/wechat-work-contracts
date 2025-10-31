<?php

declare(strict_types=1);

namespace Tourze\WechatWorkContracts\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Tourze\WechatWorkContracts\AgentInterface;

/**
 * 验证 AgentInterface 接口存在性的测试
 *
 * @internal
 */
#[CoversClass(AgentInterface::class)]
final class AgentInterfaceTest extends TestCase
{
    public function testAgentInterfaceExists(): void
    {
        $this->assertTrue(interface_exists(AgentInterface::class));
    }

    public function testAgentInterfaceHasRequiredMethods(): void
    {
        $reflection = new \ReflectionClass(AgentInterface::class);
        $expectedMethods = ['getAgentId', 'getWelcomeText', 'getCorp', 'getToken', 'getEncodingAESKey'];

        foreach ($expectedMethods as $methodName) {
            $this->assertTrue(
                $reflection->hasMethod($methodName),
                sprintf('Interface %s should have method %s', AgentInterface::class, $methodName)
            );
        }
    }
}
