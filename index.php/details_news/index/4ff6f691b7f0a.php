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
      <li class="current"><a href="../../education/default.htm">শিক্ষা</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">প্রাথমিক শিক্ষা সমাপনী পরীক্ষার প্রস্তুতি</span></h1>
	  <p>
		সিদ্দিকুর রহমান<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-04-18-37-26-4ff48d66891e9-untitled-17.jpg" alt="প্রাথমিক শিক্ষা সমাপনী পরীক্ষার প্রস্তুতি" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  রধান শিক্ষক (প্রা.), হু. মু. এরশাদ সরকারি প্রাথমিক বিদ্যালয়, ঢাকা <br><br>অধ্যায়-১৮ <br>প্রিয় শিক্ষার্থী, সমাপনী পরীক্ষার আলোকে আজকে অধ্যায় আঠার-এর বিশ্ব শান্তি ও জাতিসংঘ নিয়ে আলোচনা করছি।<br><br>সঠিক শব্দ দিয়ে শূন্যস্থান পূরণ কর।<br>ক) পৃথিবীর কোন রাষ্ট্র একে অপরের — ছাড়া টিকে থাকতে পারে না।<br>উত্তর: পৃথিবীর কোন রাষ্ট্র একে অপরের সহযোগিতা ছাড়া টিতে থাকতে পারে না।<br>খ) মানবজাতিকে রক্ষা করতে হলে — প্রতিষ্ঠা ছাড়া উপায় নাই।<br>উত্তর: মানবজাতিকে রক্ষা করতে হলে বিশ্বশান্তি প্রতিসমা ছাড়া উপায় নেই।<br>গ) যুদ্ধ থেকে মানবজাতিকে রক্ষার উদ্দেশ্যে — গঠিত হয়েছে।<br>উত্তর: যুদ্ধ থেকে মানবজাতিকে রক্ষার উদ্দেশ্যে জাতিসংঘ গঠিত হয়েছে।<br>ঘ) জাতিসংঘের নিজস্ব কোন — নেই।<br>উত্তর: জাতিসংঘের নিজস্ব কোন সামরিক বাহিনী নেই।<br>ঙ) বিশ্বশান্তি রক্ষায় জীবনদান — জন্য অত্যন্ত গৌরবের।<br>উত্তর: বিশ্বশান্তি রক্ষায় জীবনদান আমাদের সেনাবাহিনীর জন্য অত্যন্ত গৌরবের।<br>নিচের শুদ্ধ উক্তিগুলোর ডান পাশে ‘শু’ এবং অশুদ্ধ উক্তিগুলোর ডান পাশে ‘অ’ লেখ।<br>ক) জাতিসংঘের সকল সদস্য রাষ্ট্র সাধারণ পরিষদের সদস্য।—‘শু’<br>খ) জাতিসংঘ শান্তি মিশনে বাংলাদেশ সেনাবাহিনীর অংশগ্রহণ অত্যন্ত প্রশংসনীয়।—‘শু’<br>গ) যুদ্ধ শুরু করার জন্য কাজ করে জাতিসংঘ।—‘অ’<br>ঘ) সকল শিশুর শিক্ষা যাতে নিশ্চিত না হয় সেজন্য কাজ করে ইউনিসেফ।—‘অ’<br>ঙ) বিশ্বব্যাংক বাংলাদেশের উন্নয়নে সহায়তা দিয়ে থাকে।—‘শু’<br>বাম পাশের সাথে ডান পাশের কথাগুলো মিল কর:<br>বাম<br>ক) বিশ্বশান্তি প্রতিষ্ঠার জন্য<br>খ) জাতিসংঘের সদর দফতর আমেরিকার যুক্তরাষ্ট্রের<br>গ) বছরে একবার সাধারণ পরিষদের<br>ঘ) আন্তর্জাতিক আদালত<br>ঙ) শিশুদের জন্য কাজ করে<br>ডান<br>নিউইয়র্কে অবস্থিত<br>অধিবেশন অনুষ্ঠিত হয়<br>নেদারল্যান্ডের হেগ শহরে অবস্থিত<br>ইউনিসেফ<br>১৯৪৫ সালে জাতিসংঘ প্রতিষ্ঠিত হয়<br>ইউনেস্কো<br>উত্তর: ক) বিশ্বশান্তি প্রতিষ্ঠার জন্য — ১৯৪৫ সালে জাতিসংঘ প্রতিষ্ঠিত হয়<br>খ) জাতিসংঘের সদর দফতর আমেরিকার যুক্তরাষ্ট্রের — নিউইয়র্কে অবস্থিত<br>গ) বছরে একবার সাধারণ পরিষদের— অধিবেশন অনুষ্ঠিত হয়<br>ঘ) আন্তর্জাতিক আদালত— নেদারল্যান্ডের হেগ শহরে অবস্থিত<br>ঙ) শিশুদের জন্য কাজ করে— ইউনেস্কো<br>সঠিক উত্তরটি খাতায় লেখ।<br>১) জাতিসংঘ গঠনের প্রধান উদ্দেশ্য কী?<br>ক) যদ্ধ করা খ) বিশৃঙ্খলা তৈরি করা<br>গ) বিশ্বশান্তি নিশ্চিত করা ঘ) ব্যবসা করা<br>উত্তর: বিশ্বশান্তি নিশ্চিত করা।<br>২) নিরাপত্তা পরিষদের স্থায়ী সদস্য কয়টি?<br>ক) বিশ্বের সকল রাষ্ট্র খ) জাতিসংঘের সকল সদস্য রাষ্ট্র<br>গ) সাতটি রাষ্ট্র ঘ) পাঁচটি রাষ্ট্র উত্তর: পাঁচটি রাষ্ট্র।<br>৩) ইউনিসেফ কাদের জন্য কাজ করে?<br>ক) সকলের জন্য খ) নারীদের জন্য<br>গ) শিশুদের জন্য ঘ) পুরুষদের জন্য<br>উত্তর: শিশুদের জন্য।<br>৪) স্বল্পোন্নত দেশগুলোর উন্নয়ন কাজে সমন্বয় করে কোনটি?<br>ক) ইউনেস্কো খ) অছি পরিষদ<br>গ) ইউএনডিপি ঘ) নিরাপত্তা পরিষদ<br>উত্তর: নিরাপত্তা পরিষদ।<br>৫) আন্তর্জাতিক স্বাস্থ্য দিবস কত তারিখে অনুষ্ঠিত হয়?<br>ক) ৭ই মার্চ খ) ৭ই আগস্ট গ) ৭ই জুন ঘ) ৭ই এপ্রিল উত্তর: ৭ই এপ্রিল।<br># পরবর্তী অংশ ছাপা হবে আগামীকাল	  </div>
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
			<input type="hidden" name="newsID" value="4ff6f691b7f0a">
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
	<h4><a href="../../education/default.htm">শিক্ষা</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6f61b57d65">২০১২ সালের জুনিয়র স্কুল সার্টিফিকেট পরীক্ষার প্রস্তুতি</a></li>
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