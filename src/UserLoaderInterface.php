<?php

namespace Tourze\WechatWorkContracts;

interface UserLoaderInterface
{
    /**
     * 根据UserId和企业信息读取用户
     */
    public function loadUserByUserIdAndCorp(string $userId, CorpInterface $corp): ?UserInterface;

    /**
     * 创建用户
     */
    public function createUser(CorpInterface $corp, AgentInterface $agent, string $userId, string $name): UserInterface;
}
