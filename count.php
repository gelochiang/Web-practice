<?php
$x=10;
$y=20;
$z=$x+$y;// $：表示變量，後面代表變量名稱
echo $z;
?>

<?php
$text="Hello World";// 字串型一定要加“”
$x=2;
$y=3;
echo $text;
?>

<?php
// 局部和局部作用域
$x=3;// 全局變量

function test(){
    $y=4;// 局部變量
    echo "<p>測試函數內變量:<p>";
    echo "變量 x 爲:$x";
    echo "<br>";
    echo "變量 y 爲:$y";
}

test();// function 建立的函式也要進行呼叫

echo "<p>測試函數外變量:<p>";
echo "變量 x 爲:$x";
echo "<br>";
echo "變量 y 爲:$y";
?>

<?php
// global 作用域
$x=10;
$y=20;
function change(){
    global $x,$y;
    $y=$x+$y;
}
echo $y;
echo "<hr>";
change();// 要呼叫以後才會執行 global 的效果
echo $y;
echo $z;
?>

<?php
/*
PHP 會把全局變量存在 $GLOBAL[index] 裡頭，
這組函數可以在內部訪問，也可以直接更新全局變量
*/
// 以上方的例子為例：
$x=10;
$y=20;
function ex(){
    $GLOBALS["y"]=$GLOBALS["x"]+$GLOBALS["y"];
    $GLOBALS["z"]=1;
}
ex();
echo $y;
echo $z;
?>

<?php
// static 作用域：可以讓變量不要被刪除
function plus(){
    static $x=1; 
    echo $x;
    $x+=2;
    echo PHP_EOL; // 換行符
}
plus();
plus();
plus();
?>

