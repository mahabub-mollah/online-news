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
      <li class="current"><a href="../../feature/default.php">ফিচার</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">পাহাড়ের ডাক</span></h1>
	  <p>
		জিয়াউর রহমান চৌধুরী<br/>তারিখ: ০৪-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-03-17-46-44-4ff3300470a10-untitled-16.jpg" alt="বান্দরবানে চলছে পাহাড়ে ওঠার প্রশিক্ষণ।" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  উঁচু উঁচু খাড়া পাহাড় বেয়ে একদল মানুষ ওপরে উঠে যাচ্ছে। সবার সঙ্গেই ভারী 
ব্যাগ-বস্তা। এসবের মধ্যে চাল, সবজি, হাঁড়ি-পাতিলসহ ব্যবহার্য নানা 
জিনিসপত্র। তরুণ এসব আরোহী বিভিন্ন কলেজ-বিশ্ববিদ্যালয়ে পড়ালেখা করছেন। 
কর্মজীবীও আছেন কয়েকজন।<br>১৫ জুন থেকে এভারেস্ট একাডেমির আয়োজনে শুরু হওয়া
 ১২ দিনের বিশেষ প্রশিক্ষণ কোর্স ‘প্রি-বেসিক মাউন্টেরিয়ান ট্রেনিং-২০১২’-এ
 হাতেকলমে এ প্রশিক্ষণ দিয়েছেন দেশের প্রথম এভারেস্টজয়ী মুসা ইব্রাহীম। 
সহপ্রশিক্ষক হিসেবে সঙ্গে ছিলেন লিপটন সরকার, বদরউদ্দীন ওমর ও সিফাত 
ফাহমিদা। ৩০ জনের একটি দলকে পাহাড়ে ওঠার নানা বিষয় শেখানো হয়েছে এ 
প্রশিক্ষণে। ঢাকা বিশ্ববিদ্যালয়ের খেলার মাঠ ও রমনা পার্কে ঢাকার পাঁচ 
দিনের প্রশিক্ষণ শেষে সবাইকে বান্দরবানের দুর্গম এলাকায় নিয়ে যাওয়া হয়। 
বান্দরবানের খুমিপাড়ার পাহাড়ে দেওয়া হয় ছয় দিনের বিশেষ প্রশিক্ষণ। পর্বতে 
আরোহণ ও নামার নিয়ম, দড়ি বেয়ে খাড়া পাহাড়ে নির্বিঘ্নে ওঠা, কোনো পর্বতারোহী
 অসুস্থ হলে ওই মুহূর্তের করণীয়সহ নানা বিষয় শেখানো হয়েছে এ প্রশিক্ষণে।<br>প্রশিক্ষণার্থীরা শিখেছেন হার্নেস, ক্যারাবিনার, জুমার, আইস বুট, ক্র্যাম্পন, আইস অ্যাক্স প্রভৃতি পর্বতারোহণের অনুষঙ্গের ব্যবহার।<br>‘আমার
 অনেক দিনের স্বপ্ন ট্র্যাকিং করব, পাহাড়ে পাহাড়ে ঘুরে বেড়াব। এ বিশেষ 
প্রশিক্ষণের মাধ্যমে সে স্বপ্ন একটুখানি হলেও সত্যি হতে চলেছে।’ বলছিলেন 
প্রশিক্ষণার্থী আসাদুজ্জমান।<br>মাশরুরের ভাষায়, ‘প্রশিক্ষণের চেয়ে সবাই একসঙ্গে পাহাড়ে একটি ঘরে থাকা এবং এখানেই রান্নাবান্নার ব্যাপারটা আমার বেশ ভালো লেগেছে।’<br>পাহাড়ে
 ওঠার এ প্রশিক্ষণের বিষয়ে এভারেস্টবিজয়ী প্রথম বাংলাদেশি মুসা ইব্রাহীম 
বলেন, ‘ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের ২০১৪ সালের মধ্যেই এভারেস্ট 
জয়ের যে টার্গেট, তা অর্জনে এভারেস্ট একাডেমি শিক্ষার্থীদের প্রশিক্ষণ 
দিচ্ছে। এর পাশাপাশি দেশের ভেতরেই তরুণেরা যাতে পাহাড়ে ওঠার টেকনিক্যাল 
বিষয়ে জানতে পারে, সেজন্য এই প্রশিক্ষণ আয়োজন করা হয়েছে। এ প্রশিক্ষণ নিয়ে 
যে কেউ পর্বতারোহণের জন্য নিজেকে প্রস্তুত করতে পারবেন।’<br><br>এভারেস্ট একাডেমি<br>সাঁতার,
 ট্রায়াথন, ম্যারাথন, ট্র্যাকিংসহ অ্যাডভেঞ্চারের নানা বিষয়ে প্রশিক্ষণের 
জন্য যোগাযোগ করা যেতে পারে: এভারেস্ট একাডেমি, ১৪/৪ ইকবাল রোড, 
মোহাম্মদপুর, ঢাকা-১২০৭। ০১৭৬৮৬০৮৮১০।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6f5bfcb1de">
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
	<h4><a href="../../feature/default.php">ফিচার</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="5003881c73ca7.php">মুক্তিযোদ্ধা সন্তানদের জন্য চাকরির সুযোগ</a></li>
                    <li><a href="4ff6f5218079c.php">সাফল্যের সন্ধানে</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.php">সংবাদ ৭১</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="সম্রাট কুমার দে"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>