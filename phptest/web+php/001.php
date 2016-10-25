<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表格</title>

</head>
<body>
<table border="1">
    <tr>
        <th>姓名</th>
        <th>性别</th>
        <th>学号</th>
        <th>班级</th>
        <th>电话</th>
    </tr>
    <?php
    $link=mysqli_connect("127.0.0.1","root","951031","mydbpdo")or die("数据库连接失败");
    mysqli_query($link,"set names utf8");//////连接数据库
    $q="select * from info";/////查询表info
    $result=mysqli_query($link,$q);////执行查询
    while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["name"]."</td><td>".$row["sex"]."</td><td>".$row["number"]."</td><td>".$row["class"]."</td><td>".$row["tel"]."</td></tr>";}
    ?>
</table>
</body>
</html>