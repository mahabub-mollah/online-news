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
      <h1><span style="color:maroon;">ব্র্যাক ব্যাংকের এইচআরডি প্রধানসহ ১১ জনের বিরুদ্ধে সিলেটে মামলা</span></h1>
	  <p>
		সাব্বির আহমেদ<br/>স্টাফ করেসপন্ডেন্ট<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/BracBank.jpg" alt="ব্র্যাক ব্যাংকের এইচআরডি প্রধানসহ ১১ জনের বিরুদ্ধে সিলেটে মামলা" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <p><strong>সিলেট:</strong>
 ব্র্যাক ব্যাংকের হিউম্যান রিসোর্স ডিভিশনের(এইচআরডি) প্রধান মডেল তানিয়াত
 আহমেদ করিমসহ ১১ জনের বিরুদ্ধে প্রতারণার অভিযোগে সিলেটের আদালতে ২০ কোটি 
টাকার ক্ষতিপূরণ মামলা দায়ের করা হয়েছে।</p>ব্র্যাক ব্যাংকের সাবেক সিলেট দক্ষিণ সুরমা উপজেলার জোনের জোনাল ম্যানেজার মো. হামিদুর রহমান বাদী হয়ে এ মামলাটি দায়ের করেন।<br><br>মো. হামিদুর রহমান নোয়াখালী সদর থানার এওজ বালিয়া গ্রামের সায়েদল হকের ছেলে।<br><br>সিলেটের
 অতিরিক্ত চিফ জুডিসিয়াল ম্যাজিস্ট্রেট মো. আবুল কাসেম বুধবার অভিযোগ আমলে 
নিয়ে এ বিষয়ে দক্ষিণ সুরমা থানার ওসিকে তদন্তের নির্দেশ দেন। &nbsp;<br><br>ঢাকা
 ১নং গুলশান এ্যভিনিউর ব্র্যাক ব্যাংকের হেড অফ হিউম্যান রিসোর্স বিভাগের 
প্রধান তানিয়াত আহমেদ করিম ছাড়াও মামলার অপর আসামিরা হলেন- ব্র্যাকের এসএমই
 ব্যাংকিং বিভাগের হেড আব্দুর রহমান, হেড অফ স্মল বিজনেস সৈয়দ এ মোমেন 
তমাল, বিজনেস ডেভলাপমেন্ট স্মল বিজনেস’র সিনিয়র ম্যানেজার মো. শাহ আলম, হেড
 অফ এইচ আর অপারেশন সুকুমার চন্দ্র ঘোষ, লিগ্যাল কনসালটেন্ট সমীর কুমার 
মুখার্জি, সিলেটের টেরিটরি ম্যানজার মো. মনির হোসেন, কক্সবাজার টেরিটরি 
ম্যানেজার তোফাজ্জল হোসেন, রিপোর্টিং এসএমই এডমিনিস্ট্রেশনের কমপ্লায়্যান্স
 ম্যানেজার আমজাদ হোসেন ফকির, সিলেটের দক্ষিণ সুরমার জোনাল ম্যানেজার 
মোহাম্মদ জাফর ইকবাল ও চকরিয়া জোনের ভারপ্রাপ্ত জোনাল ম্যানেজার মো. 
আসাদুজ্জামান।<br><br>আদালত দরখাস্ত মামলাটি দায়েরের পর তদন্ত পূর্বক 
প্রতিবেদন আগামী ২৬ জুলাই দাখিলের জন্য দক্ষিণ সুরমা থানার ভারপ্রাপ্ত 
কর্মকর্তাকে নিদের্শ প্রদান করেন আদালত।<br><br>মামলার বিবরণে জানা গেছে, 
২০০৬ সালের ১০ ডিসেম্বর বাদী ব্র্যাকের কুমিল্লার কোম্পানীগঞ্জ ইউনিটের 
কাষ্টমার রিলেশন অফিসার পদে যোগদান করেন। পরবর্তীতে ২০০৯ সালের ১ জুন তাকে 
পদোন্নতি দিয়ে চকরিয়া জোনের সিনিয়র কর্মকর্তা হিসেবে নিয়োগ দেওয়া হয়। পরে 
তাকে সিলেটের দক্ষিণ সুরমা জোনের জোনাল ম্যানেজার হিসেবে বদলি করা হয়।<br><br>দক্ষিণ
 সুরমায় দায়িত্ব পালনকালে তাকে না জানিয়ে ওই পদে এজাহার নামীয় আসামী 
মোহাম্মদ জাফর ইকবালকে নিয়োগ দেওয়া হয়। ১নং আসামী তানিয়াত আহমেদ করিমের 
নিদের্শে হামিদুরকে ডিমোশন দিয়ে নোয়াখালীর কোম্পানীগঞ্জ কালেকশন কর্মকর্তা 
হিসেবে বদলির আদেশ দেওয়া হয়।<br><br>এ ছাড়া হামিদুরকে ব্র্যাকের একটি 
মামলায় স্বাক্ষী দেওয়ার জন্য চলতি বছরের ২৮ মার্চ কুমিল্লা যাওয়ার জন্য 
চিঠি দেওয়া হয়। স্বাক্ষী দেওয়াসহ আনুষঙ্গিক কাজে তিনি কুমিল্লায় ৩দিন 
অবস্থানের পর ২৯ মার্চ সিলেটে আসেন। পরে ১ এপ্রিল তাকে কোনো কারণ দর্শানো 
নোটিশ ছাড়াই চাকরি থেকে বরখাস্ত করা হয়। অথচ ব্যাংকের প্রতারণার কারণে 
হামিদুর ৬ দিন বান্দরবন কারাগারে আটক ছিলেন।<br><br>কর্তপক্ষের খামখেয়ালী ও
 স্বেচ্ছাচারিতার কারণে হামিদুর রহমানকে এক জেলা থেকে আরেক জেলায় হয়রানীর 
উদ্দেশ্যে বদলি করা হয়। বদলি ও যাতায়াতের কারণে তার স্ত্রীর গর্ভের 
সন্তানটিও মারা যান। সর্বোপরি হামিদুর রহমান ২০ কোটি টাকার ক্ষতিগ্রস্ত 
হন।<br><br>চাকরি থেকে বরখাস্ত ও আর্থিক ক্ষতিসাধনের জন্য মামলার প্রত্যেক আসামি প্রত্যক্ষভাবে জড়িত বলে মামলায় উল্লেখ করেন তিনি।	  </div>
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
			<input type="hidden" name="newsID" value="4ff5939c31">
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