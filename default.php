<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>প্রথম সকাল</title>
<?php require('connect.php');?>
<?php
			$timestamp=time();
			$timestamp=$timestamp+(6*60*60)-99999999;
			$time=date( "Y-m-d 00:00:00",$timestamp);
			mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
			$result2 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
			$result3 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="scripts/phonetic_int.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#newsletter_go").click( 
  
    function(){
    
        var username=$("#username").val();
        var mailAddress=$("#email").val();
      
        $.ajax({
        type: "POST",
        url: "index.php/register_sub/post_action",
        dataType: "json",
        data: "username="+username+"&subMail="+mailAddress,
        cache:false,
        success: 
          function(data){
            $("#form_message").html(data.message).css({'background-color' : data.bg_color, border: '1px solid '+data.border_color, padding:'5px'}).fadeIn('slow'); 
          }
        
        });

      return false;

    });
  
});
</script>
<script language="JavaScript" type="text/javascript"><!--
    function addToFav() { 
		if(window.sidebar){
			window.sidebar.addPanel(document.title, this.location,"");
		}
		else{
        	window.external.AddFavorite(this.location,document.title);
		}
    }        
//--> 
</script>
 <style type="text/css">
    label.error { width: 250px; display: block; float: left; color: red; padding-left: 10px;
		border:1px solid; margin-top:3px; margin-right:3px; padding:5px;
	}
 a:visited {
	color: #007F55;
}
 body,td,th {
	color: #808080;
}
 a:link {
	color: #FF1F55;
}
 a:hover {
	color: #009F55;
}
 a:active {
	color: #FF0000;
}
 </style>
</head>
<!-- Header Section Ends Here  -->

<!-- Header Contact and Short Menu Start Here  -->
<body link="#FF1F55" alink="#808080" id="top">
<div class="wrapper col0">
  <div id="topline">
    <p> ই মেইল : binaryextreme5@gmail.com</p>
    <ul>
	<li><a href="index.php/bangla_help.php"><img class="noBangla" src="images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFFFF">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="index.php/contactUs.php"><font color="#FFFFFF">যোগাযোগ</font></a></li>
		
		    </ul>
    <a href="admin.php"><font color="#FFFFFF">| সম্পাদকীয় প্যানেল</font></a><br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="default.php"><strong>প্রথম সকাল</strong></a></h1>
      <p><i><b>জাগবে মানুষ পড়বে খবর প্রথম সকাল হবে সফল</b></i> &nbsp&nbsp&nbsp(লাইভ বাংলা খবর - ২৪ ঘন্টা)</p>
    </div>

    <br class="clear" />
  </div>
</div>

<!--Code To Show News Headlines -->
		
<div id="headlines">
	  <div class="head">শিরোনাম : </div>
	  <div class="headNews">
	  <ul>
	  <marquee behavior="scroll" direction="left" scrollamount="1" scrolldelay="15" truespeed="" onmouseover="this.stop()" onmouseout="this.start()">
     <li> <?php
include('scroller.php');
 ?></li>

				</marquee>
		</ul>
		</div>
</div>
<!-- -->
﻿<!-- Top Menu and Search Bar Code -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
				
        <li><a href="default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="index.php/national/default.php">জাতীয়</a></li>
		
				
        <li><a href="index.php/international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="index.php/politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="index.php/sports/default.php">খেলা</a></li>
		
				
        <li><a href="index.php/entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="index.php/technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="index.php/economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="index.php/feature/default.php">ফিচার</a></li>
		
				
        <li><a href="index.php/literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="index.php/education/default.php">শিক্ষা</a></li>
		
		<li><a href="index.php/diu/default.php">ডি আই ইউ ৩য় সমাবর্তন </a></li>
		
		
		<li><a href="index.php/binary_team/demo5.html">ডি আই ইউ বাইনারি টীম</a></li>
		
		
		
		
		      </ul>
    </div>
    <div id="search">
      <form action="http://localhost/livenews/default.php" method="post">
          <legend>Site Search</legend>
          <input type="text" id="searchTag" name="searchTag" placeholder="সার্চ কিওয়ার্ড লিখুন&hellip;" />
          <input type="submit" name="go" id="go" value="তথ্য খুজুন" />
      </form>
	  
	  <div id="s2From"> 
		<table border="0" cellpadding="0">
			<tr>
				<td><input type="radio" id="radio" name="layoutGrp" onclick="switched=false;"  value="probh"  checked="checked" /><label>ফনেটিক</label></td>
				<td><input type="radio" id="radio" name="layoutGrp"  onclick="switched=true;" value="english"/><label>English</label></td>
			</tr>
		</table>
	 </div>
    </div>
    <br class="clear" />
  </div>
 </div>
  <script>makePhoneticEditor('searchTag'); //pass the textarea Id</script>
﻿<!--Code To Show Body Of The Site -->
<div class="wrapper">
  <div class="container">
    <div class="content">
	<!-- Code For Slideshow Of Top News -->
      <div class="panel-overlay" id="featured_slide">
        <ul id="featurednews">
          <li><img src="images/demo/do1.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস </h2>
              <p>জাতীয় প্যারেড ময়দানে দুই শ’ ফুট দীর্ঘ জাতীয় পতাকা নিয়ে প্রধানমন্ত্রীকে সালাম জানায় সশস্ত্র বাহিনীর সদস্যরা।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do2.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস—</h2>
              <p>জাতীয় স্মৃতিসৌধে ফুল দিয়ে মুক্তিযুদ্ধের শহীদদের প্রতি শ্রদ্ধা জানাচ্ছেন প্রধানমন্ত্রী শেখ হাসিনা।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do3.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>বিজয় দিবসে বিভিন্ন সংগঠনের পক্ষ থেকে জাতীয় স্মৃতিসৌধে ফুল দিয়ে শ্রদ্ধা জানানো হয়।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do4.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>যুদ্ধাপরাধের বিচার তরান্বিত করার দাবিতে আমরা মুক্তিযোদ্ধার সন্তান জাতীয় স্মৃতিসৌধে প্রতীকী অনশন পালন করে।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do5.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস — </h2>
              <p> বিজয় দিবসের সকালে যুদ্ধাহত মুক্তিযোদ্ধারা জাতীয় স্মৃতিসৌধে ফুল দিয়ে শ্রদ্ধা জানান। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do6.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> জাতীয় স্মৃতিসৌধে ফুল দিয়ে মুক্তিযুদ্ধের শহীদদের প্রতি শ্রদ্ধা জানাচ্ছেন স্পিকার আব্দুল হামিদ। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do7.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> জাতীয় স্মৃতিসৌধে ফুল দিয়ে মুক্তিযুদ্ধের শহীদদের প্রতি শ্রদ্ধা জানাচ্ছেন বিরোধী দলীয় নেতা খালেদা জিয়া। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          
          <li><img src="images/demo/do9.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>জাতীয় প্যারেড ময়দানে সশস্ত্র বাহিনীর কুচকাওয়াজের সঙ্গে তুলে ধরা হয় বাংলাদেশের সাংস্কৃতিক বৈচিত্রও।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do10.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> বিজয় দিবসে জাতীয় প্যারেড ময়দানে সশস্ত্র বাহিনীর কুচকাওয়াজ পরিদর্শন করেন প্রধানমন্ত্রী শেখ হাসিনা। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do11.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>  রোববার বিজয় দিবসের সকালে সাভার জাতীয় স্মৃতিসৌধে লাখো মানুষের ঢল নামে।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do12.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> বিজয় দিবসে জাতীয় স্মৃতিসৌধে ফুল দিয়ে শ্রদ্ধা জানায় বিভিন্ন শ্রেণী পেশার লাখো মানুষ। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do13.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> রোববার বিজয় দিবসের সকালে সাভার জাতীয় স্মৃতিসৌধে লাখো মানুষের ঢল নামে। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do14.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>  হৃদয়ে বাংলাদেশ- লাখো মানুষের শ্রদ্ধা  <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do15.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p> বিজয় দিবসে রোববার জাতীয় প্যারেড গ্রাউন্ডে কুচকাওয়াজ পরিদর্শন করেন প্রধানমন্ত্রী শেখ হাসিনা। <br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
          <li><img src="images/demo/do16.jpg" alt="" />
            <div class="panel-overlay">
              <h2>আজ মহান বিজয় দিবস —</h2>
              <p>বিজয় দিবসে রোববার জাতীয় প্যারেড গ্রাউন্ডে কুচকাওয়াজ পরিদর্শন করেন প্রধানমন্ত্রী শেখ হাসিনা।<br />
                <a href="#">জাতির বিনম্র শ্রদ্ধা&raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column">
	
	<!-- Code To Show Latest 10 or More News -->
      <h2 style="color: 660000; font-weight: bold; ">প্রথম সকাল এর এক্সক্লুসিভ সংবাদ </h2>
	  <ul class="latestnews">
      
		<?php include('mostvisited.php'); ?>		
				
      </ul>
    </div>
    <br class="clear"/>
  </div>
</div>

<!-- Advertisement Block -->
<div class="wrapper">
 <!--
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  -->
  
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="index.php/national/default.php">জাতীয় &raquo;</a></h2>
	        <img src="newsImages/abul-sm20120722150623.jpg" width="100" height="100" alt="সৈয়দ আবুল হোসেনের পদত্যাগ" />
      <p><strong><a href="index.php/national/details.php?news=jatiyo&id=21">"মিরপুরে গ্রেপ্তার ৩ জেএমবি রিমান্ডে" <br/></a></strong></p>
      <p>
	  ঢাকার মিরপুরে ‘জঙ্গি আস্তানা’ থেকে বিস্ফোরকসহ গ্রেপ্তার তিন জেএমবি সদস্যকে জিজ্ঞাসাবাদের জন্য ছয় দিনের পুলিশ হেফাজতে পাঠিয়েছে আদালত। 	  </p>
    </div>
	
    <div class="fl_right">
      <h2><a href="index.php/international/default.php">আন্তর্জাতিক &raquo;</a></h2>
            <img src="newsImages/fish4ff48cf976135-untitled-11.jpg" width="100" height="100" alt="যুক্তরাষ্ট্রে শোকের ছায়া, কাঁদলেন ওবামা" />
      <p><strong><a href="index.php/international/details.php?news=international&id=4">যুক্তরাষ্ট্রে শোকের ছায়া, কাঁদলেন ওবামা</a></strong></p>
      <p>
	  কানেটিকাট রাজ্যের একটি স্কুলে বন্দুকধারীর গুলিতে ২০ শিশুসহ ২৬ জনের মৃত্যুতে যুক্তরাষ্ট্রজুড়ে শোক নেমে এসেছে। এ ঘটনায় চোখের পানি আটকাতে পারেননি প্রেসিডেন্ট বারাক ওবামাও। </p>
    </div>
	
    <br class="clear" />
	
    <div class="fl_left">
      <h2><a href="index.php/technology/default.php">তথ্যপ্রযুক্তি &raquo;</a></h2>
            <img src="newsImages/0-internet.jpg" width="100" height="100" alt="কম্পিউটার" />
      <p><strong><a href="index.php/technology/details.php?news=tothoprojukti&id=26">পঞ্চ ইন্দ্রিয় আসছে কম্পিউটারে!</a></strong></p>
      <p>
	  আইবিএম জানিয়েছে, আগামী পাঁচ বছরের মধ্যে এমন কম্পিউটার তৈরি হবে, যা হবে মানুষের মতোই অনুভূতিসম্পন্ন। কম্পিউটারে থাকবে পঞ্চ ইন্দ্রিয়ের অনুভূতি শনাক্ত করার প্রযুক্তি। </p>
    </div>
    <div class="fl_right">
      <h2><a href="index.php/entertainment/default.php">বিনোদন &raquo;</a></h2>
            <img src="newsImages/katrina-kaif1.jpg" width="100" height="100" alt="সাইফ-কারিনা" />
      <p><strong><a href="index.php/entertainment/details.php?news=binodon&id=12">বিয়ে করলেন সাইফ-কারিনা</a></strong></p>
      <p>
	 দীর্ঘ প্রতীক্ষার পর বিয়ে করলেন বলিউড অভিনয়শিল্পী সাইফ আলি খান ও কারিনা কাপুর  </p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- Sports Part -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2><a href="index.php/sports/default.php"><font color="#009FFF">খেলা</font> &raquo; </a></h2>
        <ul>
				  <li>
          <img src="newsImages/sachin-tendulkar.jpg" width="190" height="130" alt="শচীন টেন্ডুলকার" />
            <p>পাকিস্তান ক্রিকেট দলের আসন্ন ভারত সফর নিয়ে সমস্যার বেড়াজাল কাটছেই না। শনিবার ডান পন্থী গ্রুপ ‘শ্রী রান সেন’ যেকোন মুল্যে ব্যাঙ্গালোরে অনুষ্ঠেয় সফরের প্রথম টি-টোয়েন্টি পণ্ড করার হুমকি দিয়েছে। </p>
            <p class="readmore"><a href="index.php/sports/details.php?news=khela&id=8">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="newsImages/ronal.jpg" width="190" height="130" alt="গোললাইন প্রযুক্তি" />
            <p>একবার ভাবুন তো, ইংলিশ প্রিমিয়ার লিগের একটি ম্যাচ চলছে। খেলার শেষ মিনিটে ডি-বক্সের বাইরে ফ্রি কিক পেল একটি দল। </p>
            <p class="readmore"><a href="index.php/sports/details.php?news=khela&id=11">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="newsImages/dravid_image.jpg" width="190" height="130" alt="রাহুল দ্রাবিড়" />
            <p>পাকিস্তান সফরে যাওয়ার ব্যাপারে খেলোয়াড় ও কোচ কাউকে চাপ দেয়া হবে না বলে জানিয়েছেন বাংলাদেশ ক্রিকেট বোর্ড (বিসিবি) সভাপতি নাজমুল হাসান।</p>
            <p class="readmore"><a href="index.php/sports/details.php?news=khela&id=9">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
	
    <div class="column">
      <div class="holder"><!-- <a href="#"><img src="images/demo/300x250.gif" alt="" /></a> -->
	  <h2 style="color:#059BD8; background-color:#EFEFEF; font-weight:bold;">আজকের ফিচার ভিডিও &raquo;</h2>
</div>
      <div class="holder">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="250" id="FLVPlayer">
          <param name="movie" value="FLVPlayer_Progressive.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="scale" value="noscale" />
          <param name="salign" value="lt" />
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=diu&amp;autoPlay=false&amp;autoRewind=true" />
          <param name="swfversion" value="8,0,0,0" />
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="300" height="250">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="scale" value="noscale" />
            <param name="salign" value="lt" />
            <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=diu&amp;autoPlay=false&amp;autoRewind=true" />
            <param name="swfversion" value="8,0,0,0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
            <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>

<!-- Politics to Education -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
      <h2><a href="index.php/politics/default.php">রাজনীতি &raquo; </a></h2>
      <ul>
	          <li><a href="index.php/national/details.php?news=jatiyo&id=20">একাত্তরের শহীদদের প্রতি খালেদা জিয়ার শ্রদ্ধা</a></li>
	          <li><a href="index.php/politics/details.php?news=rajniti&id=9">বিশ্বজিতের অন্যতম খুনি ছাত্রলীগ ক্যাডার চাপাতি শাকিল গ্রেফতার হার্ট অ্যাটাকে শাকিলের বাবার মৃত্যু,</a></li>
	          <li><a href="index.php/national/details.php?news=jatiyo&id=15">বিশ্বজিত হত্যা সরকারের ভূমিকা নিয়ে প্রশ্ন মেননের</a></li>
	          </li>
      </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/economics/default.php">অর্থনীতি &raquo; </a></h2>
      <ul>
                <li><a href="index.php/economics/details.php?news=orthoniti&id=5">শেষ হলো বাটেক্সপো, অংশগ্রহণকারীরা হতাশ</a></li>
	          <li><a href="index.php/economics/details.php?news=orthoniti&id=6">আন্দোলনে শরিক হোন, ব্যবসায়ীদের খালেদা</a></li>
	         
      </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/feature/default.php">ফিচার &raquo; </a></h2>
      <ul>
                <li><a href="index.php/feature/details.php?news=feature&id=2">দু’দশক ধরে অচল ডাকসু : বৃহত্তর ছাত্রঐক্য ছাড়া সমাধান নেই</a></li>
	          
      </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/literature/default.php">শিল্প-সাহিত্য &raquo; </a></h2>
      <ul>
                <li><a href="index.php/literature/details.php?news=shilposahitto&id=5">জাতীয় প্রেস ক্লাবে কবিতার ছন্দে বিজয় দিবস : বাংলাদেশের স্বাধীনতা আমাদের শ্রেষ্ঠ অর্জন</a></li>
	          
      </ul>
    </div>
    <div class="footbox last">
      <h2><a href="index.php/education/default.php">শিক্ষা  &raquo; </a></h2>
      <ul>
                <li><a href="index.php/education/details.php?news=shikha&id=7">পবিপ্রবির ক্যাম্পাস জুড়ে মুক্তিযুদ্ধের ভাস্কর্য</a></li>
	          <li><a href="index.php/education/details.php?news=shikha&id=6">ঢাবির ডিন নির্বাচনে নীলদলের নিরঙ্কুশ জয়</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>

﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="https://www.facebook.com/Prothom-Sokal-1533565370289522/?skip_nax_wizard=true"><img src="images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="https://feedburner.google.com/fb/a/myfeeds"><img src="images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="https://twitter.com/"><img src="images/twitter.gif" alt="" /><span>Twitter</span></a></li>
    </ul>
	
	<!-- Footer For Social Newsletter Signup -->
    <div id="newsletter">
      <h2>খবর এর জন্য রেজিশট্রেশন করুন !</h2>
      <p>দয়া করে নিচে আপনার নাম ও ইমেইল ঠিকানা প্রবেশ করান</p>
	  <div id="form_message"></div>
      <form method="POST"> 
        <fieldset>
          <legend>Digital Newsletter</legend>
          <div class="fl_left">
            <input type="text" name="username" id="username"  placeholder="আপনার নাম&hellip;"/>
            <input type="text" name="email" id="email"  placeholder="আপনার ইমেইল ঠিকানা&hellip;"/>
		  </div>
          <div class="fl_right">
            <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p>রেজিশট্রেশন বাতিল করতে  <a href="#">এখানে ক্লিক করুন &raquo;</a>.</p>
    </div>
    <br class="clear" />
  </div>
</div>


<!-- Footer For Copyright Related Information -->
<div class="wrapper colNew1">
  <div id="copyright">
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="default.php" class="samrat_blue">প্রথম সকাল</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে -<span class="samrat_blue"><a href="index.php/binary_team/demo5.html">বাইনারি টীম</a></span></p>
    <br class="clear" />
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>