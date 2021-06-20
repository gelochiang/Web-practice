<?php
// 在 namepace 之前都不行有東西出現，空白鍵也不行
declare(encoding="utf-8"); // 在 namepace 之前都不行有東西出現，空白鍵也不行
// 建議用 {} 來定義多個 namespace，下方運用上面的範例;當包住全局代碼也是一樣的做法
namespace sayHi{
    echo "Hi",PHP_EOL;
}
namespace sayHello{
    const hello="Hello"; // const 類常量，可以把類中值變成一個常量，能直接使用
    echo hello,PHP_EOL;
}
namespace sayABC\letter{ // 聲明層次 
    echo "ABC",PHP_EOL;
}
// 常量 __NAMESPACE__ 會顯示出包含當前命名空間的字符串
namespace artical{
    echo "Hi HI my namespace is: ",__NAMESPACE__;
}
// 想創一個全局代碼：
namespace { // 用一個沒命名的 namespace，中間一定要有空格
    $abc="abc";
    echo $abc;
}
?>