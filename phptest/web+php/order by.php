<?php
$con=mysqli_connect("localhost","username","password","mydbpdo");
// 检测连接，ORDER BY 关键词用于对记录集中的数据进行排序。

if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
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
