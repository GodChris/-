<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// �������
if (mysqli_connect_errno())
{
    echo "����ʧ��: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Myguests
WHERE FirstName='John'");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname'];
    echo "<br>";
}
?>