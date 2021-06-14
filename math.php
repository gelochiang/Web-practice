<?php
/*
+ : 加
- : 減
* : 乘
/ : 除
% : 除過後的餘數
-x : 取反，就是負數
a.b : 並置，和連接字符串一樣
*/
?>

<?php
// indiv() 除式中的整數
var_dump(intdiv(13,3));
?>

<?php
// 就和 x+=1 == x+1 一樣
$a="Hello ";
$b="World!";
echo $a.=$b.PHP_EOL;
?>

<?php
$x=0;
echo ++$x; // x+1
echo PHP_EOL;
echo $x++; // 跑回去，加 1 在本來的 x 裡頭，本為何不會增加
echo PHP_EOL;
echo $x++; // 因為上一個把本來的 x ＋ 成 1 了，所以輸出 2
echo PHP_EOL;
echo "----";
echo PHP_EOL;
$y=3;
echo --$y; // y-1
echo PHP_EOL;
echo $y--;
echo PHP_EOL;
echo $y--; // 輸出：1
?>

<?php
/*
==：等於
===：絕對等於
!=：不等於
<>：不等於
!==：絕對不等於
>：大於
<：小於
>=：大於等於
<=：小於等於
*/
?>

<?php
/*
and：且
or：或
xor：反交集
&&：且(輸出：boolean)
||：或(輸出：boolean)
!：非
*/
?>
<?php
// 三元運算符
$x="Gelo";
$userName=$x?:"nobody"; // 要是 ＄userName=$x 求值 True 輸出：$x，否則輸出：nobody
echo $userName;
?>

<?php
// NULL 合併運算符 ??
$y="Lina";
$username=$y??"nobody"; // ?? 就和 ?: 效果相同（PHP7+）
echo $username,PHP_EOL;
?>

<?php
/*
組合比較符：(PHP7+)
$z=$x<=>$y;$x<=>$y;
if $x > $y，$c 值為：1
if $x = $y，$c 值為：0
if $x < $y，$c 值為：-1
*/
echo 1<=>0,PHP_EOL;
echo 1<=>1,PHP_EOL;
echo 1<=>2,PHP_EOL;
// 想法：看左邊跟右邊呈現情形，判斷是：大、相等、小
?>

<?php
$a=2;
$b=False;
$c=$a or $b;
var_dump($c);
$d=$a && $b;
var_dump($d); // 會出現 False 是因為 $b 的 False 不可能和 $a 成交集
?>

<?php
$a=12;
$b=2;
$c=8;
echo $a*$b+$c,PHP_EOL;
echo $a*($b+$c);
?>