<meta charset="UTF-8">
<?php
/*
 * Created by PhpStorm.
 * User: God of Chris
 * Date: 2016/7/7 0007
 * Time: 16:28
 */
$x=10;
$y=6;
echo ($x + $y); // 输出16
echo "<br/>";
echo ($x - $y); // 输出4
echo "<br/>";
echo ($x * $y); // 输出60
echo "<br/>";
echo ($x / $y); // 输出1.6666666666667
echo "<br/>";
echo ($x % $y); // 输出4
echo "<br/>";
echo $x.$y;
echo "<br/>";
var_dump($x == $y); // returns true because values are equal
echo "<br>";
var_dump($x === $y); // returns false because types are not equal
echo "<br>";
var_dump($x != $y); // returns false because values are equal
echo "<br>";
var_dump($x !== $y); // returns true because types are not equal
echo "<br>";
$a=50;
$b=90;
var_dump($a > $b);
echo "<br>";
var_dump($a <  $b);
echo "<br/>";
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // union of $x and $y
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);