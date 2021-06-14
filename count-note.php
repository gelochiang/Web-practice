<?php
$a=5;
$b=2;
function p(){
    echo $a+$b; // 輸出：0
}
p();
?>

<?php
$a=5;
$b=2;
function p2(){
    global $a,$b; // 相比上方要需要 global 才能調外面的變量進來
    echo $a+$b; // 輸出：7
}
p2();
?>

<?php
$x=7;
$y=4;
function t1(){
    echo $GLOBALS["x"]=$GLOBALS["x"]+$GLOBALS["y"]; // x=11
}

echo PHP_EOL;

function t2(){
    global $x,$y;
    echo $x+$y; // 輸出：15，因為上面的 GLOBALS 強制更新了 $x
}
t1();
echo PHP_EOL;
t2();
?>