
<?php session_start();
/*
�������û���Ϣ�洢�� PHP session ��֮ǰ�����ȱ��������Ự��
session_start() ��������λ�� <html> ��ǩ֮ǰ��
����Ĵ�����������ע���û��ĻỰ���Ա������Կ�ʼ�����û���Ϣ��
ͬʱ��Ϊ�û��Ự����һ�� UID
 */
/*�洢��ȡ��session������ʹ�� $_SESSION ����*/
$_SESSION['views']=2;
?>
<html>
<head>
    <title>session����</title>
</head>
<body>
<?php
// ���� session ����
echo "�������". $_SESSION['views']."<br>";
?>
</body>
</html>
