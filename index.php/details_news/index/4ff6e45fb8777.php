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
      <li class="current"><a href="../../sports/default.htm">খেলা</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">দুজনের বন্ধুত্ব এবং মরিনহো...</span></h1>
	  <p>
		<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2-07-04-20-20-03-4ff4a5737f36c-untitled-21.jpg" alt="ক্যাসিয়াস-জাভির এই বন্ধুত্ব পছন্দ নয় মরিনহোর!" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  একজন যদি স্প্যানিশ অর্কেস্ট্রার কনডাক্টর হন, তবে আরেকজন থাকেন সেই 
অর্কেস্ট্রার আয়োজনে। ইউরো ২০০৮ থেকেই দুজনের সাফল্যের যুগলবন্দীর সূচনা, 
সেবার ট্রফিটাকে চুমু খেয়েছিলেন একসঙ্গে। দুই বছর পর বিশ্বকাপেও তাঁরা 
উদ্ভাসিত আপন আলোয়। ফলাফল? অধরা বিশ্বকাপ জয়! আর এবারের ইউরো জিতে তো 
ইতিহাসেরই অংশ হয়ে গেলেন তাঁরা। জাভি হার্নান্দেজ ও ইকার ক্যাসিয়াস দুই 
চিরপ্রতিদ্বন্দ্বী ক্লাবের অধিনায়ক হতে পারেন, কিন্তু স্পেন দলে তাঁরা যেন 
একই বৃন্তে দুটি ফুল। সেই কিশোর বয়স থেকেই দুজনের মধ্যে হূদ্যতা। সময় 
গড়িয়েছে, ক্লাবের হয়ে দুজন দুজনের মুখোমুখি হয়েছেন অনেকবার। একজন হাসলে 
আরেকজন কেঁদেছেন, কিন্তু নিজেদের বন্ধুতায় কোনো আঁচড় লাগেনি।<br>বছর কয়েক 
ধরেই অবশ্য তাঁদের দুই ক্লাব রিয়াল মাদ্রিদ ও বার্সেলোনার দ্বন্দ্বটা 
তুঙ্গে। কথার লড়াইয়ে কে কাকে হারাতে পারে, সেটা নিয়েও চলে অলিখিত লড়াই। 
বিবাদের পালে জোর হাওয়াটা অবশ্য রিয়াল কোচ হোসে মরিনহোই দিয়েছেন, আর তাই 
রিয়াল-বার্সার সম্পর্কও কিনা অনেকটা তেতো হয়ে গেছে। জাতীয় দলে বার্সার 
ছয়জন, রিয়ালের চারজন খেলোয়াড়। তার পরও তাঁদের এই অসামান্য যূথবদ্ধতার রহস্য
 কী? ‘ইগো’ নামের ভূতটা একবারও কারও ওপর চেপে বসেনি? জবাবটা দিয়েছেন জাভির 
বাবা। তাঁর মতে, জাভি ও ক্যাসিয়াসের দুর্দান্ত বোঝাপড়ার কারণেই স্পেন দলে 
কোনো ফাটল ধরতে পারেনি। স্পেন দলে একজনকেই অধিনায়ক হতে হতো। বাহুবন্ধনীটা 
ক্যাসিয়াসের হাতে সেই ২০০৮ থেকে। কিন্তু ওটা নিয়ে জাভি-ক্যাসিয়াসের মধ্যে 
কোনো মনোমালিন্য তো হয়ইনি, উল্টো দুজনের সমঝোতা বাকিদেরও করেছে দারুণ 
ঐক্যবদ্ধ।<br>কিন্তু হার্নান্দেজ সিনিয়র বোমাটা ফাটালেন এবার ইউরো জয়ের 
পরপরই। বলেছেন, দুই বন্ধুর এই হূদ্যতা নাকি মরিনহো মোটেই সুনজরে দেখেন না। 
‘জাভির সঙ্গে বন্ধুত্বের কারণে ইকার মরিনহোর বিরাগভাজন হয়ে পড়ে। সমস্যাগুলো
 গত মৌসুমেই প্রকাশ্যে চলে আসে। সবাই জানে এটা। তবে জাভি ও ইকার কারোরই 
সম্পর্কটা নষ্ট করার কোনো ইচ্ছা ছিল না।’ কম রেডিওকে দেওয়া এক সাক্ষাৎকারে 
দাবি করেছেন জাভির বাবা জোয়াকিন হার্নান্দেজ। এ নিয়ে মরিনহোর সঙ্গে 
ক্যাসিয়াসের হালকা বাদানুবাদও নাকি হয়েছিল। এত কিছুর পরও দুজনের সম্পর্কটা 
ছিল অটুট, আর ইউরোতে সেটারই সুফল পেল স্পেন। জাভি সিনিয়র অবশ্য আরেকজনকেও 
কৃতিত্ব দিচ্ছেন, ‘জাভি, ক্যাসিয়াস আর ভিসেন্তে দেল বস্কের জন্যই স্পেন এত 
দূর এসেছে। দলকে বেশ কিছু কঠিন মুহূর্তই পার করতে হয়েছে, কিছু খেলোয়াড়ের 
সম্পর্ক অম্ল-মধুর হয়ে পড়েছিল। কিছু খেলোয়াড়ের আচরণও ঠিক প্রত্যাশিত ছিল 
না। ভাগ্যক্রমে ইকার-জাভি ওটা সামাল দিতে পেরেছে।’ মরিনহো কি জাভির বাবার 
সমালোচনার জবাবে কোনো পাটকেল ছুড়বেন? গোল ডট কম।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6e45fb8777">
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
	<h4><a href="../../sports/default.htm">খেলা</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6e6966f79b">অবসরের পরিকল্পনা নেই টেন্ডুলকারের</a></li>
                    <li><a href="4ff6e6306f8aa">এ বছরই গোললাইন প্রযুক্তির ব্যবহার</a></li>
                    <li><a href="4ff6e5b5863c0">এবার রাহুলকে নিয়ে বিতর্কে চ্যাপেল</a></li>
                    <li><a href="4ff6e5381bd3c">পাক-ভারত সিরিজ নিয়ে আশাবাদ</a></li>
                    <li><a href="4ff6e4d095873">উইম্বলডনের ফাইনালে সেরেনা</a></li>
                    <li><a href="4ff6e3a1cdda5">ইনিয়েস্তার বিয়ে</a></li>
                    <li><a href="4ff6e32ff01e6">টটেনহামে উচ্ছ্বসিত ভিলাস-বোয়াস</a></li>
                    <li><a href="4ff5952107">অনিয়মের শিকার ডলার মাহমুদ!</a></li>
                    <li><a href="4ff59517ec">বিশ্রামে শচীন, ফিরলেন শেবাগ ও জহির</a></li>
                    <li><a href="4ff5950939">স্পেনের চেয়ে সেরা সত্তরের ব্রাজিল: পেলে</a></li>
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