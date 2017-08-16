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
      <h1><span style="color:maroon;">বেড়েছে রসুন, পেঁয়াজ, আদা ও মরিচের দাম, কমেছে মুরগি-ডিমের দাম</span></h1>
	  <p>
		মফিজুল সাদিক<br/>স্টাফ করেসপন্ডেন্ট<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/MARCAT-BBG20120706183532.jpg" alt="নিত্যপ্রয়োজনীয় জিনিসের দাম বাড়তে শুর করেছে" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <strong>ঢাকা:</strong> রমজান মাসের এখনো ১৪ দিন বাকি থাকতে রমজানের 
নিত্যপ্রয়োজনীয় জিনিসের দাম বাড়তে শুর করেছে। বিদেশ থেকে যে সমস্ত 
নিত্যপ্রয়োজনীয় পণ্য আমাদের দেশে আসে, সে সমস্ত পণ্যের দামও বাড়তির দিকে। 
তবে মুরগি এবং ডিমের দাম কমেছে।<br><br>রাজধানীর বিভিন্ন পাইকারি বাজারে 
গিয়ে দেখা গেছে, শুক্রবার সব পণ্য বিক্রি হচ্ছে বাড়তি দামে। দুই দিনের 
ব্যবধানে দেশি ও বিদেশি সব ধরনের রসুনের দাম বেড়েছে। মাত্র দুই দিন আগে যে 
দেশি রসুনের দাম ছিল ৪২ থেকে ৪৫ টাকা কেজি এখন সেই রসুন বিক্রি হচ্ছে কেজি 
প্রতি ৬০ টাকা করে। এছাড়া গত সপ্তাহের ৮৫ টাকার বিদেশি(চীনা) রসুন এখন 
বিক্রি হচ্ছে ১০০ টাকা কেজি।<br><br>কেজিপ্রতি পেঁয়াজ ২ থেকে ৩ টাকা করে বেড়ে বিক্রি হচ্ছে দেশি পেঁয়াজ ৩২ থেকে ৩৩ এবং ভারতীয় পেঁয়াজ ২৩ থেকে ২৪ টাকা দরে।<br><br>মাত্র এক সপ্তাহের ব্যবধানে আদার দামও প্রতি কেজিতে বেড়েছে ২০ টাকা করে। ৫০ টাকার আদা এখন বিক্রি হচ্ছে ৭০ টাকা কেজি।<br><br>কাঁচা-শুকনা
 সব ধরনের মরিচের দামও বাড়তির দিকে। শুকনা মরিচের দাম কেজিপ্রতি বেড়েছে ২০ 
টাকা করে, বিক্রি হচ্ছে ১৬০ টাকা কেজি। কাঁচা মরিচও বিক্রি হচ্ছে বাজারভেদে
 প্রতি কজি ৯০ টাকা থেকে ১০০ টাকায়।<br>&nbsp;<br>রাজধানীর শ্যামবাজারে গিয়ে 
জানা গেছে, সব ধরনের পণ্যের দাম বাড়ার অন্যতম কারণ, পণ্য বন্দর থেকে 
খালাসের সময় অতিরিক্ত ভ্যাট দিতে হচ্ছে। সেজন্য সব ধরনের আমদানিকৃত পণ্যের 
দাম এখন আকাশচুম্বী।<br><br>শ্যামবাজারের মেসার্স শাহ পরান বাণিজ্যালয়ের 
হিসাবরক্ষক বিপ্লব সাহা বলেন, বন্দর থেকে পণ্য খালাসের জন্য এখন টাকা গুণতে
 হচ্ছে প্রতি কন্টেইনারে সাড়ে তিন থেকে চার লাখ টাকা। যা আগে ছিল মাত্র এক 
লাখ থেকে এক লাখ ২৫ হাজার টাকা। প্রতি কন্টেইনারে পণ্য আসে ২৬ থেকে ২৭ টন।<br><br>এজন্য
 সব ধরনের পণ্যের দাম বাড়ছে বলে উল্লেখ করে তিনি আরো বলেন, ‘‘জুলাই মাস 
থেকে আমাদের এ আমদানি ব্যয় বৃদ্ধি পেয়েছে। সরকার যদি আমাদের ওপর থেকে করের 
বোঝা কমায়, তা হলে সবাইকে কম দামে পণ্য সরবরাহ করতে পারবো’’<br><br>তবে কারওয়ানবাজার এবং নিউমার্কেট কাঁচাবাজার ঘুরে দেখা গেছে, মুরগি এবং ডিমের দাম কমেছে।<br><br>ব্রয়লার
 মুরগি এখন বিক্রি হচ্ছে ১৭০ টাকা থেকে ১৭৫ টাকা কেজি। লাল ডিম ৩৬ টাকা, 
দেশি সাদা ডিম ৪০ টাকা এবং হাঁসের ডিম বিক্রি হচ্ছে ৩৮ টাকা প্রতি হালি।<br><br>ভোজ্যতেল
 বিক্রি হচ্ছে আগের দরেই। প্রতি লিটার বোতলজাত তেল ১৩৫ টাকা, খোলা সয়াবিন 
তেল ১২১ টাকা ও খোলা পাম তেল বিক্রি হচ্ছে ৯৮ টাকায়। ৫ লিটারের বোতল বিক্রি
 হচ্ছে ৬৭০ টাকায়।<br><br>কাঁচাবাজারে গরুর মাংস সরকারের বেধে দেওয়া দামে বিক্রি হচ্ছে ১৭৫ টাকা এবং খাসির মাংস বিক্রি হচ্ছে ৪০০ টাকা প্রতি কেজি।<br><br>তবে সব ধরনের মাছের দাম আগের সপ্তাহের মতোই কম।<br><br>এদিকে
 আবারো বেড়েছে বিভিন্ন ধরনের ডালের দাম। বাজারভেদে প্রতি কেজি মশুর ডাল ১০৫
 থেকে ১০৮ টাকা ও মুগ ডাল ১১০ টাকা থেকে ১১৫ টাকায় বিক্রি হচ্ছে।<br><br>ঊড় দানার মুগ ডাল বিক্রি হচ্ছে ৮২ টাকা থেকে ৮৫ টাকা প্রতি কেজি। খেসারির ডালের দাম ৫৪ টাকা থেকে ৫৫ টাকা কেজি।<br><br>তবে
 সবজির দাম গত সপ্তাহের মতোই আছে। রাজধানির বিভিন্ন কাঁচাবাজার ঘুরে দেখা 
গেছে, প্রতি কেজি আলু ২৪ টাকা, পেঁপে ২৯ থেকে ৩০ টাকা, টমেটো ৭০ থেকে ৮০ 
টাকা, বরবটি ৪০ টাকা, পটল ৩০ টাকা ও ঢ্যাঁড়স ২৫ টাকায় বিক্রি হচ্ছে। 
প্রতিটি লাউ বিক্রি হচ্ছে ৪০ টাকা।<br><br>সরকারিভাবে চিনি ৬০ টাকা কেজি দরে বিক্রি হলেও নিউমার্কেট এবং কারওয়ানবাজারে বিক্রি হচ্ছে ৫৩ থেকে ৫৫ টাকা দরে।	  </div>
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
			<input type="hidden" name="newsID" value="4ff71a5aa97b9">
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
		            <li><a href="4ff716c19ec36">রমজানে নিত্যপণ্য রফতানি বন্ধের আহ্বান এফবিসিসিআইর</a></li>
                    <li><a href="4ff592ba85">নেই নীতিমালা, বাড়ছে ব্যাংকের এটিএম বুথ</a></li>
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