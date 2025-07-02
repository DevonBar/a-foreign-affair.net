<?php
 $numberBegin = 11;
 $numberEnd = 40;
 $numberPhotos = 5; 
 function genHTMLAsia($numer) {
  return '<div class="ms-slide" data-delay="3" data-fill-mode="fill"><div class="ms-slide-bgcont" style="height: auto; opacity: 1;"><a href="/mp/info'.$numer.'.htm"  target="_blank"><img src="/mp/p'.$numer.'-1.jpg" title="A Foreign Affair" alt="A Foreign Affair Profiles" height="220" width="160" title="A Foreign Affair Profile - info'.$numer.'" alt="A Foreign Affair Profile '.$number.'"></a></div></div>';
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
