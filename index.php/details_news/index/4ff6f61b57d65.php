<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>সংবাদ ৭১</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../../../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.validate.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="../../../scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="../../../scripts/phonetic_int.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#newsletter_go").click( 
  
    function(){
    
        var username=$("#username").val();
        var mailAddress=$("#email").val();
      
        $.ajax({
        type: "POST",
        url: "../../register_sub/post_action",
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
    <p>ফোন নম্বর : ০১৭৩১ ২৯৩৯৬০ | ই মেইল : sopnilsamrat@yahoo.com</p>
    <ul>
	<li><a href="../../bangla_help"><img class="noBangla" src="../../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="../../contactUs.php">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="../../../default.php"><strong>সংবাদ ৭১</strong></a></h1>
      <p>লাইভ বাংলা খবর - ২৪ ঘন্টা</p>
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
				<li>
		<a href="500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a> &nbsp;
		</li> 
				<li>
		<a href="50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
		</li> 
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
				
        <li><a href="../../../default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="../../national/default.php">জাতীয়</a></li>
		
				
        <li><a href="../../international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../../politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="../../sports/default.php">খেলা</a></li>
		
				
        <li><a href="../../entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="../../technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../../economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../../feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../../literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../../education/default.php">শিক্ষা</a></li>
		
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
  <div id="breadcrumb">
      <ul>
      <li><a href="../../../default.php">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="../../education/default.php">শিক্ষা</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">২০১২ সালের জুনিয়র স্কুল সার্টিফিকেট পরীক্ষার প্রস্তুতি</span></h1>
	  <p>
		মোহাম্মদ আক্তার উজ জামান<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	  	  <div style="font-size:12pt;">
	  প্রভাষক, রূপনগর মডেল স্কুল ও কলেজ, ঢাকা<br><br>অধ্যায়-১৯ <br>প্রিয় শিক্ষার্থী, আজ সাধারণ বিজ্ঞান বিষয়ের ১৯ নম্বর অধ্যায় থেকে সৃজনশীল পদ্ধতির একটি নমুনা প্রশ্নোত্তর আলোচনা করব।<br># নিচের উদ্দীপকটি পড়ে প্রশ্নগুলোর উত্তর দাও।<br>উদ্ভিদ
 সূর্যশক্তিকে রাসায়নিক শক্তিতে রূপান্তরিত করে মূল, কাণ্ড ও পাতায় জমা 
রাখে। এ জন্য একটি বিশেষ গ্যাসের প্রয়োজন হয়। মানুষ বিভিন্ন প্রয়োজন মেটাতে
 এই গ্যাস অতিরিক্ত পরিমাণে তৈরি করছে, যা প্রাণীর জন্য ক্ষতিকর।<br>ক. প্রাকৃতিক সম্পদ কাকে বলে?<br>খ. কয়লাকে কেন নবায়ন অযোগ্য সম্পদ বলা হয়?<br>গ. উদ্দীপকে বর্ণিত শক্তির রূপান্তর উদ্ভিদ কীভাবে ঘটায়? ব্যাখ্যা করো।<br>ঘ. বর্ণিত বিশেষ গ্যাসটি কখন প্রাণিকুলের জন্য ক্ষতিকর হয়ে দাঁড়ায়? বিশ্লেষণ করো।<br>উত্তর: ক. প্রকৃতি থেকে আমরা যা কিছু পাই সেগুলোকে প্রাকৃতিক সম্পদ বলে। যেমন: গ্যাস, তেল, কয়লা ইত্যাদি।<br>উত্তর:
 খ. যেসব সম্পদ ব্যবহারের পর শেষ হয়ে যায়, নতুন করে ব্যবহার করা যায় না, 
তাকে নবায়ন অযোগ্য সম্পদ বলে। কয়লা খনি থেকে উত্তোলন করে ব্যবহার করে ফেললে
 তা শেষ হয়ে যায়। এ জন্য কয়লাকে নবায়ন অযোগ্য সম্পদ বলা হয়।<br>উত্তর: গ. 
উদ্ভিদ সালোকসংশ্লেষণ প্রক্রিয়ায় উদ্দীপকে বর্ণিত রূপান্তর ঘটায়। সবুজ 
উদ্ভিদে ক্লোরোফিল থাকে। সবুজ উদ্ভিদ সূর্যের আলোর সাহায্যে পানি ও কার্বন 
ডাই-অক্সাইডের রাসায়নিক বিক্রিয়ার ফলে শর্করা জাতীয় খাদ্য উৎপন্ন করে। একে 
সালোকসংশ্লেষণ বলে। এভাবে সূর্য থেকে প্রাপ্ত শক্তি রাসায়নিক শক্তিতে 
রূপান্তরিত হয়ে উদ্ভিদের মূল, কাণ্ড, ফল ইত্যাদি অঙ্গে জমা থাকে।<br><br>উত্তর:
 ঘ. বর্ণিত বিশেষ গ্যাসটি কার্বন ডাই-অক্সাইড। কার্বন ডাই-অক্সাইড গ্যাস 
প্রাণীর জন্য ক্ষতিকর। পৃথিবীর জনসংখ্যা আশঙ্কাজনকভাবে বৃদ্ধি পাচ্ছে। 
জনসংখ্যা বৃদ্ধির সঙ্গে সঙ্গে বাতাসে কার্বন ডাই-অক্সাইড গ্যাস নির্গমনের 
পরিমাণও বাড়ছে। বাড়তি মানুষের আবাসস্থল তৈরির জন্য ও বাড়তি ফসল উৎপাদনের 
জন্য মানুষ বন উজাড় করে ফেলছে। কলকারখানা তৈরির ফলে কারখানা থেকে জ্বালানি 
পুড়ে বর্জ্য পদার্থ হিসেবে কার্বন ডাই-অক্সাইড নির্গত হচ্ছে। বন উজাড় করার 
ফলে এ অতিরিক্ত কার্বন ডাই-অক্সাইড উদ্ভিদের খাদ্য তৈরিতে ব্যবহূত হচ্ছে 
না। ফলে দিন দিন কার্বন ডাই-অক্সাইডের পরিমাণ বেড়েই যাচ্ছে। এই কার্বন 
ডাই-অক্সাইড প্রাণিকুলের জন্য ক্ষতির কারণ হয়ে দাঁড়ায়।	  </div>
	  <!-- Comments Bars, To Show Comments -->
	  <br/><br/><hr/>
      <div id="comments">
        <h2>পাঠকের মন্তব্যঃ</h2>
				<ul class="commentlist">
		<li class='comment_odd'><span style='font-size:13pt; color:maroon;'> এই খবরটিতে এখন পর্যন্ত কোন পাঠক মন্তব্য করেনি </span></li>        </ul>
      </div>

	  <!-- Comments Bars, To Write A Comments -->
    <h2>আপনার মন্তব্য লিখুন</h2>
	<!-- Container for total comment area -->
      <div id="respond">
        <form id="commentForm" action="http://www.kadirrazu.info/projects/livenews/index.php/comments" method="post">
			<!-- Left part of comment area -->
			<div id="nameMail">
				<p>
					<input type="text" id="commentName" name="commentName" class="commentName"  value="" size="22" />
					<label for="name">নাম (আবশ্যক)</label>
				</p>
				<p>
					<input type="text" id="commentMail" name="commentMail"  class="commentMail" size="22" />
					<label for="email">ইমেইল ঠিকানা (আবশ্যক)</label>
				</p>
		    </div>
		  
			<!-- Right part of comment area -->
			<div id="commentKB">
				<fieldset>
				<legend>কিবোর্ড মোড</legend>
					<table border="0" cellpadding="0">
					<tr>
						<td><input type="radio" id="radio" name="layoutGrp" onclick="switched=false;"  value="probh" checked="checked"/><label>ফনেটিক</label></td>
						<td><input type="radio" id="radio" name="layoutGrp"  onclick="switched=true;" value="english"/><label>English</label></td>
					</tr>
					</table>
				</fieldset>
		   </div> 
          <p>
            <textarea name="commentBody" id="commentBody" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
			<input type="hidden" name="newsID" value="4ff6f61b57d65">
          </p>
          <p>
            <input name="submit" type="submit" id="submitForm" value="মন্তব্য প্রদান করুন " />
            &nbsp;
            <input name="reset" type="reset" id="submitForm" tabindex="5" value="ফর্ম রিসেট করুন " />
          </p>
        </form>
      </div>  
	  
	  <script>makePhoneticEditor('commentName'); //pass the textarea Id</script>
	 <script>makePhoneticEditor('commentBody'); //pass the textarea Id</script>
    </div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#commentForm").validate({
				rules: {
					commentName: "required",// simple rule, converted to {required:true}
					commentMail: {// compound rule
						required: true,
						email: true
					},
					commentBody: {
						required: true
					}
				},
				messages: {
				comment: "Please enter your comment."
				}
			});
		});
	</script>	
	
	<!--Secondary Navigation Of Related News -->
	    <div class="column">
	<h4><a href="../../education/default.php">শিক্ষা</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6f691b7f0a.php">প্রাথমিক শিক্ষা সমাপনী পরীক্ষার প্রস্তুতি</a></li>
                  </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="#"><img src="../../../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="../../../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="../../../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.php">সংবাদ ৭১</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumar dey"> সম্রাট কুমার দে </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>