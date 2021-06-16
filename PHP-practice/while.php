<?php
// while 迴圈
$x=1;
while($x<=100){
    echo "這是一個 1到",$x," 的呼叫",PHP_EOL;
    $x++;
}
?>

<?php
// do 一定會先執行;能看作是下方 while 達成條件才會回去執行 do
$y=1;
do{
    echo "我叫了 ",$y," 次";
    $y++;
}
while($y<5)
?>