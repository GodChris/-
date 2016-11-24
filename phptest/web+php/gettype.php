<?php
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("mydbpdo",$con);
mysql_query("SET NAMES 'utf8'");
$sql="select * from model where status=1;";
$result=mysql_query($sql);