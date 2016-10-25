<?php
/*pdoÁ¬½Ó*/
$servername="localhost";
$username="username";
$password="password";
try{
    $conn=new PDO("mysql:host=$servername;dbname=mysql",$username,$password);
    echo "Á¬½Ó³É¹¦";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
////¹Ø±ÕÁ¬½Ó
$conn = null;
/*mysqliÁ¬½Ó(ÃæÏò¶ÔÏó)*/
$servername = "localhost";
$username = "username";
$password = "password";

// ´´½¨Á¬½Ó
$conn = new mysqli($servername, $username, $password);

// ¼ì²âÁ¬½Ó
if ($conn->connect_error) {
    die("Á¬½ÓÊ§°Ü: " . $conn->connect_error);
}
echo "Á¬½Ó³É¹¦";
///¹Ø±ÕÁ¬½Ó
$conn->close();
?>