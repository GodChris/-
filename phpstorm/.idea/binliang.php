<meta charset="UTF-8">
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 10:54
 */
$x=5;//全局变量
$y=6;
$text="You are so handsome";
        if($x==$y){
            echo $text;
        }else{
        echo "wang kai is a stupid guy.";}
$x=5;
function myTest()
{
    $y=10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
}
myTest();
echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
?>
