<?php

namespace Tourze\WechatWorkContracts;

/**
 * 部门成员
 *
 * @see https://developer.work.weixin.qq.com/document/path/90200
 */
interface UserInterface
{
    /**
     * 成员UserID。对应管理端的账号
     *
     * @return string|null
     */
    public function getUserId(): ?string;

    /**
     * 成员名称，代开发自建应用需要管理员授权才返回
     * 此字段从2019年12月30日起，对新创建第三方应用不再返回真实name，使用userid代替name
     * 2020年6月30日起，对所有历史第三方应用不再返回真实name，使用userid代替name，后续第三方仅通讯录应用可获取，未返回名称的情况需要通过通讯录展示组件来展示名字
     *
     * @return string|null
     */
    public function getName(): ?string;
}
