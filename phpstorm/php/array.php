<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 17:20
 */
/*遍历数值数组*/
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
    echo $cars[$x];
    echo "<br>";
}
/*关联数组*/
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
/*遍历关联数组*/
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "<br/>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
/*多维数组*/
$sites = array
(
    "runoob"=>array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");
echo $sites['runoob'][0] . '地址为：' . $sites['runoob'][1];//显示数组中的值
?>

