
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/8 0008
 * Time: 9:20
// ��ʹ�� class �ؼ��ֺ�����������塣
�������һ�Դ�����({})�ڿ��Զ�������ͷ�����
��ı���ʹ�� var ������, ����Ҳ���Գ�ʼ��ֵ��
������������ PHP �����Ķ��壬������ֻ��ͨ�����༰��ʵ�����Ķ�����ʡ�*/
class Site {
    /* ��Ա���� */
    var $url;
    var $title;

    /* ��Ա���� */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}
$runoob = new Site;
$taobao = new Site;
$google = new Site;///ʹ��newʵ��������

// ���ó�Ա���������ñ����URL
$runoob->setTitle( "����̳�" );
$taobao->setTitle( "�Ա�" );
$google->setTitle( "Google ����" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// ���ó�Ա��������ȡ�����URL
$runoob->getTitle();
echo "<br>";
$taobao->getTitle();
echo "<br>";
$google->getTitle();
echo "<br>";
$runoob->getUrl();
echo "<br>";
$taobao->getUrl();
echo "<br>";
$google->getUrl();