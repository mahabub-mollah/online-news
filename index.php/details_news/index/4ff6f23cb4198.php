﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>লাইভ নিউজ ২৪</title>
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
    <p>ফোন নম্বর : ০৭৩১ ২৯৩৯৬০ | ই মেইল : sopnilsamrat@yahoo.com</p>
    <ul>
	<li><a href="../../bangla_help.php"><img class="noBangla" src="../../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFFFF">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="../../contactUs.php"><font color="#FFFFFF">যোগাযোগ</font></a></li>
		
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
      <li class="current"><a href="../../technology/default.php">তথ্যপ্রযুক্তি</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">৯ জুলাই ইন্টারনেট বিপর্যয়ের ঝুঁকিতে আড়াই লাখ কম্পিউটার</span></h1>
	  <p>
		অনলাইন ডেস্ক<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/0-internet.jpg" alt="কম্পিউটার" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  সারাবিশ্বে ৯ জুলাই আড়াই লাখেরও বেশি কম্পিউটারে ইন্টারনেট সংযোগ বন্ধ হয়ে 
যেতে পারে। পিসি ও ম্যাক কম্পিউটারের জন্য ২০০৭ সালে ছড়িয়ে পড়া ‘ডিএনএস 
চেঞ্জার ম্যালওয়ার’ নামের এক ট্রোজান ভাইরাসের কারণে ইন্টারনেট থেকে 
বিচ্ছিন্ন হয়ে পড়তে পারেন ব্যবহারকারীরা। এক খবরে বার্তা সংস্থা রয়টার্স এ 
তথ্য জানিয়েছে।<br>অনুসন্ধান সেবাদাতা প্রতিষ্ঠান গুগল ইন্টারনেট 
ব্যবহারকারীদের জন্য সতর্ক বার্তা জারি করেছে, চলতি বছরের ৯ জুলাই সারা 
বিশ্বের ইন্টারনেট ব্যবস্থায় বিপর্যয় ঘটতে পারে।<br>কম্পিউটার নিরাপত্তা 
বিশ্লেষকেরা জানিয়েছেন, ‘ডিএনএস চেঞ্জার’ নামের এই ট্রোজান মূলত আক্রান্ত 
কম্পিউটারের ইন্টারনেট সেটিংস পরিবর্তন করে ফেলে। এর ফলে কোনো ওয়েবসাইটে 
ঢোকার সময় সঠিক ইউআরএল বা ঠিকানা দিলেও ট্রোজান যারা তৈরি করেছে তাদের 
ডিএনএস সার্ভার ঘুরে তবেই ওয়েবসাইটটি আসে। এতে হ্যাকাররা ইচ্ছামতো আক্রান্ত
 কম্পিউটারের ব্যবহারকারীকে তাদের ওয়েবসাইটে পাঠিয়ে দিতে পারে।<br>ইন্টারনেট
 বিপর্যয়ের এ বিষয়টি নিয়ে সতর্ক করতে কাজ করছে সার্চ সেবাদাতা গুগল। কিন্তু
 সতর্কতা জারির পরও আড়াই লাখ কম্পিউটার এখনও এই ট্রোজান আক্রমণের ঝুঁকির 
মধ্যে রয়েছে। যুক্তরাষ্ট্রভিত্তিক ইন্টারনেট নিরাপত্তা প্রতিষ্ঠান ডেটিকুই 
জানিয়েছে, সতর্কতা জারির পরও যেসব কম্পিউটার থেকে ম্যালওয়্যার অপসারণ করা 
হয়নি সেগুলো ঝুঁকির মধ্যে রয়ে গেছে।<br>প্রসঙ্গত, মার্কিন গোয়েন্দা সংস্থা 
এফবিআই অনেক দিন আগেই ট্রোজান ভাইরাস নির্মাতাদের তাদের গ্রেপ্তার করেছিল। 
পাশাপাশি তাদের ডিএনএস সার্ভারগুলো বন্ধ করে দিয়েছিল। ট্রোজানের সার্ভার 
বন্ধ করে দেওয়া হলেও এখনও বিশ্বব্যাপী হাজার হাজার ম্যাক ও উইন্ডোজ 
কম্পিউটারে এই ট্রোজান রয়েছে। আক্রান্ত কম্পিউটারগুলো সচল রাখতে এফবিআই 
ব্যাকআপ হিসেবে নিজেরাই কিছু সার্ভার বসিয়েছিল। ৯ জুলাই এফবিআই এই সেবাটি 
বন্ধ করে দিতে যাচ্ছে। এফবিআইয়ের ব্যাকআপ সার্ভারের মাধ্যমে ডিএনএস 
রাউটিং(এক ধরনের ডোমেইন নেম সিস্টেম কাঠামো) এখনো পর্যন্ত ঠিকঠাকভাবে চললেও
 জুলাইয়ের ৯ তারিখ এফবিআই এসব সার্ভার বন্ধ করে দেওয়ার সঙ্গে সঙ্গেই 
ট্রোজান আক্রান্ত কম্পিউটারগুলো ইন্টারনেট থেকে বিচ্ছিন্ন হয়ে পড়বে।<br>প্রসঙ্গত,
 এর আগে গত ফেব্রুয়ারি মাসে এই কার্যক্রমটি বন্ধ করতে চেয়েছিল এফবিআই। 
কিন্তু বিষয়টি নিয়ে এখনো অনেকে সচেতন না থাকায় জুলাই মাস পর্যন্ত বৃদ্ধি 
করা হয়েছিল। মাত্র চার মাসের জন্য এফবিআই ডিএনএস সার্ভারগুলো চালু করা হলেও
 আদালতের নির্দেশে সেগুলো এত দিন ধরেই সক্রিয় আছে। তবে এবার জুলাইয়ের ৯ 
তারিখেই এগুলো বন্ধের তারিখ নিশ্চিত করা হয়েছে।<br>ব্যবহারকারীরা তাঁদের 
কম্পিউটার এই ট্রোজানে আক্রান্ত কি না, তা পরীক্ষা করার জন্য www.dns-ok.us
 ঠিকানায় ভিজিট করে দেখে নিতে পারবেন। যদি সবুজ সংকেত দেখায় তবে ম্যালওয়ার 
মুক্ত আর লাল সংকেত দেখালে সেই কম্পিউটারে এই ভাইরাসটি বাসা বেঁধেছে।<br>এদিকে
 এফবিআই জানিয়েছে, আক্রান্ত পিসি ব্যবহারকারীরা যদি দ্রুত পদক্ষেপ গ্রহণ না
 করে তাহলে আগামী ৯ জুলাই যখন অস্থায়ী সার্ভার বন্ধ করে দেওয়া হবে, তখন 
তাঁরা আর ইন্টারনেট ব্যবহার করতে পারবেন না।<br>কম্পিউটার নিরাপত্তা 
বিশেষজ্ঞরা এ সমস্যা সমাধান প্রসঙ্গে জানিয়েছেন, এই ম্যালওয়্যার থেকে সহজেই
 মুক্তি পাওয়া সম্ভব। ইন্টারনেট বিভিন্ন অনেক সহজ টুল ব্যবহার করে এই 
ম্যালওয়্যার অপসারণ করা যাবে। যদি কোন কম্পিউটারে ট্রোজান খুঁজে পাওয়া যায়,
 তাহলে যেসব অ্যান্টি-ভাইরাস টুল দিয়ে তা নির্মূল করতে হবে তার তালিকা 
পাওয়া যাবে- www.dcwg.org/fix এই লিংকে<br>নিরাপত্তা বিশ্লেষকেরা দ্রুত এ ভাইরাসটি থেকে মুক্ত হওয়ার পরামর্শ দিয়েছেন তাঁরা।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6f23cb4198">
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
	<h4><a href="../../technology/default.php">তথ্যপ্রযুক্তি</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6f1df13bef.php">স্যামসাংয়ের লাভের রেকর্ড</a></li>
                    <li><a href="4ff6f186bbf07.php">এশিয়ার সাবমেরিন কেবল প্রকল্পে ফেসবুকের বিনিয়োগ</a></li>
                    <li><a href="4ff6f12073336.php">দেশের বাজারে এল তোশিবা-এএমডির ল্যাপটপ</a></li>
                    <li><a href="4ff6f09254c5a.php">আসল পায়ের সদৃশ কৃত্রিম পা!</a></li>
                    <li><a href="4ff6f02eed14f.php">ক্ষুধার্ত মিল্কিওয়ের কৃষ্ণগহ্বর!</a></li>
                    <li><a href="4ff6efdc46191.php">প্রথম ওড়ার প্রস্তুতি নিচ্ছে ‘ওরিয়ন’</a></li>
                    <li><a href="4ff6ef772f77d.php">আসছে ফায়ারফক্স ওএস চালিত স্মার্টফোন</a></li>
                    <li><a href="4ff6ef227a857.php">দোহাটেকে চালু হলো ই-সাইন সুবিধা</a></li>
                    <li><a href="4ff5954381.php">মাইক্রোসফট ইমাজিন কাপে দেশি অন্নপূর্ণা</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">সংবাদ ৭১</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>