<?php
 $numberBegin = 350;
 $numberEnd = 399;
 $numberPhotos = 9; 
 function genHTMLAsia($numer) {
 return '<li><a href="/mp/info'.$numer.'.htm"><amp-img src="/mp/p'.$numer.'-1.jpg" width="139px" height="198px" alt="A Foreign Affair Profiles"></amp-img></a></li>'; 
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
