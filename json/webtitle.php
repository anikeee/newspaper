<?php
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
$webtitle="<ul>";


  

foreach($json["response"]["results"] as $response){
	$webtitle .= "<p><h4>".$response['webTitle']."</h4></p>";
	

	
}

 $webtitle .= "</ul>";

 
  $arr = explode("</p>", $webtitle);
  $webtitle1= $arr['0'];
  $webtitle2= $arr['1'];
  $webtitle3= $arr['2'];
  $webtitle4= $arr['3'];
  $webtitle5= $arr['4'];
  $webtitle6= $arr['5'];
  $webtitle7= $arr['6'];
  $webtitle8= $arr['7'];
  $webtitle9= $arr['8'];
  $webtitle10= $arr['9'];
  
  // echo $webtitle2;
  
  
?>