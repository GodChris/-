<?php
$con=mysqli_connect("127.0.0.1","root","951031","cars_doctor");
mysqli_query($con,"SET NAMES 'utf8'");
$sql="select * from model where status=1;";/////��ѯ��model
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){/////���ظ��ݴӽ����ȡ�õ������ɵ�����
    $url = "http://www.autohome.com.cn/{$row["url"]}";
    $html = file_get_contents($url);////file_get_contents() �����������ļ�����һ���ַ�����
    $html = iconv('GBK', 'UTF-8//IGNORE', $html);////ת���ַ������뷽��,����ת��ʱ�ĳ������
    preg_match('/class="dropdown cartype-sale-list fn-hide">(.*)id="speclist"(.*)<!--���� start-->(.*)<!--���� end-->/is',$html,$arr);
    ///ƥ��������ʽ���ѽ������arr���飬$html����Ҫƥ������Ķ���
    if($arr[1])getTs($arr[1],$row["url"],$row["id"]);
    echo "<br/>";
    echo "<br/>";
    if($arr[3])getZs($arr[3],$row["id"]);
}
function getTs($h,$u,$id){
    $h=split("li>",$h);///split() �������ڰ�һ���ַ����ָ���ַ�������,�ӡ�li>����ʼ�ָ�
    foreach($h as $l){///ѭ������$h�����ֵ��$l,���Զ�������һ����Ԫ��
        preg_match('/target="_self" data="(.*)">(.*)<\/a>/is',$l,$arr);
        if($arr[1]&&$arr[2])
        {
            $murl="http://www.autohome.com.cn/ashx/series_allspec.ashx?s={$u}&y={$arr[1]}";
            $mhtml = file_get_contents($murl);
            $mhtml = iconv('GB2312', 'UTF-8//IGNORE', $mhtml);
            $mjson = json_decode($mhtml);///��JSON ��ʽ���ַ���ת��Ϊ PHP��������
            foreach($mjson->Spec as $spe){
                $spname = $spe->Name;
                $spname = split("��",$spname);
                $inssql = "insert into carstype (`model_id`,`name`,`year`,`price`,`par`,`driving`,`trans`) values ('$id','".$spe->Name."','".$spname[0]."','".trim($spe->Price,"��")."','".$spe->GroupName."','".$spe->DrivingModeName."','".$spe->Transmission."')";
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
                preg_match('/<p data-gcjid="(.*)<a href="(.*)">(.*)�� (.*)<\/a>(.*)<span>(.*)<\/span><span>(.*)<\/span>(.*)"interval01-list-attention"(.*)icon16-calendar"><\/i><\/a> (.*)��/is',$cl,$arr2);
                if($arr2[3]){
                    $inssql = "insert into carstype (`model_id`,`name`,`year`,`price`,`par`,`driving`,`trans`) values ('$id','".$arr2[3]."�� ".$arr2[4]."','".$arr2[3]."','".$arr2[10]."','".$leixin."','".$arr2[6]."','".$arr2[7]."')";
                    echo $inssql."<br/>";
                    //mysql_query($inssql);
                }
            }
        }
    }
}