<?php
$er_time=date("H:i:s d M Y");
$U=getenv("HTTP_USER_AGENT");
$H=getenv("HTTP_REFERER");
$R=getenv("REMOTE_ADDR");
$f_date=date("d_m_Y");
$t="неизвестно";
if(isset($_GET['t'])) $t=$_GET['t'];

$abs_addr="/home/autofor6/public_html/arhangelskmebel";
$f=fopen($f_date.".log",'a'); // дальше - понятно, пишем всё это в файл
flock ($f,2);
fwrite($f,"$er_time\n Br: $U\n Rf: $H\n IP: $R\n Rq: $t\n");
fclose($f);
?>