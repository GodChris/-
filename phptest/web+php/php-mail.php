<html>
<head>
    <title>mail</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
/*mail(to,subject,message,headers,parameters)
������������($to, $subject, $message, $from, $headers)��
Ȼ�������� mail() ������ʹ����Щ������������һ�� E-mail��
<?php
$to = "someone@example.com";         // �ʼ�������
$subject = "�����ʼ�";                // �ʼ�����
$message = "Hello! �����ʼ������ݡ�";  // �ʼ�����
$from = "someonelse@example.com";   // �ʼ�������
$headers = "From:" . $from;         // ͷ����Ϣ����
mail($to,$subject,$message,$headers);
echo "�ʼ��ѷ���";
?>*/
function spamcheck($field)
{
    // filter_var() ���� e-mail
    // ʹ�� FILTER_SANITIZE_EMAIL
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() ���� e-mail
    // ʹ�� FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

if(isset($_REQUEST['email'])){// ������յ�������������ʼ�
// �����ʼ�
    // �ж������Ƿ�Ϸ�
    $mailcheck = spamcheck($_REQUEST['email']);
    if ($mailcheck==FALSE)
    {
        echo "�Ƿ�����";
    }
    else{
    $email=$_REQUEST['email'];
    $subject=$_REQUEST['subject'];
    $message=$_REQUEST['message'];
    mail("1358643081@qq.com",$subject,$message,"From:".$email);
    echo "�ʼ����ͳɹ�";
}}else{// ���û�������������ʾ��
    echo "<form method='post' action='mailform.php'>
	Email: <input name='email' type='text'><br>
	Subject: <input name='subject' type='text'><br>
	Message:<br>
	<textarea name='message' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
}
/*ʹ���� PHP �������������������֤��
FILTER_SANITIZE_EMAIL ���������ַ�����ɾ�������ʼ��ķǷ��ַ�
FILTER_VALIDATE_EMAIL ��������֤�����ʼ���ַ��ֵ*/
?>
</body>
</html>


