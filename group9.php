<?php

$con=mysqli_connect("localhost","root","guanmin1031","studb");
mysqli_set_charset($con,"utf8");
$sql="select * from members";
$query=mysqli_query($con,$sql);
if($query&&mysqli_fetch_assoc($query))
{while($row=mysqli_fetch_assoc($query))
{$data[]=$row;}}
else
{$data=array();}

?>
<!doctype html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>group-9</title>
    <link rel="stylesheet" href="css/more.css" />
    <meta http-equiv="refresh" content="10"/>



</head>
<body background="img/bg.jpg">
<div class="header">
    <div class="title1"><p>南昌大学物联网实验基地软件组第九组成员信息</p></div>
</div>
<hr>
<div class="container">

    <div class="row">
        <div id="enlarge_images"></div>
        <div class="col-md-3">
            <div id="demo"><img src="img/kb.jpg" alt="" /></div>
            <script type="text/javascript" src="js/g9.js"></script>
        </div>
        <div class="col-md-3 yangshi">
            <ul>
                <li>姓名：<?php echo $data[0]['name'];?></li>
                <li>性别：<?php echo $data[0]['gender'];?></li>
                <li>班级：<?php echo $data[0]['class'];?></li>
                <li>电话：<?php echo $data[0]['tel'];?></li>
            </ul>
        </div>
        <div class="col-md-3">
            <div><img src="img/rw.png" alt="" /></div>
        </div>
        <div class="col-md-3 yangshi">

            <ul>
                <li>姓名：<?php echo $data[1]['name'];?></li>
                <li>性别：<?php echo $data[1]['gender'];?></li>
                <li>班级：<?php echo $data[1]['class'];?></li>
                <li>电话：<?php echo $data[1]['tel'];?></li>
            </ul>
        </div>
    </div>
</div>
<hr />



<div class="container" >
    <div class="row">
        <div class="col-md-3">
        <div><img src="img/sc.jpeg" alt="img/.5.jpg" /></div>
        </div>
        <div class="col-md-3 yangshi">
            <ul>
                <li>姓名：<?php echo $data[2]['name'];?></li>
                <li>性别：<?php echo $data[2]['gender'];?></li>
                <li>班级：<?php echo $data[2]['class'];?></li>
                <li>电话：<?php echo $data[2]['tel'];?></li>
            </ul>
        </div>


        <div class="col-md-3">
        <div><img src="img/ki.jpg" alt="" /></div>
        </div>
        <div class="col-md-3 yangshi">
            <ul>
                <li>姓名：<?php echo $data[0]['name'];?></li>
                <li>性别：<?php echo $data[0]['gender'];?></li>
                <li>班级：<?php echo $data[0]['class'];?></li>
                <li>电话：<?php echo $data[0]['tel'];?></li>
            </ul>
        </div>
    </div>
</div>

</body>
	
