<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM Myguests WHERE id='3'");

mysqli_close($con);
?>