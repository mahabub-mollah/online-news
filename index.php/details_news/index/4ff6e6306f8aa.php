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
      <h1><span style="color:maroon;">এ বছরই গোললাইন প্রযুক্তির ব্যবহার</span></h1>
	  <p>
		অনলাইন ডেস্ক <br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/goal-line-technology-image.jpg" alt="গোললাইন প্রযুক্তি" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  ফুটবলে গোললাইন প্রযুক্তি ব্যবহারের অনুমোদন দিয়েছেন নীতি-নির্ধারকেরা। এর 
মধ্য দিয়ে এই প্রযুক্তির ব্যবহার নিয়ে প্রায় এক দশক ধরে চলা বিতর্কের অবসান
 ঘটল।<br>জুরিখে গতকাল বৃহস্পতিবার ফিফার কার্যনির্বাহী পরিষদের বৈঠক শেষে 
ফিফা সভাপতি জেরোম ভালকে সাংবাদিকদের বলেছেন, টোকিওতে অনুষ্ঠেয় ক্লাব 
বিশ্বকাপ (এ বছরের ডিসেম্বর), কনফেডারেশনস কাপ (২০১৩ সাল) ও ২০১৪ সালের 
বিশ্বকাপে গোললাইন প্রযুক্তি ব্যবহারের সিদ্ধান্ত নিয়েছি আমরা।’<br>দুই বছর
 ধরে গোললাইনে প্রযুক্তির ব্যবহার নিয়ে যুক্তি-তর্কের লড়াইটা। ২০১০-এর 
বিশ্বকাপের দ্বিতীয় রাউন্ডের ম্যাচে জার্মানির বিপক্ষে ইংল্যান্ডের ফ্রাঙ্ক
 ল্যাম্পার্ডের একটি শট গোললাইনের ভেতরে পড়লেও তা এড়িয়ে গিয়েছিলেন রেফারি। 
টিভি-রিপ্লেতে দেখা যায়, ওই বলটি স্পষ্টতই গোললাইন অতিক্রম করেছিল। সেই 
থেকে ফুটবলের প্রযুক্তির ব্যবহারের বিতর্কটা জোরাল হয়।<br>ইন্টারন্যাশনাল 
ফুটবল অ্যাসোসিয়েশন বোর্ড বা আইএফএবি গত মার্চ মাসেই ফুটবলে গোললাইন 
প্রযুক্তি ব্যবহার নীতিগতভাবে অনুমোদন করেছিল। তবে তারা চূড়ান্ত 
সিদ্ধান্তের ক্ষেত্রে আরও কিছুটা পরীক্ষা-নিরীক্ষার সিদ্ধান্ত নেয়। এ জন্য 
দুটি প্রতিষ্ঠানকে দায়িত্ব দেওয়া হয়েছিল গোললাইন প্রযুক্তির ক্ষেত্রে 
বিস্তারিত পরীক্ষা-নিরীক্ষার। একটি ব্রিটিশ ও আরেকটি ডেনিশ-জার্মান 
প্রতিষ্ঠান এত দিন ধরে গোললাইন প্রযুক্তির ব্যাপারে বিভিন্ন পরীক্ষা চালিয়ে
 গতকাল ফিফার বৈঠকে চূড়ান্ত প্রতিবেদন পেশ করে।<br>নিজেরা ভুক্তভোগী হওয়ার 
কারণেই বোধহয়, গোললাইন প্রযুক্তির ব্যাপারে সর্বাত্মক সমর্থন আছে ইংলিশ 
ফুটবল অ্যাসোসিয়েশনের। একই সঙ্গে উত্তর আয়ারল্যান্ড, ওয়েলস ও স্কটল্যান্ডও এ
 ব্যাপারে ইংল্যান্ডের পাশে রয়েছে। ২০১০ সালের বিশ্বকাপের সময় গোললাইন 
প্রযুক্তি নিয়ে ওঠা বিতর্কের সময় ফিফার সভাপতি ব্যাপারটির বিরুদ্ধাচরণ 
করলেও সদ্যসমাপ্ত ইউরোয় ইউক্রেন-ইংল্যান্ড ম্যাচের পর গোললাইন প্রযুক্তির 
পক্ষে কথা বলেন। সেই ম্যাচে ইউক্রেনের একটি গোল রেফারির চোখ এড়িয়ে যাওয়ায় 
বাতিল হয়ে যায়। গোললাইনের ভেতর থেকেই বল ফিরিয়ে দেন ইংলিশ ডিফেন্ডার জন 
টেরি। সেই ম্যাচের পর ফিফার সভাপতি বলেছিলেন, ‘আজ রাতের পর থেকে ফুটবলে 
গোললাইন প্রযুক্তির ব্যবহার আবশ্যিক হয়ে গেল।’<br>গোললাইন প্রযুক্তির 
ক্ষেত্রে ফিফার সবচেয়ে বড় প্রতিদ্বন্দ্বী উয়েফা। উয়েফা প্রধান ও ফরাসি 
ফুটবল কিংবদন্তি মিশেল প্লাতিনিতো কিছুদিন আগে ফুটবলে গোললাইন প্রযুক্তির 
ব্যবহারের বিরুদ্ধে রীতিমতো হুংকারই দিয়েছিলেন। তিনি বলেছিলেন, গোললাইন 
প্রযুক্তি ব্যবহার করলে অনেক বিষয়ে জটিলতা বাড়বে। তখন সেসব জটিলতার সমাধান 
করতে কয়টা প্রযুক্তির ব্যবহার হবে? তিনি আরও বলেছিলেন, ফিফা গোললাইন 
প্রযুক্তি চালু করলেও তিনি যদি কোনো দিন ফিফার সভাপতি হতে পারেন, তাহলে 
তিনি তা বাতিল করবেন। রয়টার্স।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6e6306f8aa">
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
                    <li><a href="4ff6e5b5863c0">এবার রাহুলকে নিয়ে বিতর্কে চ্যাপেল</a></li>
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