<?php

namespace Tourze\WechatWorkStaffModel;

/**
 * @see https://developer.work.weixin.qq.com/document/path/90208
 */
interface DepartmentInterface
{
    /**
     * 如果这个部门已经在远程，那么就应该有一个ID
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * 部门名称，代开发自建应用需要管理员授权才返回
     *
     * 此字段从2019年12月30日起，对新创建第三方应用不再返回，2020年6月30日起，对所有历史第三方应用不再返回name，返回的name字段使用id代替
     * 后续第三方仅通讯录应用可获取，未返回名称的情况需要通过通讯录展示组件来展示部门名称
     *
     * @return string
     */
    public function getName(): string;
}
