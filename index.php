<?php
include("json/sectionname.php");
include("json/date.php");
include("json/webtitle.php");
include("json/weburl.php");
$jsondata = file_get_contents("https://content.guardianapis.com/search?api-key=c4ded2d8-2350-48b1-a882-1b191d65da1f");
$json= json_decode($jsondata,true);
// $output="<ul>";

// foreach($json["response"]["results"] as $response){
	// $output .= "<h4>".$response['type']."</h4>";
	// // $output .= "<li>".$response['userTier']."</li>";
	// // $output .= "<li>".$response['genre']."</li>";
	// // $output .= "<li>".$response['director']."</li>";
	
// }

 // $output .= "</ul>";
  // echo $output;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewsForToday</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="ie.css" /><![endif]-->
</head>
<body>
<!-- BEGIN navigation -->
<div id="navigation">
  <div class="wrapper">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="page.html">Demo Page</a></li>
      <li><a href="contact.html">Contact Page</a></li>
    </ul>
    <form action="#">
      <button type="submit">Search</button>
      <input type="text" name="s" id="s" />
    </form>
  </div>
</div>
<!-- END navigation -->
<!-- BEGIN wrapper -->
<div class="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <h1><a href="#">NewsForToday</a></h1>
    <div class="ad468x60"><a href="#"><img src="images/ad468x60.gif" alt="" /></a></div>
  </div>
  <!-- END header -->
  <!-- BEGIN body -->
  <div id="body">
    <!-- BEGIN content -->
    <div id="content">
      <!-- begin recent post -->
      <div class="recent post">
        <h2 class="title">Recent News</h2>
        <h2 id='<?php echo Strip_tags("$sectionName1"); ?>'><a href="#"><?php echo $sectionName1; ?></a></h2>
        <p><?php echo $webtitle1; ?></p>
        
        
      </div>
      <!-- end recent post -->
      <div class="posts">
        <!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate2; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName2"); ?>'><a href="#"><?php echo $sectionName2; ?></a></h2>
         
          <p><?php echo $webtitle2; ?></p>
         
          <div class="details"> <a href="<?php echo $weburl2; ?>">READ MORE</a>  </div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate3; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName3"); ?>'><a href="#"><?php echo $sectionName3; ?></a></h2>
         
          <p><?php echo $webtitle3; ?></p>
          
          <div class="details"> <a href="<?php echo $weburl3; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate4; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName4"); ?>'><a href="#"><?php echo $sectionName4; ?></a></h2>
          
          <p><?php echo $webtitle4; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl4; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
        <!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate5; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName5"); ?>'><a href="#"><?php echo $sectionName5; ?></a></h2>
          
          <p><?php echo $webtitle5; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl5; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
		<!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate6; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName6"); ?>'><a href="#"><?php echo $sectionName6; ?></a></h2>
          
          <p><?php echo $webtitle6; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl6; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
		<!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate7; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName7"); ?>'><a href="#"><?php echo $sectionName7; ?></a></h2>
          
          <p><?php echo $webtitle7; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl7; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
		<!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate8; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName8"); ?>'><a href="#"><?php echo $sectionName8; ?></a></h2>
          
          <p><?php echo $webtitle8; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl8; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
		<!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate9; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName9"); ?>'><a href="#"><?php echo $sectionName9; ?></a></h2>
          
          <p><?php echo $webtitle9; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl9; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
		<!-- begin post -->
        <div class="post">
          <p class="date"><?php echo $webPublicationDate10; ?></p>
          <h2 id='<?php echo Strip_tags("$sectionName10"); ?>'><a href="#"><?php echo $sectionName10; ?></a></h2>
          
          <p><?php echo $webtitle10; ?></p>
        
          <div class="details"> <a href="<?php echo $weburl10; ?>">READ MORE</a></div>
        </div>
        <!-- end post -->
        <div class="break"></div>
      </div>
    </div>
    <!-- END content -->
    <!-- BEGIN sidebar -->
    <div id="sidebar">
      <!-- begin Advertisement -->
      <div class="ads">  </div>
      <!-- end Advertisement -->
      <!-- begin subscribe -->
     
      <!-- end subscribe -->
      <!-- begin popular posts -->
      <h2>Popular news</h2>
      <ul>
        <li><a href="<?php echo $weburl10; ?>"><?php echo $webtitle10; ?></a></li>
        <li><a href="<?php echo $weburl9; ?>"><?php echo $webtitle9; ?></a></li>
        <li><a href="<?php echo $weburl8; ?>"><?php echo $webtitle8; ?></a></li>
        <li><a href="<?php echo $weburl7; ?>"><?php echo $webtitle7; ?></a></li>
        <li><a href="<?php echo $weburl6; ?>"><?php echo $webtitle6; ?></a></li>
      </ul>
      <!-- end popular posts -->
      <!-- begin tags -->
      
      <!-- end tags -->
      <!-- BEGIN left -->
      <div class="l">
        <!-- begin categories -->
        <h2>Categories</h2>
        <ul>
          <li><a href="#<?php echo Strip_tags("$sectionName1"); ?>"><?php echo $sectionName1; ?></a></li>
          <li><a href="#<?php echo Strip_tags("$sectionName2"); ?>"><?php echo $sectionName2; ?></a></li>
          <li><a href="#<?php echo Strip_tags("$sectionName3"); ?>"><?php echo $sectionName3; ?></a></li>
          <li><a href="#<?php echo Strip_tags("$sectionName4"); ?>"><?php echo $sectionName4; ?></a></li>
          <li><a href="#<?php echo Strip_tags("$sectionName5"); ?>"><?php echo $sectionName5; ?></a></li>
          <li><a href="#<?php echo Strip_tags("$sectionName6"); ?>"><?php echo $sectionName6; ?></a></li>
		  <li><a href="#<?php echo Strip_tags("$sectionName7"); ?>"><?php echo $sectionName7; ?></a></li>
		  <li><a href="#<?php echo Strip_tags("$sectionName8"); ?>"><?php echo $sectionName8; ?></a></li>
		  <li><a href="#<?php echo Strip_tags("$sectionName9"); ?>"><?php echo $sectionName9; ?></a></li>
		  <li><a href="#<?php echo Strip_tags("$sectionName10"); ?>"><?php echo $sectionName10; ?></a></li>
        </ul>
        <!-- end categories -->
        <!-- begin pages -->
        
        <!-- end pages -->
      </div>
      <!-- END left -->
      <!-- BEGIN right -->
      <div class="r">
        <!-- begin archives -->
        
        <!-- end archives -->
        <!-- begin blogroll -->
        
        <!-- end blogroll -->
        <!-- begin meta -->
        
        <!-- end meta -->
      </div>
      <!-- END right -->
    </div>
    <!-- END sidebar -->
  </div>
  <!-- END body -->
  <div class="break"></div>
</div>
<!-- END wrapper -->
<!-- BEGIN footer -->
<div id="footer">
  <div class="wrapper">
    <p class="l">Copyright &copy; 2009 - <a href="#">Website Name</a> &middot; All Rights Reserved</p>
    <p class="r">Template by: <a href="http://www.wpthemedesigner.com/">WordPress Designer</a> | Get More <a href="#">Free CSS Templates</a></p>
  </div>
</div>
<!-- END footer -->
</body>
</html>
