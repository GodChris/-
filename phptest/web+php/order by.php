<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// ������ӣ�ORDER BY �ؼ������ڶԼ�¼���е����ݽ�������

if (mysqli_connect_errno())
{
    echo "����ʧ��: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM Myguests ORDER BY id");
while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'];
    echo " " . $row['lastname'];
    echo " " . $row['id'];
    echo "<br>";
}
mysqli_close($con);
?>
