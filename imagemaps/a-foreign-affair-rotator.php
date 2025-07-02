<?php
 $numberBegin = 11;
 $numberEnd = 40;
 $numberPhotos = 6; 
 function genHTMLAsia($numer) {
  return '<li><a href="/mp/info'.$numer.'.htm"  target="_blank"><img src="/mp/p'.$numer.'-1.jpg" title="A Foreign Affair" alt="A Foreign Affair Profiles" /></a></li>'; 
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
