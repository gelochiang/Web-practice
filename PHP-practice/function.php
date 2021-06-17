<?php
function TypeName(){
    echo "GeloChiang";
}
echo "Hell0 my name is : ",TypeName();
?>

<?php
function ShowName($member,$name){
    echo $member,$name;
}
ShowName("Hello my dad name is : ","AceChiang");
echo PHP_EOL;
ShowName("Hello my mom name is : ","LisaChiang");
?>

<?php
function addition($n1,$n2){
    $total=$n1+$n2;
    return $total;
}
echo "32+48=",addition(32,48);
?>