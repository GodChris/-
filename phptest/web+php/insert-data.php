<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";
/* ��������� AUTO_INCREMENT (�� "id" ��) �� TIMESTAMP (�� "reg_date" ��),
���ǾͲ���Ҫ�� SQL ��ѯ�����ָ��ֵ�� MySQL ���Զ�Ϊ�������ֵ��*/

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // ���� PDO ����ģʽ�������׳��쳣
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // ʹ�� exec() ��û�н������
    $conn->exec($sql);
    echo "�¼�¼����ɹ�";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
/*mysqli��������*/
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "�¼�¼����ɹ�";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
