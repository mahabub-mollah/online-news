<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>   প্রথম সকাল</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.validate.js"></script>
<script type="text/javascript" src="../scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="../scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="../scripts/phonetic_int.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#newsletter_go").click( 
  
    function(){
    
        var username=$("#username").val();
        var mailAddress=$("#email").val();
      
        $.ajax({
        type: "POST",
        url: "register_sub/post_action",
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
 </style>
</head>
<!-- Header Section Ends Here  -->

<!-- Header Contact and Short Menu Start Here  -->
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <p></p>
    <ul>
	<li><a href="bangla_help"><img class="noBangla" src="../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFFFF">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="contactUs.php"><font color="#FFFFFF">যোগাযোগ</font></a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="/binary/default.php"><strong>   প্রথম সকাল</strong></a></h1>
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
	  <marquee behavior="scroll" direction="left" scrollamount="1" scrolldelay="15" truespeed="" onmouseover="this.stop()" onmouseout="this.start()"><li>
		<?php
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
				
        <li><a href="../default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="national/default.php">জাতীয়</a></li>
		
				
        <li><a href="international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="sports/default.php">খেলা</a></li>
		
				
        <li><a href="entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="feature/default.php">ফিচার</a></li>
		
				
        <li><a href="literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="education/default.php">শিক্ষা</a></li>
			<li><a href="diu/default.php">ডি আই ইউ ৩য় সমাবর্তন </a></li>
			<li><a href="binary_team/demo5.html">ডি আই ইউ বাইনারি টীম</a></li>
		
		      </ul>
    </div>
    <div id="search">
      <form action="http://www.kadirrazu.info/projects/livenews/index.php/new_search" method="post">
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
﻿<!-- Bread Crumb -->
<div class="wrapper">

</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
		<!-- Font Download Links -->
		<h4><b><u>বাংলা ফন্ট ডাউনলোড </u></b></h4>
		এই সাইটটি 'solaimanLipi' এবং 'SiyamRupali' বাংলা ফন্ট সাপোর্ট করে.<br /><br />
		আপনি নিচের লিঙ্ক থেকে আপনার প্রয়োজনীয়টি ডাউনলোড করে নিতে পারেন<br />
		<ol type="1" class="helpTopics">
			<li>
				<b> সলাইমান লিপি ফন্ট ডাউনলোড লিঙ্ক : </b>&nbsp;<a href="../../../../files.ekushey.org/Ekushey_OpenType_Bangla_Fonts/SolaimanLipi_20-04-07.ttf" target="_blank" title="Font"> From External Mirror</a>&nbsp;&#124;&nbsp;
				<a href="../banglaFonts/SolaimanLipi_20-04-07.ttf" target="_blank" title="Font"> আমদের সাইট হতে</a>
			</li>
			<li>
				<b>সিয়াম রুপালি ফন্ট ডাউনলোড </b>&nbsp;<a href="../../../../files.ekushey.org/Ekushey_OpenType_Bangla_Fonts/Rupali_01-02-2007.ttf" target="_blank" title="Font"> From External Mirror</a>&nbsp;&#124;&nbsp;
				<a href="../banglaFonts/Siyamrupali.ttf" target="_blank" title="Font"> আমদের সাইট হতে</a>
			</li>
		</ol>
		<br />
		<b>N.B.</b>: After download the font just place /paste the font at <b>C:\Windows\Fonts</b> folder.<br /><br />
	
	  <!-- Bangla Help For Opera Mini -->
	  <br /><br />
      <h4>অপেরা মিনির মাধ্যমে বাংলা দেখুন আপনার মোবাইল-এ</u></b></h4>
	  <br/>
	  </h1>বাংলা দেখার জন্য মোবাইল এ অপেরা মিনি ব্যাবহার করুন.নিচের পদ্ধতি অনুসরন করুন
		<ol type="1" class="helpTopics">
			<li>First download <b>Opera mini</b> from the link: <a href="../../../../www.opera.com/mobile/download/versions/default.htm" target="_blank" title="Opera mini download">http://www.opera.com/mobile/download/versions/</a>
			</li> <li>Open your <b>opera mini</b> from your mobile</li> 
			<li>Write <b style="color:#FF0000;">opera:config</b> into the <b>address bar</b> then enter</li> 
			<li>Find out the <b>option</b> >></li> <li>Choose <b>Use Bitmap font for complex script</b></li> 
			<li>Make it yes</li> <li>Then <b>"Save"</b> exit.</li> 
			<li>Visit <a href="../default.php">Our Site</a> and find Bangla in your mobile</li>
		</ol>			

    </div>
	
	
	<!--Secondary Navigation Of Related News -->
	  <!--  <div class="column">
	<h4><a href="default.php">প্রথম সকাল </a> <font color="#FF0000">এর সর্বশেষ </font> সংবাদ সমুহ </h4>
      <div class="subnav"> <?php include('latest.php');?>       
        
      </div>
    </div>-->
    <br class="clear" />
  </div>
</div>
﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="https://www.facebook.com/Prothom-Sokal-1533565370289522/?skip_nax_wizard=true"><img src="../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="https://feedburner.google.com/fb/a/myfeeds"><img src="../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="https://twitter.com/"><img src="../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="#"><strong>প্রথম সকাল</strong></a><a href="../default.htm"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="#"> বাইনারি টীম
    </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>