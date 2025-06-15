<?php

// 在 monorepo 环境中，使用根目录的 vendor
$rootDir = dirname(__DIR__, 3);
$autoloadFile = $rootDir . '/vendor/autoload.php';

if (!file_exists($autoloadFile)) {
    // 如果作为独立包使用，尝试本地 vendor
    $autoloadFile = dirname(__DIR__) . '/vendor/autoload.php';
}

require $autoloadFile;