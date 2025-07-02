<?php
 $numberBegin = 350;
 $numberEnd = 399;
 $numberPhotos = 10; 
 function genHTMLAsia($numer) {
  return '<a href="/mp/info'.$numer.'.htm"><img src="/mp/p'.$numer.'-1.jpg" title="A Foreign Affair" alt="A Foreign Affair Profiles" /></a>'; 
 }

 
 $HTML = ""; 
 $arr = range($numberBegin, $numberEnd); 
 if($numberPhotos > count($arr)) $numberPhotos = count($arr);
 
 for($i=0;$i<$numberPhotos;$i++) {
  $randKey = array_rand($arr); 
  $HTML .= "\t".genHTMLAsia($arr[$randKey])."\n";
  unset($arr[$randKey]);
 } 
 
 echo $HTML;
 
?>
