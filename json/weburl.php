<?php
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
$weburl="";




foreach($json["response"]["results"] as $response){
	$weburl .= "".$response['webUrl']."</p>";
	

	
}

 $weburl .= "";

 
  $arr = explode("</p>", $weburl);
  $weburl1= $arr['0'];
  $weburl2= $arr['1'];
  $weburl3= $arr['2'];
  $weburl4= $arr['3'];
  $weburl5= $arr['4'];
  $weburl6= $arr['5'];
  $weburl7= $arr['6'];
  $weburl8= $arr['7'];
  $weburl9= $arr['8'];
  $weburl10= $arr['9'];
  
 
  
 
?>