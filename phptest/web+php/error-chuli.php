
<?php
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "��֪ͨ��վ����Ա";
    error_log("Error: [$errno] $errstr",1,
        "someone@example.com","From: webmaster@example.com");
}

// ���ô�������
set_error_handler("customError",E_USER_WARNING);

// ��������
$test=2;
if ($test>1)
{
    trigger_error("����ֵ����С�ڵ��� 1",E_USER_WARNING);
}
?>