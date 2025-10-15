<?php
// $Id: english.php 3580 2009-09-05 23:38:38Z trabis $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define( "LEGEND_XOOPS_PATHS", "XOOPS 實體路徑" );
define( "LEGEND_DATABASE", "資料庫的編碼設定" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS 函式庫目錄" );
define( "XOOPS_LIB_PATH_HELP", "為了提昇相容性，「XOOPS 函式庫目錄」的實體位置不需要加上反斜線，建議您將此目錄放到 " . XOOPS_ROOT_PATH . " 之外，以確保其安全性。" );
define( "XOOPS_DATA_PATH_LABEL", "XOOPS 資料檔案目錄" );
define( "XOOPS_DATA_PATH_HELP", "為了提昇相容性，「XOOPS 資料檔案目錄」（必須是可寫入的）的實體位置不需要加上反斜線，建議您將此目錄放到 " . XOOPS_ROOT_PATH . " 之外，以確保其安全性。" );

define( "DB_COLLATION_LABEL", "資料庫編碼設定與校對" );
define( "DB_COLLATION_HELP",  "MySQL 4.12 支援自訂編碼設定以及校對。然而，這比預期的還要複雜，所以，若是您對這個設定並不熟，那麼建議您選擇「維持原設定，不做變動」。");
define( "DB_COLLATION_NOCHANGE",  "維持原設定，不做變動");

define( "XOOPS_PATH_FOUND", "已找到路徑。" );
define( "ERR_COULD_NOT_ACCESS", "無法存取指定的資料夾。請確定該資料存在而且是可讀取的。" );
define( "CHECKING_PERMISSIONS", "檢查檔案以及資料的權限中..." );
define( "ERR_NEED_WRITE_ACCESS", "必須賦予伺服器有對以下檔案貨資料夾寫入的權限<br />（例如：在 UNIX/LINUX 主機上可執行 <em>chmod 777 資料夾名稱</em>）" );
define( "IS_NOT_WRITABLE", "%s 無法寫入。" );
define( "IS_WRITABLE", "%s is 可寫入。" );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "寫入資料到 mainfile.php 失敗！請手動將資料寫入到 mainfile.php 中。" );

?>
