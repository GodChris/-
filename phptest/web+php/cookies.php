
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/11 0011
 * Time: 8:15
 */
/*����cookies setcookie()��������cookie������������봦��html֮ǰ��
  setcookie(name,value,expire,path,domain)*/
setcookie("user","study",time()+3600);/*����Ϊ "user" �� cookie,�� cookie ��һСʱ�����*��
/*PHP �� $_COOKIE ��������ȡ�� cookie ��ֵ��
�������ʵ���У�����ȡ������Ϊ "user" �� cookie ��ֵ����������ʾ����ҳ����*/
echo $_COOKIE["user"];
echo "<br>";
//�鿴����cookie
print_r($_COOKIE);
echo "<br>";
?>
<html>
<head>
    <title>cookies</title>
</head>
<body>
<?php
/*����ʹ�� isset() ������ȷ���Ƿ��������� cookie*/
if (isset($_COOKIE["user"]))
    echo "��ӭ " . $_COOKIE["user"] . "!<br>";
else
    echo "��ͨ�ÿ�!<br>";
//ɾ��cookie�� ���� cookie ����ʱ��Ϊ��ȥ 1 Сʱ
setcookie("user", "", time()-3600);
?>
</body>
</html>
