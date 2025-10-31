<?php

namespace Tourze\WechatWorkContracts;

interface AgentInterface
{
    public function getAgentId(): ?string;

    public function getWelcomeText(): ?string;

    public function getCorp(): ?CorpInterface;

    public function getToken(): ?string;

    public function getEncodingAESKey(): ?string;
}
