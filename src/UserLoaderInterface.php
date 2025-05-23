<?php

namespace Tourze\WechatWorkStaffModel;

interface UserLoaderInterface
{
    /**
     * 根据UserId读取用户
     */
    public function loadUserByUserId(string $userId): ?UserInterface;
}
