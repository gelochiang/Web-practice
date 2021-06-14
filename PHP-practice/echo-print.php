<?php
/* echo print 的區別：
echo:可以輸出一個或多個字符串，沒有返回值
print:只能輸出一個字符串，返回值總爲1
秘密：echo 輸出速度比 print 快
*/
echo "<h1>哈囉</h1>"; // 字串裡能加入 html
echo "Hello<br>";
echo "加","入","多","個","字","串<br>";
echo("加入括號也是一樣的效果");
?>

<?php
$txt1="Hi!";
$txt2="Gelo";
$interest=array("play Rubick's cube","write program"); // array("_") 陣列函數
echo $txt1;
echo PHP_EOL;
echo "My name is $txt2.";
echo PHP_EOL;
echo "I like to {$interest[1]}"; // 位置是從 0 計算，陣列找法就很像 python
?>

<?php
//print "Hi","你好"; 這裡會出現錯誤，因為最多只能一個字串符
?>