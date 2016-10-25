<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 使用 sql 创建数据表
    $sql = "CREATE TABLE brand (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    img VARCHAR(50) NOT NULL,
    order VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
    )";

    // 使用 exec() ，没有结果返回
    $conn->exec($sql);
    echo "数据表 MyTABLE 创建成功";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

