
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/8 0008
 * Time: 9:20
// 类使用 class 关键字后加上类名定义。
类名后的一对大括号({})内可以定义变量和方法。
类的变量使用 var 来声明, 变量也可以初始化值。
函数定义类似 PHP 函数的定义，但函数只能通过该类及其实例化的对象访问。*/
class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
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
$google = new Site;///使用new实例化对象

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
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