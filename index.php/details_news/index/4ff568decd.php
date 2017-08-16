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
      <h1><span style="color:maroon;">২০১১ সালে বিদেশি বিনিয়োগ বেড়েছে সাড়ে ২৪ শতাংশ</span></h1>
	  <p>
		স্টাফ করেসপন্ডেন্ট<br/><br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/BlankImage.jpg" alt="" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <p><strong>ঢাকা:</strong> ইউনাইটেড নেশনস কনফারেন্স অন ট্রেড অ্যান্ড ডেভেলপমেন্ট (ইউএনসিটিএডি) প্রকাশিত ওয়ার্ল্ড ইনভেস্টমেন্ট রিপোর্ট ২০১২ অনুসারে ২০১১ সালে বাংলাদেশে বিদেশি বিনিয়োগ বেড়েছে ২৪ দশমিক ৪২ শতাংশ।<br><br>বৃহস্পতিবার বিনিয়োগ বোর্ডের (বিওআই) সম্মেলনকক্ষে ইউএনসিটিএডির রিপোর্ট প্রকাশ অনুষ্ঠানে এ তথ্য জানানো হয়।<br><br>এ সময় উপস্থিত ছিলেন বিওআই চেয়ারম্যান ড. এস এ সামাদ, প্রধানমন্ত্রীর জ্বালানি বিষয়ক উপদেষ্টা ড. তৌফিক ই ইলাহী চৌধুরী, বিওআই নির্বাহী সদস্য নবাস চন্দ্র মন্ডল প্রম‍ুখ।<br>    <br>রিপোর্ট উপস্থাপন করেন জাহাঙ্গীরনগর বিশ্ববিদ্যালয়ের অর্থনীতি বিভাগের অধ্যাপক ড. এম ইসমাইল হোসেন।<br><br>প্রকাশিত রিপোর্ট অনুসারে ২০১১ সালে পুরো বিশ্বে বিনিয়োগে প্রবৃদ্ধি হয়েছে ২৩ শতাংশ। আর বাংলাদেশে বিনিয়োগ বেড়েছে ২৪ দশমিক ৪২ শতাংশ। ২০১০ সালে বাংলাদেশে বিদেশি বিনিয়োগ ছিল ৯১ কোটি ৩৩ লাখ ২০ হাজার মার্কিন ডলার। ২০১১ সালে তা বেড়ে ১১৩ কোটি ৬৩ লাখ ৮০ হাজার মার্কিন ডলারে উন্নীত হয়েছে।<br><br>প্রসঙ্গত, ২০০৮ সালে বাংলাদেশে বিনিয়োগ হয় ১০৮ কোটি ৬৩ লাখ মার্কিন ডলার। এরপর ২০০৯ সালে বাংলাদেশে বিদেশি বিনিয়োগ হয় ৭০ কোটি ১ লাখ ৬০ হাজার মার্কিন ডলার।<br><br>এর পরবর্তী বছরগুলোতে এ ধারাবাহিকতা কেন অব্যাহত রাখা গেল না এ বিষয়ে বিওআই সদস্য বিভাস চন্দ্র মন্ডল বলেন, “২০০৭ সালে বিদেশি বিনিয়োগ হয় ৬৬ কোটি মার্কিন ডলার। আর ২০০৯ সালে বিনিয়োগ হয় ৭০ কোটি মার্কিন ডলার। আর মাঝের যে বছর ১০৮ কোটি ডলারের মধ্যে ৬০ কোটি ডলারের বেশি বিনিয়োগ হয়েছে টেলিকম খাতে। এ খাতটি বাদ দিলে প্রকৃত পক্ষে বিনিয়োগ কমেছে।”<br><br>রিপোর্ট উপস্থাপনকালে এম ইসমাইল হোসেন বলেন, “বৈদেশিক বিনিয়োগ কমে গিয়েছিল। সে অবস্থা থেকে উত্তরণ ঘটেছে। তবে ২০০৭ সালের অবস্থানে যেতে ২০১৪ সাল পর্যন্ত সময় লাগবে।<br><br>এদিকে আলোচ্য সময়ে সামগ্রীক বিদেশি বিনিয়োগের বাড়লেও গ্রিনফিল্ড ইনভেস্টমেন্ট কমেছে ১৬ শতাংশ। ২০১০ সালে এ খাতে বিদেশি বিনিয়োগের পরিমাণ ছিল ৫১ কোটি ৯৯ লাখ ৮০ হাজার মার্কিন ডলার। ২০১১ সালে তা কমে ৪৩ কোটি ১৮ লাখ ৫০ হাজার মার্কিন ডলারে নেমে গিয়েছে। তবে পুনর্বিনিয়োগ ৩৬ কোটি ৪৬ লাখ ২০ হাজার ডলার থেকে ৩৪ দশমিক ২৮ শতাংশ বেড়ে ২০১১ সালে ৪৮ কোটি ৯৬ লাখ ৩০ হাজার ডলারে উন্নীত হয়েছে। এছাড়া ইন্ট্রা-কোম্পান লোন ২ কোটি ৮৭ লাখ ২০ হাজার ডলার থেকে ৬৪৮ দশমিক ২৫ শতাংশ বেড়ে ২১ কোটি ৪৯ লাখে উন্নীত হয়েছে।<br><br>বিনিয়োগ বোর্ডের চেয়ারম্যান বলেন, “সরকার ঘন ঘন ট্যাক্স নীতিমালার পরিবর্তন করে, যা বিদেশি বিনিয়োগের ক্ষেত্রে একটি বড় সমস্যা। তারপরও বিদেশি বিনিয়োগকারীদের বাংলাদেশে বিনিয়োগের প্রচুর আগ্রহ লক্ষ্য করা যায়।”</p>	  </div>
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
			<input type="hidden" name="newsID" value="4ff568decd">
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
                    <li><a href="4ff592ba85">নেই নীতিমালা, বাড়ছে ব্যাংকের এটিএম বুথ</a></li>
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