<?php
/*Try - ʹ���쳣�ĺ���Ӧ��λ�� "try" ������ڡ����û�д����쳣������뽫�ճ�����ִ�С���������쳣�����������׳�һ���쳣��
Throw - ��涨��δ����쳣��ÿһ�� "throw" �����Ӧ����һ�� "catch"��
Catch - "catch" �����Ჶ���쳣��������һ�������쳣��Ϣ�Ķ���*/
// ����һ�����쳣����ĺ���
function checkNum($number)
{
    if($number>1)
    {
        throw new Exception("����ֵ����С�ڵ��� 1");
    }
    return true;
}

// �� try �� �����쳣
try
{
    checkNum(2);
    // ����׳��쳣�������ı��������
    echo '�����������ݣ�˵�� $number ����';
}
// �����쳣
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}
?>