
<?php session_start();
/*
������һ���򵥵� page-view ��������isset() ��������Ƿ������� "views" ������
��������� "views" �����������ۼӼ�������
��� "views" �����ڣ��򴴽� "views" ����������������Ϊ 1��
 */
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}else
{
    $_SESSION['views']=1;
}
echo "�������".$_SESSION['views'];?>
<?php
/*����session��ʹ��unset����������session_destroy()����*/
session_start();
if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}
session_destroy();//ession_destroy() ������ session������ʧȥ�����Ѵ洢�� session ���ݡ�
?>