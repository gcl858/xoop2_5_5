<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    // 要升級的目錄
    $rectorConfig->paths([
        __DIR__ . '/extras',
        __DIR__ . '/htdocs',
    ]);

    // 跳過不必要的資料夾
    $rectorConfig->skip([
        __DIR__ . '/vendor/*',
        __DIR__ . '/storage/*',
        __DIR__ . '/docs/*',
    ]);

    // 目標 PHP 版本（8.0）
    $rectorConfig->phpVersion(80000);

    // 🚀 官方升級與最佳化集合
    $rectorConfig->sets([
        // ✅ 從 PHP 5.5 → 8.0 所有升級步驟
        LevelSetList::UP_TO_PHP_80,

        // 🔧 改善程式品質
        SetList::CODE_QUALITY,

        // 🧹 移除死碼、無用變數或 import
        SetList::DEAD_CODE,

        // ✏️ 改善命名與型別推論
        SetList::NAMING,
        SetList::TYPE_DECLARATION,

    ]);

    // 自動匯入類別與函式命名空間
    $rectorConfig->importNames();

    // 開啟平行處理以加速分析
    $rectorConfig->parallel(3600);

    // 顯示進度與詳細輸出
    $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon');
};

