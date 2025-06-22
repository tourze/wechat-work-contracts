<?php

namespace Tourze\WechatWorkContracts;

interface AgentInterface
{
    public function getAgentId(): ?string;

    public function getWelcomeText(): ?string;
}
