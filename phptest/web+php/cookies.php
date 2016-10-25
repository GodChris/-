
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/11 0011
 * Time: 8:15
 */
/*创建cookies setcookie()函数设置cookie【这个函数必须处于html之前】
  setcookie(name,value,expire,path,domain)*/
setcookie("user","study",time()+3600);/*建名为 "user" 的 cookie,此 cookie 在一小时后过期*、
/*PHP 的 $_COOKIE 变量用于取回 cookie 的值。
在下面的实例中，我们取回了名为 "user" 的 cookie 的值，并把它显示在了页面上*/
echo $_COOKIE["user"];
echo "<br>";
//查看所有cookie
print_r($_COOKIE);
echo "<br>";
?>
<html>
<head>
    <title>cookies</title>
</head>
<body>
<?php
/*我们使用 isset() 函数来确认是否已设置了 cookie*/
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
//删除cookie； 设置 cookie 过期时间为过去 1 小时
setcookie("user", "", time()-3600);
?>
</body>
</html>
