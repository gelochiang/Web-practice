<?php
// 常量 用 define()，語法如下
/*
define(string $name,mixed $value);

該函數有 3 個參數：
1. name: 必選參數，常數名稱
2. value: 必選參數，常量的值
3. case_insensitive: 可選參數，如果=true，該常量大小寫不敏感;默認不敏感
*/
?>

<?php
define("HELLO","嗨嗨你好");
echo HELLO;
?>

<?php
// 常量是全局的
define("GeloOld",18);
function myOld(){
    echo GeloOld;
}
myOld();
?>