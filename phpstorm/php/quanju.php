<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 15:38
 */
define("aaa","傻逼",true);
echo aaa;
echo '<br>';
echo AAA;
echo '<br>';
$txt1="Hello world!";
$txt2="What a nice day!";
$z=strlen($txt1." ".$txt2);
echo $txt1." ".$txt2;
echo '<br>';
echo "字符串的长度是:$z";
echo '<br>';
$m=strlen("$txt1");
echo "text1的长度是：$m";
echo '<br>';
echo strpos($txt1." ".$txt2,"nice");

