<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 17:09
 */
$favcolor="red";
switch ($favcolor)
{
    case "red":
        echo "��ϲ������ɫ�Ǻ�ɫ!";
        break;
    case "blue":
        echo "��ϲ������ɫ����ɫ!";
        break;
    case "green":
        echo "��ϲ������ɫ����ɫ!";
        break;
    default:
        echo "��ϲ������ɫ���� ��, ��, ����ɫ!";
}
echo "<br/>";
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>
