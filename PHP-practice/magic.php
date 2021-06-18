<?php
// 本來是最後的介紹，但要檔案剛開始就宣告才行
namespace MyProject;
echo "命名空間為：" . __NAMESPACE__ . ' " ' ; // 輸出為："MyProject" 
?>

<?php
// 魔術常量：
// __LINE__ 顯示目前的行數
echo "這是第：",__LINE__,"行";
?>

<?php
// __FILE__ 目前檔案的路徑和檔名
echo "該文件位於：",__FILE__;
?>

<?php
// __DIR__ 目前文件所在的目錄
echo "該文件位於：",__DIR__;
?>

<?php
// __FUNCTION__ 目前所在的函式名稱
function gelo(){
    echo "My Name is Gelo.",PHP_EOL,"function name: ",__FUNCTION__;
}
gelo();
?>

<?php
// __CLASS__ 目前所在的類別名稱 // class 後是加 {}
class hihi{
    function say(){
        echo "class name: ",__CLASS__,PHP_EOL,
        "function name: ",__FUNCTION__;
    }
}
$printClass=new hihi(); // 呼叫類別 class 要先讓它成為一個物件
$printClass -> say(); // -> 內層呼叫 say()
?>

<?php
// __TRAIT__ 用法
class Base{
    public function sayHello(){
        echo "Hello ";
    }
}
trait SayWorld{
    public function sayHello(){
        parent:: sayHello();
        echo "World !"; 
    }
}
class MyHelloWorld extends Base{ // extends 延伸
    use Sayworld;
}
$new=new MyHelloWorld();
$new ->sayHello();
?>

<?php
// __METHOD__ 和 __function__ 一樣
function sayHello(){
    echo "function name: ",__METHOD__;
}
sayHello();
?>

<?php
echo "hello"
?>
