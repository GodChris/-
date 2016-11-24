<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydbpdo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // ���� PDO ����ģʽ�������׳��쳣
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ʹ�� sql �������ݱ�
    $sql = "CREATE TABLE brand (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(30) NOT NULL,
    img VARCHAR(50) NOT NULL,
    order VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
    )";

    // ʹ�� exec() ��û�н������
    $conn->exec($sql);
    echo "���ݱ� MyTABLE �����ɹ�";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>

