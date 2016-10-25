
<?php
	$con=mysql_connect("127.0.0.1","root","951031");
	mysql_select_db("cars_doctor",$con);
	mysql_query("SET NAMES 'utf8'");
	$brand = array();
	$brand[] = "A";
	$brand[] = "C";
    $brand[] = "B";
	$brand[] = "D";
	$brand[] = "E";
	$brand[] = "F";
	$brand[] = "G";
	$brand[] = "H";
	$brand[] = "I";
	$brand[] = "J";
	$brand[] = "K";
	$brand[] = "L";
	$brand[] = "M";
	$brand[] = "N";
	$brand[] = "O";
	$brand[] = "P";
	$brand[] = "Q";
	$brand[] = "R";
	$brand[] = "S";
	$brand[] = "T";
	$brand[] = "U";
	$brand[] = "V";
	$brand[] = "W";
	$brand[] = "X";
	$brand[] = "Y";
	$brand[] = "Z";
	foreach($brand as $b){
		$url = "http://www.autohome.com.cn/grade/carhtml/{$b}.html";
		$htmls = split("</dl>",file_get_contents($url));
		foreach($htmls as $html){
			if(trim($html))getBrand($html,$b);
		}
		//exit;
	}
	function getBrand($h,$b){
		$car = split("<dd>",$h);
		getBrand_list($car[1],getBrand_img($car[0],$b));
	}
	function getBrand_img($c,$b){
		preg_match('/src="(.*)"><\/a>(.*)html">(.*)<\/a><\/div>/is',$c,$arr);
		$arr[1] = str_replace("brand/50/","brand/100/",$arr[1]);
		$pic = time().rand(0,9).rand(0,9).rand(0,9).rand(0,9).".jpg";
		file_put_contents("brand/img/{$pic}",file_get_contents($arr[1]));
		$brand_name =  iconv('GB2312', 'UTF-8', $arr[3]);
		$sql = "insert into brand (`img`,`name`,`order`) values ('{$pic}','{$brand_name}','$b');";
		mysql_query($sql);
		return mysql_insert_id();
	}
	function getBrand_list($c,$id){
		$c =  iconv('GB2312', 'UTF-8', $c);
		$model = split("</li>",$c);
		foreach($model as $m){
			preg_match('/<a href="(.*)">(.*)<\/a><\/h4><div>指导价：(.*)<div>/is',$m,$arr);
			if($arr){
				print_r($arr);
				preg_match('/">(.*)-(.*)万<\/a>/is',$arr[3],$parr);
				$sql = "insert into model (`brand_id`,`name`,`price_min`,`price_max`,`url`) values ('{$id}','{$arr[2]}','{$parr[1]}','{$parr[2]}','{$arr[1]}');";
				mysql_query($sql);
			}
		}
	}
?>