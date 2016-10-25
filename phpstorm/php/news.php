<!DOCTYPE HTML>
<html lang="zh">
<meta charset="UTF-8">
<head>

	<link rel="stylesheet" href="css/style1.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<title>通知公告</title>
</head>
<body>
	<div class="header">
	<div class="img-name"><div class="img"><a href=""><img src="imagine/ncu.png" alt="" /></a></div>
	<div class="name">IOT互联网与软件研究组</div></div>
	    <div class="iconbar">
      <div class="mail">
          <ul>
          <li><a href=""><i class="fa fa-envelope-o"></i>邮箱</a>
          <li><a href=""><i class="fa fa-file-o"></i>OA系统</a>
          <li><a href="">language</a>
		  </ul></div>
  <div class="entrance">
  <ul>
          <li><a href="">考生<i class="fa fa-user"></i></a>
          <li><a href="">在校生<i class="fa fa-user"></i></a>
          <li><a href="">教职工<i class="fa fa-user"></i></a>
		  <li><a href="">校友<i class="fa fa-user"></i></a>
		  <li><a href="">访客<i class="fa fa-user"></i></a>
  </ul></div>
  </div><div class="clear"></div> </div>
	</div>
	<div class="naver">
	<ul class="nav">
		<li><a href="">首页</a></li>
		<li><a href="">成员简介</a></li>
		<li><a href="">通知公告</a></li>
		<li><a href="">培训计划</a></li>
		<li><a href="">关于我们</a></li>
	</ul>
	<div class="search">
	<input type="" class="searchInput" placeholder="搜索..." />
	<button type="submit" class="searchBtn">搜索</button>
	</div>
	<div class="clear"></div> 
	</div>
	<div class="wrap-all">
	<div class="wrap-middle">
	<div class="wrap-announce">
	<div class="topic"><i class="fa fa-book"></i>基地公告</div>
	<div class="notice">
	<ul>
		<li><span>[10-25]</span><a href="">关于本研究组以后培训的几点...</a></li>
		<li><span>[10-20]</span><a href="">下周每组需要完成的任务...</a></li>
		<li><span>[10-16]</span><a href="">针对上次完成的任务...</a></li>
		<li><span>[10-10]</span><a href="">研究组将于本周日召开第一次...</a></li>
		<li><span>[10-08]</span><a href="">研究组对于成员的近期培训...</a></li>
		<li><span>[10-08]</span><a href="">研究组对于成员的近期培训...</a></li>
		<li><span>[10-08]</span><a href="">研究组对于成员的近期培训...</a></li>
	</ul><div class="more"><a href="">更多></a></div></div></div>
	<div class="other">
	<div class="topic"><i class="fa fa-book"></i>培训内容</div>
	<div class="notice">
	<ul>
		<li><span>1.</span><a href="">WEB前端</a></li>
		<li><span>2.</span><a href="">WEB后端</a></li>
		<li><span>3.</span><a href="">数据库</a></li>
		<li><span>4.</span><a href="">WEB服务器</a></li>
		<li><span>5.</span><a href="">工具</a></li>
		<li><span>6.</span><a href="">软件工程</a></li>
	</ul><div class="more"><a href="">更多></a></div></div></div></div>
	<div class="announce">
	<div class="all">
	<div class="ann-topic">
	<a href="">首页</a>》<a href="">基地公告</a>》</div>
	<div class="ann-line"></div>
	
<?php	

$con=mysql_connect("127.0.0.1","root","");       
	mysql_select_db("myp",$con);                    
	mysql_query("SET NAMES 'utf8'");	           
	$sql = "select * from nes where id={$_GET["id"]};";                
	$result = mysql_query($sql);				 
	if($_row = mysql_fetch_array($result)) {     
	 

	echo '
		<div class="ann-name">'.$_row["title"].'</div>
		<div class="ann-line"></div>
		<div class="time">发布日期：'.$_row["time"].'   阅读次数：'.$_row["num"].'</div>
		<div class="ann-line"></div></div>
		<div class="artice">
			'.$_row["content"].'
		 </div>
		 ';




  }
  
  mysql_query("update news set num=num+1 where id='{$_GET["id"]}'");
  
	 mysql_close($con);     


?>
	 </div><div class="clear"></div></div>
<div class="footer">
<div class="wrap-center">
<div class="wrap-link">
<ul>
	<li><a href="">地理位置</a></li>
	<li><a href="">网站地图</a></li>
	<li><a href="">创作团队</a></li>
	<li><a href="">意见反馈</a></li>   

</ul></div>
<div class="wrap-a">Copyright (c) 2014 Nanchang University. All Rights Reserved. 赣B2-20050168号/网备<a href="">1234567890</a>号</div></div></div>
	
</body>
</html>