<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE Myguests SET id=1
WHERE firstname='John' AND lastname='Doe'");
mysqli_query($con,"UPDATE Myguests SET id=2
WHERE firstname='Mary' AND lastname='Moe'");
mysqli_query($con,"UPDATE Myguests SET id=3
WHERE firstname='Julie' AND lastname='Dooley'");

mysqli_close($con);
?>
