<?php

namespace Tourze\WechatWorkContracts;

interface UserLoaderInterface
{
    /**
     * 根据UserId和企业信息读取用户
     */
    public function loadUserByUserIdAndCorp(string $userId, CorpInterface $corp): ?UserInterface;
}
