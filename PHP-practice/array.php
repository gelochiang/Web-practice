<?php
// 數組
$member=array("Dad","Mom","sister","brother");
echo "My family member: ",
    $member[0]," ",$member[1]," ",
    $member[2]," and ", $member[3];
?>

<?php
// 顯示出 array 裡所有值，運用 for 迴圈
$cars=array("Toyota","BMW","Honda");
$length=count($cars); // count() 計算陣列裡有多少個元素
echo $length,PHP_EOL; // 有 3 個素，輸出 3
for($x=0;$x<$length;$x++){
    echo $cars[$x];
    echo PHP_EOL;
}
?>

<?php
// 關聯數組
$age=array("Gelo"=>18,"Lina"=>14,"Andy"=>17);
echo "Gelo is ",$age["Gelo"]," years old.";
?>

<?php
// 比先前更好用的顯示出 array 裡所有的值
$money=array("Gelo"=>"1M","Lina"=>"2M","Andy"=>"No money");
foreach($money as $x=>$x_value){ // foreach 和 for 迴圈相似，在陣列上對一個 key 對上 value 會好用許多
    echo "How much money does ",$x," have ?"," $ = ",$x_value;
    echo PHP_EOL;
}
?>