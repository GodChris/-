<?php

	$con=mysql_connect('localhost','root','');
	mysql_select_db('test');
	mysql_query("set names 'utf8'");
	$sql="select * from iot1";
	$query=mysql_query($sql);
	if($query&&mysql_fetch_assoc($query))
	{while($row=mysql_fetch_assoc($query))
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
	<body>
	<div class="header">
	<h1>南昌大学物联网实验基地软件组第九组成员信息</h1>
	</div>
	<hr />
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<img src="img/.6.jpg" alt="" />
			</div>
			<div class="col-md-3 yangshi">
				<ul>
					<li><?php echo $data[0]['name'];?></li>
					<li><?php echo $data[0]['gender'];?></li>
					<li><?php echo $data[0]['class'];?></li>
					<li><?php echo $data[0]['tel'];?></li>
				</ul>
			</div>
			<div class="col-md-3">
			<img src="img/.11.jpg" alt="" />
			</div>
			<div class="col-md-3 yangshi">
  
			<ul>
					<li><?php echo $data[1]['name'];?></li>
					<li><?php echo $data[1]['gender'];?></li>
					<li><?php echo $data[1]['class'];?></li>
					<li><?php echo $data[1]['tel'];?></li>
				</ul>
			</div>
		</div>
	</div>
	<hr />
	
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<img src="img/.5.jpg" alt="img/.5.jpg" />
			</div>
			<div class="col-md-3 yangshi">
				<ul>
					<li><?php echo $data[2]['name'];?></li>
					<li><?php echo $data[2]['gender'];?></li>
					<li><?php echo $data[2]['class'];?></li>
					<li><?php echo $data[2]['tel'];?></li>
				</ul>
			</div>
			<div class="col-md-3">
			<img src="img/.14.jpg" alt="" />
			</div>
			<div class="col-md-3 yangshi">
  
			<ul>
					<li><?php echo $data[3]['name'];?></li>
					<li><?php echo $data[3]['gender'];?></li>
					<li><?php echo $data[3]['class'];?></li>
					<li><?php echo $data[3]['tel'];?></li>
				</ul>
			</div>
		</div>
	</div>
	
	
	</body>
	
