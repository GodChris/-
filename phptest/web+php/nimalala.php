<?php
$con=mysqli_connect("127.0.0.1","root","951031","cars_doctor");
mysqli_query($con,"SET NAMES 'utf8'");
$sql="select * from model where status=1;";/////查询表model
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){/////返回根据从结果集取得的行生成的数组
    $url = "http://www.autohome.com.cn/{$row["url"]}";
    $html = file_get_contents($url);////file_get_contents() 函数把整个文件读入一个字符串中
    $html = iconv('GBK', 'UTF-8//IGNORE', $html);////转换字符串编码方法,忽略转换时的出错情况
    preg_match('/class="dropdown cartype-sale-list fn-hide">(.*)id="speclist"(.*)<!--在售 start-->(.*)<!--在售 end-->/is',$html,$arr);
    ///匹配正则表达式，把结果存入arr数组，$html是需要匹配检索的对象
    if($arr[1])getTs($arr[1],$row["url"],$row["id"]);
    echo "<br/>";
    echo "<br/>";
    if($arr[3])getZs($arr[3],$row["id"]);
}
function getTs($h,$u,$id){
    $h=split("li>",$h);///split() 方法用于把一个字符串分割成字符串数组,从“li>”开始分割
    foreach($h as $l){///循环，把$h数组的值赋$l,并自动跳到下一个单元。
        preg_match('/target="_self" data="(.*)">(.*)<\/a>/is',$l,$arr);
        if($arr[1]&&$arr[2])
        {
            $murl="http://www.autohome.com.cn/ashx/series_allspec.ashx?s={$u}&y={$arr[1]}";
            $mhtml = file_get_contents($murl);
            $mhtml = iconv('GB2312', 'UTF-8//IGNORE', $mhtml);
            $mjson = json_decode($mhtml);///把JSON 格式的字符串转换为 PHP数组或对象
            foreach($mjson->Spec as $spe){
                $spname = $spe->Name;
                $spname = split("款",$spname);
                $inssql = "insert into carstype (`model_id`,`name`,`year`,`price`,`par`,`driving`,`trans`) values ('$id','".$spe->Name."','".$spname[0]."','".trim($spe->Price,"万")."','".$spe->GroupName."','".$spe->DrivingModeName."','".$spe->Transmission."')";
                echo $inssql."<br/>";
                //mysql_query($inssql);
            }
        }
    }
}
function getZs($h,$id){
    //echo $h."<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
    $h=split("interval01-title",$h);
    foreach($h as $l){
        preg_match('/"interval01-list-cars-text">(.*)<\/span><\/div>(.*)"interval01-list"(.*)<\/ul>/is',$l,$arr1);
        if($arr1[1]){
            $leixin = $arr1[1];
            $carlist = split('"interval01-list-cars"',$arr1[3]);
            foreach($carlist as $cl){
                preg_match('/<p data-gcjid="(.*)<a href="(.*)">(.*)款 (.*)<\/a>(.*)<span>(.*)<\/span><span>(.*)<\/span>(.*)"interval01-list-attention"(.*)icon16-calendar"><\/i><\/a> (.*)万/is',$cl,$arr2);
                if($arr2[3]){
                    $inssql = "insert into carstype (`model_id`,`name`,`year`,`price`,`par`,`driving`,`trans`) values ('$id','".$arr2[3]."款 ".$arr2[4]."','".$arr2[3]."','".$arr2[10]."','".$leixin."','".$arr2[6]."','".$arr2[7]."')";
                    echo $inssql."<br/>";
                    //mysql_query($inssql);
                }
            }
        }
    }
}