<?php
$t="Hello World.";
echo $t;
?>

<?php
$h="Good morning~";
$b="everybody ## ";
echo $h," ",$b; // 用 , 或 . 可以連接字符串
?>

<?php
echo strlen("Hi my name is GeloChiang"); // strlen 字串長，空格也算
?>

<?php
// strpos 找尋字串
echo strpos("I'm 18 years old","old");
echo strpos("嗨嗨你好啊！","Hi"); // 未找到
?>