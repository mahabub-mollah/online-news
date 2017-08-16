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
      <li class="current"><a href="../../economics/default.htm">অর্থনীতি-ব্যবসা</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">নেই নীতিমালা, বাড়ছে ব্যাংকের এটিএম বুথ</span></h1>
	  <p>
		সাইদ আরমান<br/>সিনিয়র ইকোনমিক করেসপন্ডেন্ট<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/ATM20120705140106.jpg" alt="এটিএম বুথ" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <p align="justify"><strong>ঢাকা:</strong> ব্যাংকের এটিএম বুথ স্থাপন ও ব্যবস্থাপনায় কোন 
ধরনের নীতিমালা নেই। প্রতি বছরই ব্যাংকগুলো এটিএম বুথ বাড়াচ্ছে। বাংলাদেশ 
ব্যাংক থেকে প্রাপ্ত তথ্য মোতবেক সর্বশেষ হিসাব অনুযায়ী, বর্তমানে প্রায় ৪ 
হাজার এটিএম বুথ রয়েছে।<br><br>এর ফলে একদিকে যেমন গ্রাহক সেবা বাড়ছে। অপরদিকে বেড়েছে গ্রাহকদের ভোগান্তির ঘটনাও।<br>তবে গ্রাহকদের স্বার্থ রক্ষা এবং বুথ পরিচালনায় একটি শৃংখলা আনতে কেন্দ্রীয় ব্যাংকের&nbsp; কোন নীতিমালা নেই। নেই দিক নির্দেশনা।<br><br>জানা
 গেছে, আমাদের দেশে নব্বইয়ের দশকে এটিএম চালু হয়। ২০০০ সালের পর থেকে এটি 
জনপ্রিয় হতে থাকে। বলা যায়, শাখার চেয়ে এখন ব্যাংকগুলো গ্রাহকদের লেনদেনের 
জন্য এটিএম বুথগুলোকে গুরুত্ব দিচ্ছে। অনেক হিসাবের ক্ষেত্রে কোন চেক বই 
দিচ্ছে না ব্যাংক। শুধু কার্ড দিচ্ছে। ফলে তাদের জন্য বুথগুলোকে লেনদেন 
ছাড়া আর কোন বিকল্প থাকছে না।<br><br>কিন্তু কোন নীতিমালা ছাড়াই চলছে এসব 
বুথ। এতে ব্যাংকের গ্রাহকদের সেবা প্রাপ্তি বেড়েছে। তবে বিড়ম্বনাও বেড়েছে। 
বুথ নষ্ট, বন্ধ থাকা, নেটওয়ার্ক না থাকা, চাহিদা মাফিক টাকা বের না হওয়া, 
ছেড়া টাকা, জাল টাকা, হিসাবে ক্রটি করার মতো ঘটনা ঘটছে। প্রতিদিনই ঘটছে এমন
 ঘটনা।<br><br>নিয়মিতভাবে এসব ভোগান্তির কথা যাচ্ছে বাংলাদেশ ব্যাংকে। 
কেন্দ্রীয় ব্যাংকের গ্রাহক স্বার্থ সংরক্ষণ কেন্দ্রেও এ সংক্রান্ত বেশ 
অভিযোগ যাচ্ছে।<br><br>বাংলাদেশ ব্যাংকের এক কর্মকর্তা বলেন, এটিএম বুথের 
সেবার মান নিয়ে গ্রাহকদের কাছ&nbsp; থেকে নানা অভিযোগ আসছে। কিন্ত নীতিমালা না 
থাকায় ব্যাংকগুলোর বিরুদ্ধে কোনো ব্যবস্থা নেওয়া যাচ্ছে না।<br><br>জানতে 
চাইলে বাংলাদেশ ব্যাংকের নির্বাহী পরিচালক দাশগুপ্ত অসীম কুমার বাংলানিউজকে
 জানান, এটিএম বুথগুলোর জন্য নীতিমালা করার আপাতত কোন পরিকল্পনা নেই। 
ব্যাংকগুলোকে প্রতিযোগিতায় টিকে থাকার জন্য নিজ উদ্যেগ থেকে বুথ ও সেবার 
মান বাড়াতে হবে। তা না হলে তারা টিকতে পারবে না। তবে গ্রাহক হয়রানির 
সুর্নিদিষ্ট কোন অভিযোগ আসলে অবশ্যই কেন্দ্রীয় ব্যাংক ব্যবস্থা নিবে।<br><br>জানা
 যায়, বাংলাদেশ ব্যাংক থেকে ২০০৩ সাল থেকে এটিএম বুথ পরিচালনার জন্য 
ব্যাংকগুলোকে অনুমোদন দেওয়া হয়। এরপর ব্যাংকগুলো এটিএম বুথ স্থাপন শুরু 
করে। বর্তমানে সর্বাধিক এটিএম বুথ রয়েছে ডাচ্-বাংলা ব্যাংকের। বর্তমানে এর 
বুৃথের সংখ্যা ২ হাজার ৭৯।<br><br>বাংলাদেশ ব্যাংকের তথ্যমতে, রাষ্ট্রায়ত্ব
 বাণিজ্যিক ব্যাংকগুলোর মধ্যে সোনালী ব্যাংকের বুথ রয়েছে ৫২টি, অগ্রণী 
ব্যাংকের ও জনতা ব্যাংকের ৬টি করে। আর বেসিক ব্যাংকের রয়েছে ৫টি বুথ।<br><br>বেসরকারি
 ব্যাংকগুলোর মধ্যে ব্র্যাক ব্যাংকের ৩০৫, এবি ব্যাংকের ২০৪, প্রাইম 
ব্যাংকের ১০০টি, মিউটুয়াল ট্রাস্ট ব্যাংকের ৯৩টি, ব্যাংক এশিয়ার ৫৫, ঢাকা 
ব্যাংকের ২৮, সিটি ব্যাংকের ৭৬, এক্সিম ব্যাংকের ৭, ইস্টার্ন ব্যাংকের ৭৫, 
ইসলামী ব্যাংকের ৭৪, ইউনাইটেড কমার্শিয়াল ব্যাংকের ৪৪, স্ট্যান্ডার্ড 
চার্টার্ড ব্যাংকের ৫৭, সাউথইস্ট ব্যাংকের ৩২, শাহজালাল ইসলামী ব্যাংকের 
১৪, যমুনা ব্যাংকের ৩৭ ও মার্কেন্টাইল ব্যাংকের ৩২ বুথ রয়েছে। অন্য 
ব্যাংকগুলোর বুথ দশের নিচে।<br></p>	  </div>
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
			<input type="hidden" name="newsID" value="4ff592ba85">
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
	<h4><a href="../../economics/default.htm">অর্থনীতি-ব্যবসা</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff71a5aa97b9">বেড়েছে রসুন, পেঁয়াজ, আদা ও মরিচের দাম, কমেছে মুরগি-ডিমের দাম</a></li>
                    <li><a href="4ff716c19ec36">রমজানে নিত্যপণ্য রফতানি বন্ধের আহ্বান এফবিসিসিআইর</a></li>
                    <li><a href="4ff568decd">২০১১ সালে বিদেশি বিনিয়োগ বেড়েছে সাড়ে ২৪ শতাংশ</a></li>
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