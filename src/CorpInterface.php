<?php

namespace Tourze\WechatWorkContracts;

interface CorpInterface
{
    /**
     * 企业ID
     */
    public function getCorpId(): ?string;

    /**
     * 企业密钥
     */
    public function getCorpSecret(): ?string;
}
