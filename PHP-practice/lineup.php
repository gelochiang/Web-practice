<?php
/*
sort()：對數組進行升冪排列
rsort()：對數組進行降冪排列
asort()：根據 value，對數組進行升冪排列
ksort()：根據 key，對數組進行升冪排列
arsort()：根據 value，對數組進行降冪排列
krsort()：根據 key，對數組進行降冪排列
*/
?>

<?php
// 升冪排列
$number=array(23,97,82); // 數字的型態
sort($number);
print_r($number); // print_r() 輸出陣列
echo PHP_EOL;
$name=array("Pig","Gelo","Chiang"); // 字母型態
sort($name);
print_r($name); // 以開頭字母順序排列
?>

<?php
// 降冪排列（運用上個例子）都反過來那樣
$number=array(23,97,82);
rsort($number);
print_r($number);
echo PHP_EOL;
$name=array("Pig","Gelo","Chiang");
rsort($name);
print_r($name);
?>

<?php
// 根據 value 做升冪排列
$age=array("Gelo"=>18,"Ann"=>7,"Lina"=>14);
asort($age);
print_r($age);
echo PHP_EOL;
// 根據 value 做降冪排列
arsort($age);
print_r($age);
?>

<?php
// 根據 key 做升冪排列
$age=array("Gelo"=>8,"Ann"=>7,"Lina"=>14);
ksort($age);
print_r($age);
echo PHP_EOL;
// 根據 key 做降冪排列
krsort($age);
print_r($age);
?>

