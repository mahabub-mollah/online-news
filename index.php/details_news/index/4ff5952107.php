<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>৭১ সংবাদ</title>
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
      <h1><a href="../../../default.htm"><strong> ৭১ সংবাদ</strong></a></h1>
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
      <form action="http://www.localhost.info/projects/livenews/index.php/new_search" method="post">
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
      <h1><span style="color:maroon;">অনিয়মের শিকার ডলার মাহমুদ!</span></h1>
	  <p>
		স্পোর্টস করেসপন্ডেন্ট<br/><br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/dollar-sm20120704210519.jpg" alt="পেসার ডলার মাহমুদ" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <strong>ঢাকা:</strong>
 একসময় স্বপ্নের জগতে ক্রিকেট খেলতেন পেসার ডলার মাহমুদ। ক্রিকেট ঘোরে 
গোল্লায় যেতে বসেছিলো পড়ালেখা। ছেলের ওই অবস্থা দেখে ডলারকে সৈনিকে ভর্তি 
করে দিতে চেয়েছিলেন তার বাবা। পেস বোলার ডলার মাহমুদের সাক্ষাৎকারটি তুলে 
ধরা হলো বাংলানিউজের পাঠকদের জন্য।&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br><br><strong>৭১ সংবাদ:</strong> জাতীয় দল থেকে স্লিপ করলেন কেন?<br><br><strong>ডলার:</strong>
 অনেক কষ্ট আছে, বলা যায় না। বললে হিতে বিপরীত হবে। আমার সঙ্গে অনিয়ম 
হয়েছে। যতটা সুযোগ দেওয়া উচিৎ ছিলো আমি তা পাইনি। স্কোয়াডে নিয়ে খেলায়নি। 
বসে থেকে তো কোনো কিছু প্রমাণ করার থাকে না। ফলে অন্যরা আমাকে টপকে জাতীয় 
দলে ঢুকে পড়েছে। যাই হোক আমার কাজ হচ্ছে ভালো খেলা। জাতীয় লিগে ৪০ উইকেট 
পেয়েছি। সে জন্য এবার ‘এ’ দলের প্রাথমিক ক্যাম্পে ডেকেছে। দেখা যাক সুযোগ 
কাজে লাগাতে পারি কি না।<br><br><strong>বাংলানিউজ</strong>: আপনার সঙ্গে জাতীয় দল নির্বাচকরা কী অনিয়ম করছেন?<br><br><strong>ডলার:</strong>
 সাকিব, তামিম, মুশফিক, প্রথম দিকে সমস্যায় পড়েছে। এখন ভালো অবস্থায় আছে 
তারা। বিশ্বমানের ক্রিকেটার। আমাকে সুযোগ দেওয়া হলে আরও প্রমাণ করতে 
পারতাম। আমি সুযোগটা কম পেয়েছি। জাতীয় দলে এখন যারা পেসার আছেন তাদের অনেক 
সুযোগ দেওয়া হচ্ছে। আমি এক ম্যাচ খারাপ খেললে বাদ পড়েছি। কিন্তু বর্তমানে 
যারা আছে তারা সুযোগ পেয়েছে। আমি তো জিম্বাবুয়েতে ভালোই খেলেছিলাম। তাহলে 
কেন পরের সিরিজগুলোকে বসিয়ে রাখা হয়েছে।<br>&nbsp;<br><strong>বাংলানিউজ</strong>: ক্রিকেটার হওয়ার পেছনের ঘটনা?<br><br><strong>ডলার:</strong>
 যখন থেকে ক্রিকেট খেলা দেখি তখন থেকে কল্পনার জগতের স্টেডিয়ামে খেলতাম। 
চিন্তা করতাম সবাই আমার খেলা দেখছে। তারপরে যখন মহল্লায় খেলতাম তখন সবাই 
বলতো ভালো বল করিস। ঢাকায় গিয়ে দেখ কিছু হয় কি না। আমার ভাইয়ার একজন বন্ধুর
 মাধ্যমে গোলাম নওশাদ প্রিন্স ভাইয়ের কাছ থেকে সাহায্য পেয়েছিলাম। প্রিন্স 
ভাই একদিন বললেন দেখা করতে। তিনি অনূর্ধ্ব-১৭ দলের বাছাই ক্যাম্পে ঢুকিয়ে 
দেন। বলে দেন এখন থেকে আমার দায়িত্ব শেষ। এখানকার সবাই পারফরমার, তোমাকে 
প্রমাণ করতে হবে। যদি তুমি ওপরে উঠতে পারো উঠবে। কোচ আমাকে পছন্দ করলেন। 
এরপর ১৭, ১৯ দলে খেলে জাতীয় দলে ঢুকেছি।<br><br><strong>বাংলানিউজ:</strong> আপনি ভিতু না সহাসী ক্রিকেটার?<br><br><strong>ডলার:</strong> ভিতু হলে ক্রিকেটার হওয়া যায় না। ভিতু বলা যাবে না আমি সাহসী। সাহস আছে বলে এই পর্যন্ত এসেছি। ভিতু হলে তো গ্রামে পড়ে থাকতাম।<br><br><strong>বাংলানিউজ:</strong> ক্রিকেটার না হলে কি হতেন?<br><br><strong>ডলার:</strong>
 হাসি..। আর্মি হতাম। লেখাপড়ায় খুব ভালো তো! মানে লেখাপড়ায় ভালো ছিলাম না 
দেখে আব্বা রাগ করে বলেছিলেন, সৈনিকে ভর্তি করে দেবেন। দেখতে লম্বা ছিলাম, 
সৈনিকে হয়তো নিয়ে নিতো। ভাগ্য ভালো ক্রিকেট খেলতে ঢাকায় চলে এসেছিলাম।<br><br><strong>৭১ সংবাদ:</strong> প্রেমিকার সম্পর্কে দুর্নাম করতে পারবেন?<br><br><strong>ডলার:</strong> তাহলে তো চলে যাবে। খুশি হয় সেগুলো বলি, ও খুব ভালো। কি সুন্দর কাটছে আমাদের। একবছরের প্রেম, তাড়াতাড়ি বিয়ে করে ফেলবো।<br><br><strong>বাংলানিউজ:</strong> ক্রিকেটার হওয়ার পরে কী মেয়েদের নজরে এসেছেন?<br><br><strong>ডলার:</strong>
 আগে মেয়েদের সঙ্গে কথা বলতে পারতাম না। লজ্জা পেতাম। ক্রিকেটার হওয়ার পর 
লজ্জা ভেঙ্গে গেছে। এখন লজ্জা পাইনা। দেখলাম লজ্জা পেলে লস। যে কোনো মেয়ের 
সঙ্গে কথা বলতে পারি। &nbsp;<br><br><strong>বাংলানিউজ:</strong> মাশরাফিকে দেখে হিংসে হতো?<br><br><strong>ডলার:</strong>
 হিংসে হয় না। উনার প্রতি সব সময় সম্মান আছে। দু’জন এক সঙ্গে বোলিং করেছি। 
আবারও দু’জনে একসঙ্গে বল করতে চাই। অনেক দিন ধরে যেন তা করতে পারি সে 
চেষ্টা করবো।<br><br><strong>বাংলানিউজ:</strong> টেস্ট ক্রিকেটার হবেন কবে?<br><br><strong>ডলার</strong>:
 টেস্টে স্কিল শো করার খুব সুযোগ থাকে। ওয়ানডে এবং টি-টোয়েন্টিতে 
ব্যাটসম্যানরা আক্রমাণাত্মক থাকে। কিন্তু টেস্টে সোজা বল করলে 
ব্যাটসম্যানরা খেলবে না। বাজে বল চায় তারা। চারদিনের ম্যাচ খেলতে আমার খুব 
ভালো লাগে। ‘এ’ দলে সুযোগ পেলে টেস্টে ঢোকার চেষ্টা করবো। &nbsp;<br><br><strong>বাংলানিউজ:</strong> কোনো ব্যাটসম্যানকে রক্তাক্ত করেছেন?<br><br><strong>ডলার:</strong> পাইলট ভাইয়ের আঙ্গুলে ফ্যাকচার করে দিয়েছি। আরও অনেককে আঘাত করেছি। সবগুলো মনে নেই।<br><br><strong>বাংলানিউজ:</strong> সেরা একটা ইনিংস বলেন?<br><br><strong>ডলার:</strong> মহারাষ্ট্রের বিপক্ষে বগুড়ায় ৭৮ রান করেছিলাম। মনে রাখার মতো খেলেছিলাম।<br><br><strong>বাংলানিউজ:</strong> বোলিং স্পেল?<br><br><strong>ডলার:</strong> রাজশাহীর সঙ্গে জাতীয় লিগে হ্যাট্রিকসহ সাত উইকেট। জিম্বাবুয়েতে চার উইটেক।	  </div>
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
        <form id="commentForm" action="http://www.localhost.info/projects/livenews/index.php/comments" method="post">
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
			<input type="hidden" name="newsID" value="4ff5952107">
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
		            <li><a href="4ff6e6966f79b.php">অবসরের পরিকল্পনা নেই টেন্ডুলকারের</a></li>
                    <li><a href="4ff6e6306f8aa.php">এ বছরই গোললাইন প্রযুক্তির ব্যবহার</a></li>
                    <li><a href="4ff6e5b5863c0.php">এবার রাহুলকে নিয়ে বিতর্কে চ্যাপেল</a></li>
                    <li><a href="4ff6e5381bd3c.php">পাক-ভারত সিরিজ নিয়ে আশাবাদ</a></li>
                    <li><a href="4ff6e4d095873.php">উইম্বলডনের ফাইনালে সেরেনা</a></li>
                    <li><a href="4ff6e45fb8777.php">দুজনের বন্ধুত্ব এবং মরিনহো...</a></li>
                    <li><a href="4ff6e3a1cdda5.php">ইনিয়েস্তার বিয়ে</a></li>
                    <li><a href="4ff6e32ff01e6.php">টটেনহামে উচ্ছ্বসিত ভিলাস-বোয়াস</a></li>
                    <li><a href="4ff59517ec.php">বিশ্রামে শচীন, ফিরলেন শেবাগ ও জহির</a></li>
                    <li><a href="4ff5950939.php">স্পেনের চেয়ে সেরা সত্তরের ব্রাজিল: পেলে</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">৭১ সংবাদ</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumar dey">সম্রাট কুমার দে
    </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>