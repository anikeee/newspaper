<?php
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
$sectionName="<ul>";


 

foreach($json["response"]["results"] as $response){
	$sectionName .= "<p><h4>".$response['sectionName']."</h4></p>";
	
	
	
}

 $sectionName .= "</ul>";

 
  $arr = explode("</p>", $sectionName);
  $sectionName1= $arr['0'];
  $sectionName2= $arr['1'];
  $sectionName3= $arr['2'];
  $sectionName4= $arr['3'];
  $sectionName5= $arr['4'];
  $sectionName6= $arr['5'];
  $sectionName7= $arr['6'];
  $sectionName8= $arr['7'];
  $sectionName9= $arr['8'];
  $sectionName10= $arr['9'];
  
  // echo $sectionName2;
  
  
?>