
<?php session_start();
/*
在您把用户信息存储到 PHP session 中之前，首先必须启动会话。
session_start() 函数必须位于 <html> 标签之前：
上面的代码会向服务器注册用户的会话，以便您可以开始保存用户信息，
同时会为用户会话分配一个 UID
 */
/*存储和取回session变量；使用 $_SESSION 变量*/
$_SESSION['views']=2;
?>
<html>
<head>
    <title>session变量</title>
</head>
<body>
<?php
// 检索 session 数据
echo "浏览量：". $_SESSION['views']."<br>";
?>
</body>
</html>
