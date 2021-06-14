<?php
if(23=="23"){
    echo "值相等";
}
echo PHP_EOL;
if(23==="23"){
    echo "值和型態都相等";
}else{
    echo "值相等，類型不同";
}
echo PHP_EOL;
?>

<?php
echo "0==false: ";
var_dump(0==false);
echo "0===false: ";
var_dump(0===false);
echo PHP_EOL;

echo "0==null: ";
var_dump(0==null);
echo "0===null: ";
var_dump(0===null);
echo PHP_EOL;

echo "'0'==false: ";
var_dump('0'==false);
echo "'0'===false: ";
var_dump('0'===false);
echo PHP_EOL;

echo "'0'==null: ";
var_dump('0'==null);
echo "'0'===null: ";
var_dump('0'===null);
echo PHP_EOL;

echo "''==false: ";
var_dump(''==false);
echo "''===false: ";
var_dump(''===false);
echo PHP_EOL;

echo "''==null: ";
var_dump(''==null);
echo "''===null: ";
var_dump(''===null)
?>