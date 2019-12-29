<?php
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
$data="<ul>";
$webPublicationDate="<ul>";



foreach($json["response"]["results"] as $response){
	$data.= "<p><h4>".$response['webPublicationDate']."</h4></p>";
	
	
	
}

 $data.= "</ul>";


  $arr = explode("</p>", $data);
  $webPublicationDate1= $arr['0'];
  $webPublicationDate2= $arr['1'];
  $webPublicationDate3= $arr['2'];
  $webPublicationDate4= $arr['3'];
  $webPublicationDate5= $arr['4'];
  $webPublicationDate6= $arr['5'];
  $webPublicationDate7= $arr['6'];
  $webPublicationDate8= $arr['7'];
  $webPublicationDate9= $arr['8'];
  $webPublicationDate10= $arr['9'];
  
  // echo $webPublicationDate10;
  
  
?>