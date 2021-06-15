<?php
/*
php superglobals：
$ GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
?>

<?php
// $GLOBALS 在全部的作用域都能都能訪問
$x=20;
$y=78;
function addition(){
    $GLOBALS["z"]=$GLOBALS["x"]+$GLOBALS["y"];
}
addition();
echo $z;
?>

<?php
// 需要和伺服器才會顯示更詳細內容
echo $_SERVER["PHP_SELF"],PHP_EOL;
echo $_SERVER["SERVER_NAME"],PHP_EOL;
echo $_SERVER["HTTP_HOST"],PHP_EOL;
echo $_SERVER["HTTP_REFERER"],PHP_EOL;
echo $_SERVER["HTTP_USER_AGENT"],PHP_EOL;
echo $_SERVER["SCRIPT_NAME"],PHP_EOL;
/*
$_SERVER["PHP_SELF"]：當前執行的文件名
$_SERVER["GATEWAY_INTERFACE"]：服務器使用的 CGI 規範的版本
$_SERVER["SERVER_ADDR"]：服務器的 IP 地址
$_SERVER["SERVER_NAME"]：伺服器名稱
$_SERVER["SERVER_SOFTWARE"]：服務器標識字符串，在響應請求的時候給出
$_SERVER["SERVER_PROTOCOL"]：請求頁面時通信協議的名稱和版本
$_SERVER["REQUEST_METHOD"]：頁面使用的請求方法
$_SERVER["REQREST_TIME"]：請求開始時的時間
$_SERVER["QUERY_STRING"]：查詢字符串，如果有的話，通過它進行頁面訪問
$_SERVER["HTTP_ACCEPT"]：請求頭中 Accept: 項的內容
$_SERVER["HTTP_ACCEPT_CHARSET"]：請求頭中 Accept-Charset: 項的內容
$_SERVER["HTTP_HOST"]：請求頭中 Host: 項的內容
$_SERVER["HTTP_REFERER"]：引導用戶代理到前一頁
$_SERVER["HTTPS"]：如果腳本是通過 HTTPS 協議被訪問，則被設為一個非空值
$_SERVER["REMOTE_ADDR"]：瀏覽當前用戶的 IP 地址
$_SERVER["REMOTE_HOST"]：瀏覽當前用戶的主機名
$_SERVER["REMOTE_PORT"]：用戶機器連接到 Web 服務器所使用的端口號
$_SERVER["SCRIPT_FILENAME"]：當前執行版本的絕對路徑
$_SERVER["SERVER_ADMIN"]：該值指明了 Apache 服務器配置文件中的 SERVER_ADMIN 參數
$_SERVER["SERVER_PORT"]：Web 服務器使用的端口
$_SERVER["SERVER_SIGNATURE"]：包含了伺服器版本和虛擬主機名的字符串
$_SERVER["PAHT_TRANSLATED"]：當前腳本所在的文件系統（非文檔根目錄）的基本路徑
$_SERVER["SCRIPT_NAME"]：包含當前的腳路徑
$_SERVER["SCRIPT_URI"]：URI 用來指定要來訪問的頁面
*/
?>

<?php
// $_REQUEST 用於收集 HTML 表單繳交的數據，在 HTML form 標籤指定該屬性："method='post'"
/*
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Submit input txt</title>
</head>
<body>
<form method="post" action="<? // method="post" 是一個屬性
php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form> // PHP form 讀取表單傳遞資料
<?php
$name = htmlspecialchars($_REQUEST["fname"]);
echo $name;
?>
</form>
</body>
</html>
*/
?>

<?php
// $_POST 被廣泛應用於收集表單數據，和上個 $_REQUEST 相似
// 只是上方的範例 改成 $_POST["fname"]
?>

<?php
// $_GET 跟 $_post 相似，也可以收集 URL 中送的數據
/*
<!DOCTYPE html>
<html>
<body>
<a href="test_get.php?subject=PHP&web=runoob.com">測試 $_GET</a> 
// <a> 建立通往其他介面的 URL
// 參數 subject 和 web 將發送至 test_get.php，用 $_GET 獲取數據
</body>
</html>
*/ 
?>