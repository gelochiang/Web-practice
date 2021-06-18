<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Submit input txt</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form> // PHP form 讀取表單傳遞資料
<?php
$name = htmlspecialchars($_REQUEST["fname"]);
echo $name;
?>
</form>
</body>
</html>