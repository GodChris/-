<?php
$servername = "localhost";
$username = "username";
$password = "password";
mysql_query("SET NAMES 'utf8'");
try {
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);

    // ���� PDO ����ģʽΪ�쳣
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";

    // ʹ�� exec() ����Ϊû�н������
    $conn->exec($sql);

    echo "���ݿⴴ���ɹ�<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<?php
/*!*mysqli-������󴴽����ݿ�*!*/
$servername = "localhost";
$username = "username";
$password = "password";
/*
 * �������ݿ���������룺
 * $conn =mysqli_connect("127.0.0.1","root","951031");
 * $sql='CREATE DATABASE ���ݿ���';
 * $sql = 'DROP DATABASE ���ݿ���';ɾ�����ݿ�
 * $retval = mysqli_query( $conn, $q);
 * */
// ��������
$conn = new mysqli($servername, $username, $password);
// �������
if ($conn->connect_error) {
die("����ʧ��: " . $conn->connect_error);
}

// �������ݿ�
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
echo "���ݿⴴ���ɹ�";
} else {
echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
