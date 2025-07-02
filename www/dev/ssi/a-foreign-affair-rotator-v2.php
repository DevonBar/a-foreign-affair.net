<?php
 $numberBegin = 350;
 $numberEnd = 399;
 $numberPhotos = 8; 

// $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
// $domain = $protocol.'www.'.$_SERVER['SERVER_NAME'];
// echo $domain;

function getURL($numer){
	$URL = '/mp/info'.$numer.'.htm';
	return $URL;
}

function getIMG($numer){

	return '<a href="/mp/info'.$numer.'.htm"><img src="/mp/p'.$numer.'-1.jpg" title="A Foreign Affair" alt="A Foreign Affair Profiles"/></a>';
}

 $getURL = (array) null; 
 $getAttr = "";
 $doc = new DOMDocument();
 $arr = range($numberBegin, $numberEnd); 
 $retval = (array) null;
 $imgval = (array) null;
 $setarr1 = (array) null;
 $getarr = (array) null;

 if($numberPhotos > count($arr)) $numberPhotos = count($arr);
 
 for($i=0;$i<$numberPhotos;$i++) {
 	//echo 'ID: '.$arr[$randKey].'<br/>';
	$randKey = array_rand($arr); 
	$getURL[] = getURL($arr[$randKey]);

	$imgval[] = getIMG($arr[$randKey]);
	@$doc->loadHTMLFile(getURL($arr[$randKey]));
	$xpath = new DOMXPath($doc);
	$retval[] = $xpath->query('//title')->item(0)->nodeValue;
	
 }

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
$domainLink = 'https://' . $_SERVER['HTTP_HOST'];

for($j = 0; $j < count($getURL); $j++){
	$page = file_get_contents($domainLink.$getURL[$j]);
	//print_r($page);
	$pos = stripos($page, "<title>")+7;
	$setarr1[] = substr($page, $pos, stripos($page, "</title>")-$pos);
}
// echo 'URL: '.count($retval).'<br/>';
// echo '<br/>';
// echo 'IMG: '.count($imgval).'<br/>';
// echo '<pre>';
// print_r($setarr1);
// echo '</pre>';

// $getimg[] = array_splice($imgval, 0, 1);

// echo '<pre>';
// var_dump($imgval);
// echo '</pre>';
$setAttr = explode(',', $setarr1);

for($j = 0; $j < count($retval); $j++){
	//print_r($setarr1);
	$setAttr = explode(',', $setarr1[$j]);
	$getarr[] = $setAttr;
}
	// echo '<pre>';
	// print_r($getarr);
	// echo '</pre>';

// echo '<pre>';
// print_r($setAttr);
// echo '</pre>';
	echo '<table id="img-rotator-tbl"><tr>';
	for($i = 0; $i < count($retval); $i++){
		echo '<td>';
				
				//START OF Profile DETAIL DIV
				echo '<div class="profDetails">';
					echo '<p style="text-align:center; color:#fff;font-size:18px;">';
					print_r($getarr[$i][0]);
					echo '</p>';

					echo '<p style="text-align:center; color:#fff;font-size:14px;">';
					print_r($getarr[$i][2]);
					echo ', ';
					print_r($getarr[$i][3]);
					echo '</p>';
				echo '</div>';

				//START OF PROFILE PICTURE DIV
				echo $imgval[$i];
		echo '</td>';		
	}
	echo '</tr></table>';


unset($arr[$randKey]);


 
?>
