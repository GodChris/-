<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 17:20
 */
/*������ֵ����*/
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
    echo $cars[$x];
    echo "<br>";
}
/*��������*/
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
/*������������*/
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "<br/>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
/*��ά����*/
$sites = array
(
    "runoob"=>array
    (
        "����̳�",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google ����",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "�Ա�",
        "http://www.taobao.com"
    )
);
print("<pre>"); // ��ʽ���������
print_r($sites);
print("</pre>");
echo $sites['runoob'][0] . '��ַΪ��' . $sites['runoob'][1];//��ʾ�����е�ֵ
?>

