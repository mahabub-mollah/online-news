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
    <p>ফোন নম্বর : ০১৭৩১ ২৯৩৯৬০ | ই মেইল : sopnilsamrat@yahoo.com</p>
    <ul>
	<li><a href="../../bangla_help"><img class="noBangla" src="../../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFBF0">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="../../contactUs.php"><font color="#FFFBF0">যোগাযোগ</font></a></li>
		
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
		<a href="500c69ac1ddee.php">আজ মহান বিজয় দিবস, বিজয়ের স্মৃতিতে বিনম্র শ্রদ্ধা</a> &nbsp;
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
      <form action="" method="post">
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
      <li class="current"><a href="../../details_news/index/500c6b36b0baa.php">৭১ এক্সক্লুসিভ</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">৯৪ বছর বয়সে প্রেসিডেন্ট পদপ্রার্থী!</span></h1>
	  <p>
		সম্রাট কুমার দে<br/>তারিখ: ১৫-১২-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-22-14-06-55-500c08ff30e74-untitled-8.jpg" alt="Himu" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <div align="justify">‘অবিশ্বাস্য’ হলেও সত্য জাপানের পার্লামেন্ট নির্বাচনে প্রেসিডেন্ট পদপ্রার্থী হিসাবে প্রতিদ্বন্দ্বিতা করছেন ৯৪ বছর বয়সী বৃদ্ধ রিয়োকিচি কিয়াশিমা।

তিনি নিবন্ধন করতে গেলে প্রথমে বিশ্বাসই করতে পারেনি কর্তব্যরত কর্মকর্তা, বিস্মিত হযে জিজ্ঞাসা করেন, ‘আপনি কি এ ব্যাপারে নিশ্চত?’

হ্যাঁ, এ ব্যাপারে নিশ্চিত জাপানি বৃদ্ধ কিয়াশিমা। তার অন্ত্যেষ্টিক্রিয়ার জন্য জমানো অর্থ থেকে ৩ মিলিয়ন ইয়েন নিয়ে নেমেছেন তিনি।

নির্ধারিত সময় শেষ হওয়ার তিন ঘন্টা আগে নিবন্ধন করে কিয়োশিমা হয়েছেন জাপানি পার্রামেন্টের নিম্নকক্ষের সবচেয়ে বেশি বয়সী প্রতিদ্বন্দ্বী।

জাপানি শহর হানিয়ুতে সাটনো পোস্টার দেখিযে গর্বিতভাবে কায়াশিমা বলেন, “আমার মনে হয়, এবার আমার পালা।”

কিন্তু নিজ অর্থায়নে স্বতন্ত্র এ প্রার্থীর প্রচারাভিযানে পরিবারের সদস্য ছাড়া আর কোন সমর্থক নেই। এজন্য নির্বাচনে তার জয়ী হওয়ার সম্ভাবনা খুব কম বলে স্বীকার করেছেন কিয়াশিমা।

প্রধান দলগুলোর টিভি বিতর্ক দেখে তিনি নির্বাচনে অনুপ্রাণিত হয়েছেন বলে জানিয়েছেন তিনি।

জাপানি পার্লামেন্টের এ নির্বাচনে মূলত ক্ষমতাসীন ডেমোক্রেটিক পার্টি অব জাপান ও প্রধান প্রতিদ্বন্দ্বী লিবারেল ডেমোক্রেটিক পার্টির মধ্যে প্রতিদ্বন্দ্বীতা হবে।

      
      
      
      
      
      
মানুষটা আসলে—<br>আমি হিমুও না, মিসির আলিও না। তবে আমাকে চয়েস দেওয়া হলে জোরগলায় বলতে পারি, আমি মিসির আলি হতে চাইব।<br> কাক এবং কবির সংখ্যা দেশে অসংখ্য। কিন্তু প্রচুর গদ্য পড়া ছাড়াও একজন ভালো গদ্যকার হওয়ার জন্য যা করা উচিত—<br>প্রচুর কবিতা পড়তে হবে এবং কলমটা এমনভাবে হাতে রাখবে যেন মনে হয় মানুষটার আসলে ছয়টা আঙুল। একটা আঙুল কলম।<br> লোকসমাজে প্রচলিত আছে—ব্যর্থ কবিরাই নাকি ঔপন্যাসিক হয়। আপনার মন্তব্য কী?<br>এই
 প্রচলিত কথা ঔপন্যাসিকদের ছোট করার কিংবা মজা করার জন্য ব্যবহার করা হয়। 
গদ্য আমাদের মুখের ভাষা আর কবিতা হলো মনের। দুটোই কঠিন। একটায় ব্যর্থ হয়ে 
অন্যটা হওয়া যায় না।<br> ‘জীবনটা ব্যর্থ হয়ে গেল’—এ রকম বাণী দিয়ে অনেকে 
হতাশা ব্যক্ত করে থাকেন। কোন কাজটি না করার ফলে একজন মানুষের জীবন ব্যর্থ 
হয়ে যেতে পারে বলে আপনার ধারণা?<br>পৃথিবীতে এমন কোনো কাজ নেই যা না করলে মানুষের জীবন ব্যর্থ হয়। জীবন এতই বড় ব্যাপার যে একে ব্যর্থ করা খুবই কঠিন।<br>
 ‘আমার প্রিয় লেখক হুমায়ূন আহমেদ, তাঁর লেখা আমার অসম্ভব ভালো লাগে’—কারও 
মুখ থেকে এ রকম বাণী নিঃসৃত হলে তখন আপনি জাগতিক কোন বিষয় নিয়ে 
ভাবনা-চিন্তা করেন?<br>প্রথম যেদিন এই কথাটি শুনি, তখন যেমন ভালো লেগেছিল, 
আজও সে রকমই ভালো লাগে। যেদিন লাগবে না, সেদিন আমার মনের একটি কোমল অংশের 
মৃত্যু হয়েছে বলে ধরে নেওয়া যেতে পারে। আমি চাই না, ওই দিনটি আসুক।<br> আপনি একাধারে ম্যাজিশিয়ান, গল্পকার, গীতিকার, নাট্যকার, পরিচালক, কবি। ভবিষ্যতে আরও কী হওয়ার পরিকল্পনা আপনার মাথায় আছে?<br>আপাতত আর তো কিছু মাথায় আসছে না। দেখা যাক।<br> যে প্রশ্নটি আপনাকে অবশ্যই করা উচিত বলে মনে করেন?<br>আমাকে কোনো প্রশ্ন করাই উচিত নয়। আমি নিরিবিলি থাকতে চাই।<br>
 দুয়ে দুয়ে চার হয়—এটা একটা লজিক। আর মিসির আলি কাজ করেন লজিক নিয়ে। মিসির 
আলির সৃষ্টিকর্তা হিসেবে আপনার মতে পৃথিবীর সেরা লজিক হলো—<br>লজিক হলো অঙ্ক। অঙ্কে সেরা বলে আলাদা কিছু নেই।<br> ‘মানুষ বড়ই বিচিত্র’—কেন বিচিত্র মনে হয় মানুষকে?<br>মানুষ সম্পূর্ণ বিপরীত দুই স্রোত নিজের মধ্যে ধারণ করতে পারে। এটা আমার কাছে বিস্ময়কর মনে হয়।<br> ‘আকাশ ভেঙে জ্যোৎস্না নেমেছে। বিলু মুগ্ধ দৃষ্টিতে দেখছে। দেখতে দেখতে...<br>সে
 ছোট্ট করে একটা নিঃশ্বাস ফেলল। তার মন খারাপ হতে শুরু করেছে। অথচ মন খারাপ
 হওয়ার মতো কিছু ঘটেনি। বরং তার মন আনন্দে পূর্ণ হওয়া উচিত—এই প্রথম সে 
শহরের বাইরে এসে জ্যোৎস্না দেখছে।<br>সাক্ষাৎকার : সিমু নাসের</div>	  </div>
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
        <form id="commentForm" action="http://www.samrat.info/projects/livenews/index.php/comments" method="post">
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
			<input type="hidden" name="newsID" value="500c6b36b0baa.php">
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
	<h4><a href="../../literature/default.htm">শিল্প-সাহিত্য</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="50038920416b6.php">জননী জন্মভূমিশ্চ...</a></li>
                    <li><a href="500388b556bc8.php">নারীর ক্ষমতায়নে উচ্চশিক্ষা</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">বাংলা নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>