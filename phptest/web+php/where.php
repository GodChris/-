<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Myguests
WHERE FirstName='John'");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'] . " " . $row['lastname'];
    echo "<br>";
}
?>