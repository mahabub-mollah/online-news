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
      <h1><span style="color:maroon;">এবার রাহুলকে নিয়ে বিতর্কে চ্যাপেল</span></h1>
	  <p>
		অনলাইন ডেস্ক<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/dravid_image.jpg" alt="রাহুল দ্রাবিড়" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  দীর্ঘদিন ভারতের ব্যাটিং অর্ডারে একটা স্তম্ভ হিসেবে খেলেছেন রাহুল 
দ্রাবিড়। মাঝে কিছুদিন অধিনায়ক হিসেবেও দায়িত্ব পালন করেছিলেন সম্প্রতি 
অবসর নেওয়া এই ডান-হাতি ব্যাটসম্যান। তবে দলকে নেতৃত্ব দেওয়ার সুযোগ খুব 
বেশি দিনের জন্য পাননি ‘মি. ওয়াল’। আর এর পেছনে দলের অন্য খেলোয়াড়দের 
অসহযোগিতাই প্রধান কারণ হিসেবে কাজ করেছে বলে সদ্য প্রকাশিত এক বইয়ে দাবি 
করেছেন ভারতের সাবেক কোচ গ্রেগ চ্যাপেল। অন্য ক্রিকেটারদের সমর্থন পেলে 
দ্রাবিড়ই ভারতের সবচেয়ে সফলতম অধিনায়ক হতে পারতেন বলেও মন্তব্য করেছেন 
সাবেক এই অস্ট্রেলিয়ান ক্রিকেটার। রাহুল দ্রাবিড়কে নিয়ে লেখা এ বইতে এমন 
কথা বলে ক্রিকেট অঙ্গনে নতুন এক বিতর্কের জন্ম দিয়েছেন তিনি।<br>অধিনায়ক 
হিসেবে ভারতকে বেশ কিছু জয় এনে দিলেও রাহুল দ্রাবিড়ের এ সাফল্য দলের কিছু 
সদস্য ভালো মনে গ্রহণ করতে পারেননি বলে অভিযোগ করেছেন গ্রেগ চ্যাপেল। 
‘রাহুল দ্রাবিড়- টাইমলেস স্টিল’ নামক সদ্য প্রকাশিত বইয়ে তিনি লিখেছেন, 
‘দুঃখজনক ব্যাপার যে রাহুলের নেতৃত্বে দলের এই সাফল্য সবাই সমানভাবে গ্রহণ 
করেনি। কেউ কেউ এটাকে হুমকিস্বরূপ মনে করেছে এবং রাহুলের বিপক্ষে কাজ 
করেছে। দলের ভেতরে তিনি কখনোই সতীর্থদের পুরো সমর্থন পাননি। সে রকমটা হলে 
হয়তো ভারতীয় ক্রিকেটের সাম্প্রতিক ইতিহাসটা একটু অন্য রকমই হতো। আর রাহুল 
হয়ে যেতে পারতেন ভারতের অন্যতম সফল অধিনায়ক।’<br>অধিনায়ক হিসেবে দ্রাবিড়ের 
পারফরমেন্স নিঃসন্দেহেই অনেক ভালো ছিল। ২০০৩ থেকে ২০০৭ সালের মধ্যে ২৫টি 
টেস্ট ম্যাচে ভারতকে নেতৃত্ব দিয়ে জয় পেয়েছিলেন আটটিতে। হার ছয়টি ম্যাচে ও 
ড্র হয়েছিল ১১টি ম্যাচ। ৭৯টি এক দিনের ম্যাচের ৪২টিতেই অধিনায়ক রাহুল 
পেয়েছিলেন জয়ের স্বাদ। এর মধ্যে পরে ব্যাটিং করে টানা ১৭টি ম্যাচে জেতার 
বিশ্ব রেকর্ডও আছে ‘মি. ওয়ালের’ ঝুলিতে। তবে এত কিছুর পরেও অধিনায়ক হিসেবে 
যে রাহুল খুব বেশিদিন দায়িত্ব পালন করতে পারেননি, তাতে কিছুটা হতাশাই 
জানিয়েছেন গ্রেগ চ্যাপেল।<br>বাস্তবে ঘটনা আসলেও চ্যাপেলের বর্ণনার মতোই 
ঘটেছে কি না, সেটা এখনো নিশ্চিতভাবে বলার উপায় নেই। তবে ভারতের সাবেক এই 
কোচের নতুন এ বই যে অনেক বিতর্কেরই জন্ম দিয়েছে, সেটা নিশ্চিতভাবেই বলা 
যায়।—পিটিআই	  </div>
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
			<input type="hidden" name="newsID" value="4ff6e5b5863c0">
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
                    <li><a href="4ff6e5381bd3c">পাক-ভারত সিরিজ নিয়ে আশাবাদ</a></li>
                    <li><a href="4ff6e4d095873">উইম্বলডনের ফাইনালে সেরেনা</a></li>
                    <li><a href="4ff6e45fb8777">দুজনের বন্ধুত্ব এবং মরিনহো...</a></li>
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