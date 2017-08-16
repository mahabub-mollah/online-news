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
      <h1><span style="color:maroon;">এশিয়ার সাবমেরিন কেবল প্রকল্পে ফেসবুকের বিনিয়োগ</span></h1>
	  <p>
		অনলাইন ডেস্ক<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/facebook-in-asia.jpg" alt="সাবমেরিন কেবল" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  এশিয়া প্যাসিফিক গেটওয়ে (এপিজি) নামের ১০ হাজার কিলোমিটার সাবমেরিন কেবল 
প্রকল্পে বিনিয়োগ করেছে সামাজিক যোগাযোগের ওয়েবসাইট ফেসবুক কর্তৃপক্ষ। 
দক্ষিণ এশিয়ার দেশগুলোর ইন্টারনেটের গতি আরও দ্রুততর করতেই এ প্রকল্পে 
বিনিয়োগ করছেন ফেসবুক প্রতিষ্ঠাতা মার্ক জাকারবার্গ। আজ শুক্রবার এক খবরে 
বিবিসি এ তথ্য জানিয়েছে।<br>এপিজি কেবলটি মালয়েশিয়া থেকে সরাসরি দক্ষিণ 
কোরিয়া হয়ে জাপান পর্যন্ত যাবে। এ ছাড়া শাখাবিন্যাসের মাধ্যমে ভারত, 
ইন্দোনেশিয়া, ফিলিপাইনসহ অন্য দেশগুলোতেও যুক্ত হবে।<br>দক্ষিণ এশিয়ার 
ক্রমবর্ধমান বাজারে নিজেদের অবস্থান আরও সুসংহত করতে এবং ফেসবুক 
ব্যবহারকারীর সংখ্যা বাড়াতেই ফেসবুক এ পদক্ষেপ নিয়েছে বলে জানিয়েছেন 
ফেসবুকের একজন মুখপাত্র। ভারত, ইন্দোনেশিয়া, মালয়েশিয়া, ফিলিপাইন, হংকং ও 
সিঙ্গাপুরের মতো দেশগুলোর নাগরিকদের কাছে ফেসবুক আরও ব্যবহার-বান্ধব 
করতেই সাবমেরিন প্রকল্পে বিনিয়োগ করছে প্রতিষ্ঠানটি।<br>এপিজি প্রকল্পে 
ফেসবুক ছাড়াও চায়না টেলিকম এবং চায়না ইউনিকর্ন বিনিয়োগ করছে। তবে এই 
প্রকল্পে ঠিক কত বিনিয়োগ করছে সে বিষয়ে কোনো তথ্য প্রকাশ করেনি ফেসবুক।<br>এশিয়ার
 ইন্টারনেট অবকাঠামো নির্মাণে যুক্তরাষ্ট্রভিত্তিক প্রতিষ্ঠান হিসেবে 
ফেসবুক আগে গুগলও বিনিয়োগের আগ্রহ প্রকাশ করেছে। ২০০৮ সালে এশিয়া এবং 
যুক্তরাষ্ট্রের মধ্যে সংযোগকারী `ইউনিটি' সাবমেরিন প্রকল্পে ৩০ কোটি ডলার
 বিনিয়োগের ঘোষণা দিয়েছিল গুগল।	  </div>
	  <!-- Comments Bars, To Show Comments -->
	  <br/><br/><hr/>
      <div id="comments">
        <h2>পাঠকের মন্তব্যঃ</h2>
				<ul class="commentlist">
		        
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">সম্রাট</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-07-29 08:56:10</a></div>
            <p>
				ফেসবুক			</p>
          </li>
		          </ul>
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
			<input type="hidden" name="newsID" value="4ff6f186bbf07">
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
		            <li><a href="4ff6f23cb4198.php">৯ জুলাই ইন্টারনেট বিপর্যয়ের ঝুঁকিতে আড়াই লাখ কম্পিউটার</a></li>
                    <li><a href="4ff6f1df13bef.php">স্যামসাংয়ের লাভের রেকর্ড</a></li>
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
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumaar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>