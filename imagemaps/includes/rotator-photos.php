<?php
 if ($_GET['s'] && $_GET['e'])
{
	 $numberBegin = $_GET['s'];
	 $numberEnd = $_GET['e'];
}
else
{
	 $numberBegin = 350;
	 $numberEnd = 399;
}
$numberPhotos = 10; 

 function genRotatorHeader($numer) {
  return '<a href="/mp/info'.$numer.'.htm"><img src="/mp/p'.$numer.'-1.jpg"  width=128 align=left hspace=0 vspace=0 border=0></a>'; 
 }

 
 $HTML = ""; 
 $arr = range($numberBegin, $numberEnd); 
 if($numberPhotos > count($arr)) $numberPhotos = count($arr);
 
 for($i=0;$i<$numberPhotos;$i++) {
  $randKey = array_rand($arr); 
  $HTML .= "\t".genRotatorHeader($arr[$randKey])."\n";
  unset($arr[$randKey]);
 } 
 
 echo $HTML;
 
?>
