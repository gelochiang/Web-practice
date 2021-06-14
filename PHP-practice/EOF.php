<?php
echo <<<EOF
        <b style="font-size:30px;">My name is Gelo</b>
        <div style="font-size:20px;">Hello</div>
EOF;
// EOF 結束需要獨自一行且後面要加;
?>

<?php
$name="GeloChiang";
$x=<<<EOF
    Hello my name is $name
    Good morning
EOF;
echo $x;
?>