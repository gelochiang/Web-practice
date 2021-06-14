<?php
// 以下就是標準的字符串
$x="Hi 你好";
$y="我是 Gelo";
echo $x;
echo "<br>";
echo $y;
?>

<?php
$n1=2021;
var_dump($n1); // var_dump() 函數返回變量的數據類型、值
echo "<br>";
$n2=-12; // 負數
var_dump($n2);
echo "<br>";
$n3=0x8c; // 16 進位
var_dump($n3);
echo "<br>";
$n4=010; // 8 進位
var_dump($n4);
?>

<?php
// 浮點數類型
$n1=34.522;
var_dump($n1);
echo "<br>";
$n2=2.3e5; // 5 的前面也可以加 ＋ 代表 10 ** 5（科學記號）
var_dump($n2);
echo "<br>";
$x3=7E-3; // -3 代表 10 ** -3 (E、e 沒差別)
var_dump($x3); 
?>

<?php
// 數組類型
$family=array("father","mother","sister","me");
var_dump($family);
?>

<?php
// 對象類型
class cube{ // class 建立類別
    var $color;
    function __construct($color="white"){ // __construct(建構子)，宣告就會直接執行
        $this->color=$color; // -> 引用那個屬性或方法
    }
    function WhatColor(){
        return $this->$color; // return 回傳值
    }
}
function obj($object){
    foreach(get_object_vars($object)as $prop => $val){ // foreach 敘述，把 get_object_vars($object) 放入 $prop
        echo "\t$prop=$val\n"; // \t 跳至下一格（tab)，\n 回車換行
    }
}
// 實例一個對象
$rbcube=new cube("white"); // 創一個新物件
// 顯示 rbcube 屬性
echo "My cube:\n";
obj($rbcube);
?>

<?php
// NULL 值，表示變量裡面沒有值
$t="Hi Hi 你好";
$t=null;
var_dump($t);
?>