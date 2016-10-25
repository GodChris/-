<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ��ʼ����
    $conn->beginTransaction();
    // SQL ���
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'john@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Mary', 'Moe', 'mary@example.com')");
    $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('Julie', 'Dooley', 'julie@example.com')");

    // �ύ����
    $conn->commit();
    echo "�¼�¼����ɹ�";
}
catch(PDOException $e)
{
    // ���ִ��ʧ�ܻع�
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
/*mysqli�����������*/
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
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "�¼�¼����ɹ�";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
