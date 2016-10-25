<html>
<head>
    <title>mail</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
/*mail(to,subject,message,headers,parameters)
首先声明变量($to, $subject, $message, $from, $headers)，
然后我们在 mail() 函数中使用这些变量来发送了一封 E-mail：
<?php
$to = "someone@example.com";         // 邮件接收者
$subject = "参数邮件";                // 邮件标题
$message = "Hello! 这是邮件的内容。";  // 邮件正文
$from = "someonelse@example.com";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>*/
function spamcheck($field)
{
    // filter_var() 过滤 e-mail
    // 使用 FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() 过滤 e-mail
    // 使用 FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if(isset($_REQUEST['email'])){// 如果接收到邮箱参数则发送邮件
// 发送邮件
    // 判断邮箱是否合法
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
        echo "非法输入";
    }
    else{
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    mail("1358643081@qq.com",$subject,$message,"From:".$email);
    echo "邮件发送成功";
}}else{// 如果没有邮箱参数则显示表单
    echo "<form method='post' action='mailform.php'>
	Email: <input name='email' type='text'><br>
	Subject: <input name='subject' type='text'><br>
	Message:<br>
	<textarea name='message' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
}
/*使用了 PHP 过滤器来对输入进行验证：
FILTER_SANITIZE_EMAIL 过滤器从字符串中删除电子邮件的非法字符
FILTER_VALIDATE_EMAIL 过滤器验证电子邮件地址的值*/
?>
</body>
</html>


