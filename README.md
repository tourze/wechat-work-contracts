# wechat-work-contracts

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/wechat-work-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-contracts)
[![PHP Version](https://img.shields.io/packagist/php-v/tourze/wechat-work-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-contracts)
[![License](https://img.shields.io/packagist/l/tourze/wechat-work-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-contracts)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/wechat-work-contracts.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/wechat-work-contracts)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/tourze/wechat-work-contracts.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/wechat-work-contracts)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/wechat-work-contracts.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-contracts)

WeChat Work (Enterprise WeChat) contracts and interfaces definitions for PHP applications.

## Features

- 🏢 **Enterprise Management** - Standard interfaces for WeChat Work enterprise information
- 👥 **User Management** - Contracts for user/employee data handling
- 🏗️ **Department Management** - Interfaces for organizational structure
- 🤖 **Agent Management** - Application agent configuration contracts
- 🔄 **User Operations** - User loading and creation interface definitions
- 📋 **Type Safe** - Full PHP 8.1+ type hints and nullable return types
- 🎯 **Focused** - Minimal, focused contracts without implementation details

## Installation

```bash
composer require tourze/wechat-work-contracts
```

## Quick Start

```php
<?php

use Tourze\WechatWorkContracts\UserInterface;
use Tourze\WechatWorkContracts\CorpInterface;
use Tourze\WechatWorkContracts\AgentInterface;
use Tourze\WechatWorkContracts\UserLoaderInterface;

// Implement the interfaces in your application
class MyWechatUser implements UserInterface
{
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

class MyUserLoader implements UserLoaderInterface
{
    public function loadUserByUserIdAndCorp(string $userId, CorpInterface $corp): ?UserInterface
    {
        // Your implementation to load user from WeChat Work API
        return new MyWechatUser($userId);
    }

    public function createUser(CorpInterface $corp, AgentInterface $agent, string $userId, string $name): UserInterface
    {
        // Your implementation to create user
        return new MyWechatUser($userId, $name);
    }
}
```

## Overview

This package provides common contracts and interfaces for WeChat Work (Enterprise WeChat) integration. It defines standard interfaces for:

- **AgentInterface** - Application agent management
- **CorpInterface** - Enterprise/Corporation information
- **DepartmentInterface** - Department management
- **UserInterface** - User/Employee information
- **UserLoaderInterface** - User loading and creation operations

## Interfaces

### AgentInterface

Defines methods for WeChat Work application agents:

```php
interface AgentInterface
{
    public function getAgentId(): ?string;
    public function getWelcomeText(): ?string;
}
```

### CorpInterface

Defines methods for enterprise information:

```php
interface CorpInterface
{
    public function getCorpId(): ?string;
}
```

### DepartmentInterface

Defines methods for department management:

```php
interface DepartmentInterface
{
    public function getId(): ?int;
    public function getName(): string;
}
```

### UserInterface

Defines methods for user/employee information:

```php
interface UserInterface
{
    public function getUserId(): ?string;
    public function getName(): ?string;
}
```

### UserLoaderInterface

Defines methods for user loading and creation:

```php
interface UserLoaderInterface
{
    public function loadUserByUserIdAndCorp(string $userId, CorpInterface $corp): ?UserInterface;
    public function createUser(CorpInterface $corp, AgentInterface $agent, string $userId, string $name): UserInterface;
}
```

## Usage

These interfaces are meant to be implemented by concrete classes in your WeChat Work integration packages. They provide a standardized way to work with WeChat Work entities across different implementations.

## Requirements

- PHP 8.1 or higher

## License

MIT License

## Reference Documentation

- [WeChat Work API Documentation](https://developer.work.weixin.qq.com/)
- [Department Management API](https://developer.work.weixin.qq.com/document/path/90208)
- [User Management API](https://developer.work.weixin.qq.com/document/path/90200)