<?php
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
$sectionName="<ul>";
$webPublicationDate="<ul>";

  // sectionName parsing started

foreach($json["response"]["results"] as $response){
	$sectionName .= "<h4>".$response['sectionName']."</h4>";
	$webPublicationDate = "<h4>".$response['webPublicationDate']."</h4>";
	// $output .= "<li>".$response['userTier']."</li>";
	// $output .= "<li>".$response['genre']."</li>";
	// $output .= "<li>".$response['director']."</li>";
	
}

 $sectionName .= "</ul>";
 $webPublicationDate="</ul>";
  // echo $sectionName;
  // echo "-----------------------------";
  $arr = explode("</h4>", $sectionName);
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
  
  echo $sectionName2;
  
  // sectionName parsing ended
  
   // webPublicationDate parsing started
   
 

// $arr1 = explode("</h4>", $webPublicationDate);
  // $webPublicationDate1= $arr1['0'];
  // $webPublicationDate2= $arr1['1'];
  // $webPublicationDate3= $arr1['2'];
  // $webPublicationDate4= $arr1['3'];
  // $webPublicationDate5= $arr1['4'];
  // $webPublicationDate6= $arr1['5'];
  // $webPublicationDate7= $arr1['6'];
  // $webPublicationDate8= $arr1['7'];
  // $webPublicationDate9= $arr1['8'];
  // $webPublicationDate10= $arr1['9'];
  // echo $webPublicationDate1;
  // echo $webPublicationDate2;
  // echo $webPublicationDate3;
  // echo $webPublicationDate4;
  // echo $webPublicationDate5;
  // echo $webPublicationDate6;
  // echo $webPublicationDate7;
  // echo $webPublicationDate8;
  // echo $webPublicationDate9;
  // echo $webPublicationDate10;
  
  // for($i = 0; $i <= 9; $i++){
// if (!isset($arr1['i'])) {
  // $$arr1['0'] = '';
// }

// if (!array_key_exists(15, $arr1)) {
  // $arr1['i'] = '';
// }
  // }
   // webPublicationDate parsing ended
?>