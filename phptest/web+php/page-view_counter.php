
<?php session_start();
/*
创建了一个简单的 page-view 计数器。isset() 函数检测是否已设置 "views" 变量。
如果已设置 "views" 变量，我们累加计数器。
如果 "views" 不存在，则创建 "views" 变量，并把它设置为 1：
 */
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}else
{
    $_SESSION['views']=1;
}
echo "浏览量：".$_SESSION['views'];?>
<?php
/*销毁session；使用unset（）函数或session_destroy()函数*/
session_start();
if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}
session_destroy();//ession_destroy() 将重置 session，您将失去所有已存储的 session 数据。
?>