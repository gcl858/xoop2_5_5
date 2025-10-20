我建議使用 **NSSM (Non-Sucking Service Manager)** 來將 PHP-CGI 轉換為 Windows 服務,它提供了自動重啟功能。

## 方案一: 使用 NSSM (推薦)

### 1. 下載並安裝 NSSM
- 下載: https://nssm.cc/download
- 解壓到如 `C:\nssm\` 目錄

### 2. 創建服務腳本### 3. 卸載服務腳本## 方案二: PowerShell 監控腳本 + 任務排程器

如果你想要更細緻的 port 監控,可以搭配 PowerShell 腳本:## 使用步驟:

### 使用 NSSM 方案 (推薦):
1. 下載 NSSM 並放到 `C:\nssm\`
2. 建立日誌目錄: `mkdir D:\nPHP\php8\logs`
3. **以系統管理員身份**執行 `install_php_cgi_services.bat`
4. 在 `services.msc` 中可以看到四個服務
5. 每個服務的失敗恢復設定會自動重啟

### NSSM 的優點:
- ✅ 自動在系統啟動時啟動
- ✅ 程序崩潰自動重啟 (AppThrottle 防止頻繁重啟)
- ✅ 可在服務管理員中管理
- ✅ 自動記錄日誌

### 使用 PowerShell 監控方案:
1. 將 PowerShell 腳本存成 `.ps1` 檔
2. 用**任務排程器**設定開機時執行此腳本
3. 腳本會每 30 秒檢查 port 是否在監聽,若無則重啟

**建議: 直接使用 NSSM 方案最簡單可靠!** 它會處理所有的自動重啟邏輯。
