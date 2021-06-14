<?php
// 對想特定的一個值使其運行相對應的程式可用 switch
$name="Peter";
switch($name){
    // case 能看成是 if
    case "Gelo":
        echo "Hi! Gelo";
        break; // 阻止代碼跳到下一個 case 運行
    case "Facker":
        echo "Hi! Facker";
        break;
    // default 能看成是 else
    default:
        echo "雖然 $name 你不是 vip ，但還是跟你打聲招呼 Hi~";
}
?>