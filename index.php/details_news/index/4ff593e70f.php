<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>লাইভ নিউজ ২৪</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
    <p>ফোন নম্বর : ০১৯১১ ৬৮৩৭০৬ | ই মেইল : razu@ymail.com</p>
    <ul>
	<li><a href="../../bangla_help"><img class="noBangla" src="../../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="../../contactUs">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="../../../default.htm"><strong>লাইভ নিউজ ২৪</strong></a></h1>
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
		<a href="500c69ac1ddee">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a> &nbsp;
		</li> 
				<li>
		<a href="50038777991a3">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="500386f256e44">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="5003866e9edac">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
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
				
        <li><a href="../../../default.htm">প্রচ্ছদ</a></li>
		
				
        <li><a href="../../national/default.htm">জাতীয়</a></li>
		
				
        <li><a href="../../international/default.htm">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../../politics/default.htm">রাজনীতি</a></li>
		
				
        <li><a href="../../sports/default.htm">খেলা</a></li>
		
				
        <li><a href="../../entertainment/default.htm">বিনোদন</a></li>
		
				
        <li><a href="../../technology/default.htm">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../../economics/default.htm">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../../feature/default.htm">ফিচার</a></li>
		
				
        <li><a href="../../literature/default.htm">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../../education/default.htm">শিক্ষা</a></li>
		
		      </ul>
    </div>
    <div id="search">
      <form action="http://www.kadirrazu.info/projects/livenews/index.php/new_search" method="post">
          <legend>Site Search</legend>
          <input type="text" id="searchTag" name="searchTag" placeholder="সার্চ কিওয়ার্ড লিখুন&hellip;" />
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
      <li><a href="../../../default.htm">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="../../national/default.htm">জাতীয়</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">৩ প্রকৌশলীর অস্বীকার
‘লাভালিনের প্রশিক্ষণে অংশ নিতে কানাডায় যাইনি’</span></h1>
	  <p>
		আদিত্য আরাফাত<br/>সিনিয়র করেসপন্ডেন্ট<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/padma-bridge-sm20120704154123.jpg" alt="পদ্মা সেতু" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <strong>ঢাকা:</strong> পদ্মাসেতুর পরামর্শক নিয়োগের বিষয়ে সেতু বিভাগের 
তিন প্রকৌশলীকে জিজ্ঞাসাবাদ করে সন্তুষ্ট হতে পারেনি দুর্নীতি দমন কমিশন 
(দুদক)। দুদকের তদন্ত কর্মকর্তাদের অনেক প্রশ্নের উত্তর এড়িয়ে গেছেন ৩ 
প্রকৌশলী।<br><br>দুদকের কাছে অভিযোগ রয়েছে, তত্ত্বাবধায়ক প্রকৌশলী লিয়াকত 
আলী, সহকারী প্রকৌশলী আবুল কালাম আজাদ ও সহকারী প্রকৌশলী মো. গোলাম মর্তুজা
 গত বছর এসএনসি লাভালিনের একটি প্রশিক্ষণে অংশ নিতে দুই সপ্তাহের জন্য 
কানাডায় যান।<br><br>বুধবার সকাল ১১টায় দুদকের রাজধানীর সেগুনবাগিচার 
প্রধান কার্যালয়ে তাদের জিজ্ঞাসাবাদ শুরু হয়। দুদকের উপ-পরিচালক মীর জয়নুল
 আবেদীন শিবলি ও মির্জা জাহিদুল আলম ৩ ঘণ্টা তাদের জিজ্ঞাসাবাদ করেছেন।<br><br>সূত্র
 জানায়, এ তিন কর্মকর্তাকে দুদকের অনুসন্ধান কমিটি প্রশ্ন করে-‘‘পদ্মা 
সেতুর পরামর্শক নিয়োগের আগে আপনারা কানাডায় এসএনসি লাভালিনের প্রশিক্ষনে 
অংশ নিয়েছেন কি-না?’’<br><br>প্রশ্নের জবাবে দুদকের অনুসন্ধান কমিটিকে এ ৩ প্রকৌশলী জানান, তারা এসএনসি লাভালিনের কোনো প্রশিক্ষনে অংশ নিতে কানাডায় যাননি।<br><br>দুদক
 এ কথার উত্তরে প্রশ্ন করে- ‘‘তাহলে গত বছর কানাডায় যাননি?’’ অনুসন্ধান 
কমিটির এ প্রশ্নের উত্তরে তিনজনই জানান, তারা কানাডায় গিয়েছেন। দুই সপ্তাহ 
তারা সেখানে ছিলেন বলেও দুদককে জানান।<br><br>এদিকে একটি সূত্র জানায়, দুদক
 মনে করছে, এ তিন প্রকৌশলী পরিকল্পিতভাবে একই ধারায় উত্তর দিয়েছেন। জানা 
গেছে, এ তিন প্রকৌশলীর কানাডায় যাওয়ার ভিসা, আনুষঙ্গিক কাগজপত্র খতিয়ে 
দেখছে দুদকের অনুসন্ধান কমিটি। কেন তারা ২ সপ্তাহ কানাডায় ছিলেন, এ দুই 
সপ্তাহে কোথায় কি করেছেন, তা অনুসন্ধান করছে দুদক।<br>&nbsp;<br>উল্লেখ্য, গত ৩০
 জুন বহু কাঙ্ক্ষিত পদ্মাসেতু প্রকল্পে অর্থায়ন বাতিল করে বিশ্বব্যাংক। 
এতে বিশ্বব্যাংকের ১২০ কোটি মার্কিন ডলার দেওয়ার কথা ছিল।<br><br>এর আগে 
পদ্মাসেতুর অর্থ যোগানদাতা বিশ্বব্যাংক দুর্নীতির অভিযোগ তুলে ১১ অক্টোবর 
তাদের অর্থায়ন স্থগিত করে। এ নিয়ে সারা দেশে তোলপাড় সৃষ্টি হয়। 
বিতর্কের মুখে পড়েন সাবেক যোগাযোগমন্ত্রী সৈয়দ আবুল হোসেন।<br><br>বিশ্বব্যাংকের
 অভিযোগ, সেতু নির্মাণে ঠিকাদারি প্রতিষ্ঠান নিয়োগে প্রাক-যোগ্যতা যাচাই 
প্রক্রিয়ায এবং পদ্মাসেতুর পরামর্শক নিয়োগের প্রক্রিয়ায় অনিয়ম থাকতে 
পারে। দুর্নীতির সঙ্গে সৈয়দ আবুল হোসেন ও তার ব্যবসা প্রতিষ্ঠান সাঁকো 
ইন্টারন্যাশনালের সম্পৃক্ততার অভিযোগও এতে তুলে ধরা হয়। সৈয়দ আবুল হোসেন 
নিজেকে নির্দোষ দাবি করেন। সরকারের পক্ষ থেকেও দুর্নীতির অভিযোগ অস্বীকার 
করা হয়।<br><br>গত ২ ফেব্রুয়ারি দুদকও জানায়, মূল সেতু নির্মাণে পরামর্শক প্রতিষ্ঠান নির্বাচনে কোনো রকম দুর্নীতি হয়নি।<br><br>পদ্মাসেতু প্রকল্পে ড. জামিলুর রেজা চৌধুরীর নেতৃত্বে একটি মূল্যায়ন কমিটি পরামর্শক হিসেবে পাঁচটি প্রতিষ্ঠানের নাম সুপারিশ করেছিল।<br><br>এর
 প্রথমটি ছিল এসএনসি লাভালিন। অন্যগুলো হলো- যুক্তরাজ্যের প্রতিষ্ঠান 
হালক্রো গ্রুপ ইউকে, নিউজিল্যান্ডের প্রতিষ্ঠান একম অ্যান্ড এজেডএল, 
জাপানের ওরিয়েন্টাল কনসালট্যান্ট কোম্পানি লিমিটেড এবং যুক্তরাজ্য ও 
নেদারল্যান্ডসের জয়েন্ট ভেনচার কোম্পানি হাই পয়েন্ট রেলেন্ড।<br><br>এর 
মধ্যে এসএনসি লাভালিনকে সর্বনিম্ন দরদাতা হিসেবে বিবেচনায় নিয়ে অনুমোদনের
 জন্য বিশ্বব্যাংকের কাছে পাঠানো হয়। এরপরই এ নিয়ে দুর্নীতির অভিযোগ ওঠে 
এবং বিশ্বব্যাংক ১২০ কোটি ডলার সহায়তা স্থগিত করে।<br><br>চলতি বছরের এপ্রিলে বিশ্বব্যাংক পরামর্শক নিয়োগে অনিয়মের অভিযোগ তুললে এ নিয়ে দুদক তদন্ত শুরু করে।<br><br>পরামর্শক
 নিয়োগে দুর্নীতির তদন্ত কমিটি বিশ্বব্যাংকের একটি প্রতিবেদনে উল্লেখিত 
অভিযোগের ভিত্তিতেই দুর্নীতির অভিযোগ পেয়ে আবার তদন্ত শুরু করেছে দুদক। এর
 অংশ হিসেবে গত মাসে সাবেক পররাষ্ট্র প্রতিমন্ত্রী আবুল হাসান চৌধুরী ও 
জাতীয় সংসদের হুইপ নূর-ই-আলম চৌধুরী লিটনের ভাই নিক্সন চৌধুরীকে 
জিজ্ঞাসাবাদ করেছে দুদক। গত সোমবার এসএনসি লাভালিনের বাংলাদেশ প্রতিনিধি 
জিয়াউল হককে জিজ্ঞাসাবাদ করেছে । দুদকের জিজ্ঞাসাবাদে তিনজনের কেউ ঘুষ 
গ্রহণ করতে রাজি, উদ্যোগী বা ঘুষ গ্রহণ করেছেন বলে স্বীকার করেননি।<br><br>দুদকের
 তদন্ত শেষ করার আগেই বিশ্বব্যাংক গত শনিবার ঋণচুক্তি বাতিল করে। দুদকের 
পক্ষ থেকে এ ঋণচুক্তি বাতিলকে অন্যায্য ও অবিবেচনাপ্রসূত বলে উল্লেখ করেছেন
 কমিশনের চেয়ারম্যান গোলাম রহমান। তবে বিশ্বব্যাংক ঋণ বাতিল করলেও 
পদ্মাসেতুর পরামর্শক নিয়োগ বিষয়ে দুদকের অনুসন্ধান চলবে বলে জানান তিনি।	  </div>
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
			<input type="hidden" name="newsID" value="4ff593e70f">
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
	<h4><a href="../../national/default.htm">জাতীয়</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="500c69ac1ddee">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a></li>
                    <li><a href="50038777991a3">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a></li>
                    <li><a href="500386f256e44">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a></li>
                    <li><a href="5003866e9edac">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a></li>
                    <li><a href="4ff6de94a86f1">হিউম্যান রাইটসের প্রতিবেদন আন্তর্জাতিক ষড়যন্ত্র</a></li>
                    <li><a href="4ff6de0e94c98">র‌্যাবের সদস্যকে ফেরত দিয়েছে বিএসএফ</a></li>
                    <li><a href="4ff6dd92175c7">মহাসড়কের বেহাল দশায় যোগাযোগমন্ত্রীর ক্ষোভ</a></li>
                    <li><a href="4ff6dd1cd2447">পাহাড়িদের ভূমির অধিকার রক্ষা করব</a></li>
                    <li><a href="4ff68f0fa48d9">৩৯৮ একর জমি বসুন্ধরার দখলমুক্ত করল পিডিবি</a></li>
                    <li><a href="4ff68e36dd47d">নবীনগরে সড়ক দুর্ঘটনায় একজন নিহত</a></li>
                    <li><a href="4ff68c7de5883">‘প্রয়োজনে এক বেলা বাজার করব না’</a></li>
                    <li><a href="4ff68ad60fe01">পদ্মা সেতু নির্মাণে বিনিয়োগে আগ্রহী বিআইএ</a></li>
                    <li><a href="4ff68a131387f">র‌্যাব রাখা-না রাখা আমাদের ব্যাপার</a></li>
                    <li><a href="4ff5940039">নিতুন কুণ্ডুর স্বপ্নের অটবি এখন দাদা-দিদিতে বিভক্ত!</a></li>
                    <li><a href="4ff593f56e">ঢাকার যানজট মারাত্মক অবস্থা ধারণ করেছে: প্রধানমন্ত্রী</a></li>
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
      <p>দয়া করে নিচে আপনার নাম ও ইমেইল ঠিকানা প্রবেশ করান</p>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">লাইভ নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="Md. Abdul Kadir Razu"> মোঃ আব্দুল কাদির রাজু</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>