<?php
class site{
    // 成員變數
    var $url;
    var $title;
    // 成員函數
    function seturl($a){
        $this->url=$a;
    }
    function geturl(){
        echo $this->url.PHP_EOL;
    }
    function settitle($a){
        $this->title=$a;
    }
    function gettitle(){
        echo $this->title."：";
    }
}
$Google=new site;
$Youtube=new site;
$Facebook=new site;
// 調用成員函式
$Google->settitle("Google");
$Google->seturl("www.google.com");

$Youtube->settitle("Youtube");
$Youtube->seturl("www.youtube.com");

$Facebook->settitle("Facebook");
$Facebook->seturl("www.facebook.com");
// 調用成員函式，獲取 title url
$Google->gettitle("Google");
$Google->geturl("www.google.com");

$Youtube->gettitle("Youtube");
$Youtube->geturl("www.youtube.com");

$Facebook->gettitle("Facebook");
$Facebook->geturl("www.facebook.com");

// 構造函數（建造預設值）運用上方的例子
/*
function __construct($x,$y){
    $this->url=$x;
    $this->title=$y;
}
加入這段因為有預設值了，把 set 的動作放在 new 後面當作彈性函數帶進去
*/

// 析構函數，和構造函數剛好相反，在結束的時候系統會自動執行析構函數
// 語法：__destruct

// 繼承：把父類的結構和方法說出來，語法在下方
/*
class child extends parent{
    代碼部分
}
*/

// 訪問控制
/*
public（公有的）：任何地方都可以訪問的（沒特別聲明會被默認為 public）
protected（受保護的）：只能被自身或子、父類訪問
private（私人的）：只能被自己定義的訪問，在 public 裡也無法被執行
*/

// 接口
/*
interface gelo{ // 聲明一個街口
    var $a=123;
}
class start implements gelo{ // 用 implement 實現接口
    代碼輸入
}
*/

// 抽象法
// abstract calss gelo{ ... }

// 想讓一個類不再被繼承
// final function gelo(){...}

// 子類不能自動讀取父類
// 運用 parent:: __construct()，建構一個方法讓子類能讀取
?>