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
	<li><a href="../bangla_help.php"><img class="noBangla" src="images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFFFF">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="../contactUs.php"><font color="#FFFFFF">যোগাযোগ</font></a></li>
		
		    </ul>
    <a href="admin.php"><font color="#FFFFFF">| সম্পাদকীয় প্যানেল</font></a><br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="../../default.php"><strong>প্রথম সকাল</strong></a></h1>
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
				
        <li><a href="../../default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="../national/default.php">জাতীয়</a></li>
		
				
        <li><a href="../international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="../sports/default.php">খেলা</a></li>
		
				
        <li><a href="../entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="../technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../education/default.php">শিক্ষা</a></li>
		
		<li><a href="diu/default.php">ডি আই ইউ ৩য় সমাবর্তন </a></li>
		
		<li><a href="../binary_team/demo5.html">ডি আই ইউ বাইনারি টীম</a></li>
		
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
 
 <div class="wrapper">
  <div id="breadcrumb">
      <ul>
      <li><a href="../../default.php">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="default.php">ডি আই ইউ ৩য় সমাবর্তন</a></li>
    </ul>
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
          <li><img src="images/fan/images.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন  </h2>
              <p> ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা।<br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i1.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন—</h2>
              <p> ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা।<br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i2.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন —</h2>
              <p> ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা।<br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i3.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন —</h2>
              <p> ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা।<br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i4.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন — </h2>
              <p>  ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা। <br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i5.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন—</h2>
              <p> ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা। <br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>
          <li><img src="images/fan/i.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ডি আই ইউ ৩য় সমাবর্তন —</h2>
              <p>  ডি আই ইউ ৩য় সমাবর্তেন  ছাএ ছাএীদের মিলন মেলা। <br />
                <a href="#">   ছাএ ছাএীদের  সম্মান প্রদান&raquo;</a></p>
            </div>
          </li>		                                   
        </ul>
		
      </div>	  	  
    </div>
	
	  <div class="column">
      <div class="holder"><!-- <a href="#"><img src="images/demo/300x250.gif" alt="" /></a> -->
	  <h2 style="color:#059BD8; background-color:#EFEFEF; font-weight:bold;"> ডি আই ইউ ৩য় সমাবর্তন এর ভিডিও &raquo;</h2>
</div>
      <div class="holder">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="250" id="FLVPlayer">
          <param name="movie" value="FLVPlayer_Progressive.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="scale" value="noscale" />
          <param name="salign" value="lt" />
          <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=ra&amp;autoPlay=false&amp;autoRewind=true" />
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
            <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=ra&amp;autoPlay=false&amp;autoRewind=true" />
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

  
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="index.php/national/default.php"></a></h2>
	        <img src="newsImages/abul-sm20120722150623.jpg" width="100" height="100" alt="সৈয়দ আবুল হোসেনের পদত্যাগ" />
      <p><strong><a href="http://www.diu.ac/message/dr-a-b-m-mafizul-islam-patwari/">"ডঃএ.বি.এম. মফিজুল ইসলাম পাটোয়ারী" <br/>ঢাকা ইন্টারন্যাশনাল ইউনিভার্সিটির প্রতিষ্ঠাতা</a></strong></p>
      <p>
	 তিনি ঢাকা বিশ্ববিদ্যালয়,  আইন বিভাগের অধ্যাপক ছিলেন। তিনি আইন বিসয়ে  20 টিরও বেশি বই  লিখেন। গবেষক হিসেবে তিনি লন্ডন স্কুল অফ ইকোনমিক্স এ মানবাধিকার কাজ করে  ছিলেন।	  </p>
    </div>
	
    <div class="fl_right">
      <h2><a href="index.php/international/default.php"></a></h2>
            <img src="newsImages/fish4ff48cf976135-untitled-11.jpg" width="100" height="100" alt="যুক্তরাষ্ট্রে শোকের ছায়া, কাঁদলেন ওবামা" />
      <p><strong><a href="http://www.diu.ac/message/professor-dr-k-m-mohsin/">অধ্যাপক ডাঃ কে এম মহসীন
                      (উপাচার্য)</a></strong></p>
      <p>ঢাকা ইন্টারন্যাশনাল ইউনিভার্সিটির ৩য় সমাবর্তনে সবার প্রতি রইল অনেক সুভকামনা।  তুমরা সবাই সফল হও এই আসা রইল।	  
	   </p>
    </div>
	
    <br class="clear" />
	
    <div class="fl_left">
      <h2><a href="index.php/technology/default.php"></a></h2>
            <img src="newsImages/0-internet.jpg" width="100" height="100" alt="কম্পিউটার" />
      <p><strong><a href="http://www.diu.ac/cse/?message=professor-dr-hafiz-md-hasan-babu">প্রফেসর ড হাফিজ মো. হাসান বাবু
  উপদেষ্টা (সিএসই)</a></strong></p>
      <p>
	          ঢাকা ইন্টারন্যাশনাল ইউনিভার্সিটির ৩য় সমাবর্তনে সবার প্রতি রইল অনেক সুভকামনা।  তুমরা সবাই সফল হও এই আসা রইল। </p>
    </div>
    <div class="fl_right">
      <h2><a href="index.php/entertainment/default.php"></a></h2>
            <img src="newsImages/katrina-kaif1.jpg" width="100" height="100" alt=/>
      <p><strong><a href="http://www.diu.ac/cse/?message=a-t-m-mahbubur-rahman-sarker">ডঃ এ.টি.এম. মাহবুবুর রহমান সরকার
                                  অধ্যাপক ও চেয়ারম্যান (সিএসই)</a></strong></p>
      <p>
	  ঢাকা ইন্টারন্যাশনাল ইউনিভার্সিটির ৩য় সমাবর্তনে সবার প্রতি রইল অনেক সুভকামনা।  তুমরা সবাই সফল হও এই আসা রইল। </p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- Sports Part -->


<!-- Politics to Education -->
<div class="wrapper">
</div>

﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="https://www.facebook.com/Prothom-Sokal-1533565370289522/?skip_nax_wizard=true"><img src="../../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="https://feedburner.google.com/fb/a/myfeeds"><img src="../../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="https://twitter.com/"><img src="../../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="#" class="samrat_blue">প্রথম সকাল</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে -<span class="samrat_blue"><a href="#">বাইনারি টীম</a></span></p>
    <br class="clear" />
  </div>
</div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
</script>
</body>
</html>