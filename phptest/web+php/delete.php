<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// �������
if (mysqli_connect_errno())
{
    echo "����ʧ��: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM Myguests WHERE id='3'");

mysqli_close($con);
?>