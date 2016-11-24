<?php
$servername = "localhost";
$username = "username";
$password = "password";
mysql_query("SET NAMES 'utf8'");
try {
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);

    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";

    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);

    echo "数据库创建成功<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<?php
/*!*mysqli-面向对象创建数据库*!*/
$servername = "localhost";
$username = "username";
$password = "password";
/*
 * 创建数据库的其他代码：
 * $conn =mysqli_connect("127.0.0.1","root","951031");
 * $sql='CREATE DATABASE 数据库名';
 * $sql = 'DROP DATABASE 数据库名';删除数据库
 * $retval = mysqli_query( $conn, $q);
 * */
// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
die("连接失败: " . $conn->connect_error);
}

// 创建数据库
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
echo "数据库创建成功";
} else {
echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
