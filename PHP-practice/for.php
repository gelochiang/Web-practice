<?php
// 語法：for(初始值;條件;增量){}
// 下方範例：輸出 1~5
for($x=1;$x<=5;$x++){
    echo $x,PHP_EOL;
}
?>

<?php
// 語法：foreach($array as $key =>$value){} 每一個值都會跑到 $value 那邊，再到 $key
$y=array("我是1","我是2","我是3");
foreach($y as $value){
    echo $value,PHP_EOL;
}
?>

<?php
// 運用 $key & $value
$z=array("First"=>1,"Second"=>2);
foreach($z as $key=>$value){
    echo "$key => ","$value",PHP_EOL;
}
?>