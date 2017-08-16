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
      <li class="current"><a href="../../international/default.htm">আন্তর্জাতিক</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">বাবরি মসজিদ ধ্বংসে নরসীমা সম্পৃক্ত!</span></h1>
	  <p>
		অনলাইন ডেস্ক <br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-05-15-14-28-4ff5af546223e-babri_masjid.jpg" alt="বাবরি মসজিদ" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <p id="content" style="font-size:18px;line-height:24px;" align="justify">ভারতের
 উত্তর প্রদেশের অযোধ্যায় বাবরি মসজিদ ধ্বংসে দেশটির সাবেক প্রধানমন্ত্রী 
পি ভি নরসীমা রাওয়ের সম্পৃক্ততার অভিযোগ উঠেছে। অভিযোগ আছে, বাবরি মসজিদ 
ধ্বংসের সময়ে পূজায় বসেছিলেন কংগ্রেসের সাবেক এই প্রধানমন্ত্রী। আর বাবরি 
মসজিদ ভাঙার কাজ শেষ হলেই তিনি পূজা শেষ করেন।<br>টাইমস অব ইন্ডিয়ার খবরে 
বলা হয়, মসজিদ ধ্বংসে নরসীমাকে জড়িয়ে এসব তথ্যের সন্নিবেশ করা হয়েছে 
‘বিয়ন্ড দ্য লাইনস’ নামে আত্মজীবনীমূলক একটি বইয়ে। রলি বুকস থেকে শিগগিরই 
বইটি প্রকাশিত হবে। বইটি লিখেছেন ভারতের প্রখ্যাত সাংবাদিক কুলদীপ নায়ার। 
বইয়ে ১৯৯২ সালের ৬ ডিসেম্বর বাবরি মসজিদ ভাঙার দিন ও এর পরের নানা ঘটনার 
বিবরণ দেওয়া হয়েছে।<br>বইয়ে ‘নরসীমা রাও’স গভর্নমেন্ট’ নামে একটি অধ্যায়ে 
কুলদীপ নায়ার জানান, বাবরি মসজিদ ধ্বংসে সমর্থন ছিল নরসীমার। রাষ্ট্রীয় 
স্বয়ং সেবক সংঘ যখন মসজিদ ভাঙতে শুরু করেন তখন তিনি (নরসীমা) পূজায় বসেন। 
আর ভাঙার কাজ শেষ হলে উঠে যান। প্রয়াত সমাজতন্ত্রী নেতা মধু লিমাই তাঁকে 
এসব তথ্য দেন বলে জানান কুলদীপ।<br>এদিকে বাবার বিরুদ্ধে আনা অভিযোগকে 
অসত্য ও অসমর্থনযোগ্য বলে মন্তব্য করেছেন নরসীমার ছেলে পি ভি রাঙ্গা রাও। 
এক বিবৃতিতে তিনি বলেন, ‘কোনোভাবেই আমার বাবা এ ধরনের কাজ করতে পারেন না। 
তিনি বাবরি মসজিদ ভাঙার খবর শুনে মর্মাহত হয়েছিলেন। কারণ, মুসলমানদের প্রতি
 তাঁর যথেষ্ট দরদ ও সমর্থন ছিল। উপরন্তু বাবা আমাদের অনেকবারই বলেছেন এটি 
(বাবরি মসজিদ ধ্বংস) ঘটতে পারে না।’<br>কুলদীপ নায়ারের মতো একজন 
স্বনামখ্যাত সাংবাদিক এ ধরনের বই লেখায় দুঃখ প্রকাশ করে রাঙ্গা বলেন, 
‘কায়েমি স্বার্থ চরিতার্থ করার জন্যই বাবাকে কালিমালিপ্ত করার চেষ্টা করা 
হয়েছে। অথচ আত্মপক্ষ সমর্থনের সুযোগ পাননি তিনি।’<br>বিপরীতে কুলদীপ 
বলেছেন, বাবরি মসজিদ ধ্বংসের সময়ে দাঙ্গা বাঁধলে কয়েকজন জ্যেষ্ঠ সাংবাদিককে
 নিজ বাসায় আমন্ত্রণ জানান নরসীমা। সেখানে উপস্থিত সাংবাদিকদের বাবরি মসজিদ
 ধ্বংস চেষ্টা বন্ধ করতে তাঁর সরকারের উদ্বেগের কথা জানান তত্কালীন 
প্রধানমন্ত্রী। কল্যাণ সিংয়ের নেতৃত্বাধীন রাজ্য সরকার ভেঙে তখন এমনিতেই 
আলোচনায় ছিল কেন্দ্রীয় সরকার। নরসীমা বলেন, উত্তর প্রদেশের মুখ্যমন্ত্রী 
কল্যাণ সিং তাঁকে অসহযোগিতা করেন। এরপর রাতারাতি বাবরি মসজিদের স্থলে একটি 
মন্দির স্থাপনের ব্যাপারে তাঁকে জিজ্ঞেস করা হয়। জবাবে তিনি বলেন, বিশেষ 
রিজার্ভ পুলিশের (সিআরপিএফ) একটি দলকে লক্ষেৗতে পাঠানোর ইচ্ছা থাকলেও বাজে
 আবহাওয়ার কারণে তা সম্ভব হয়নি।<br>কুলদীপ জানান, নরসীমা তাঁকে অযোধ্যার 
কেন্দ্রীয় বাহিনীর নিষ্ক্রিয় থাকার কারণ ব্যাখ্যা করেননি। তবে তৈরি করা 
মন্দির বেশিদিন থাকবে না বলে আশ্বাস দেন। তিনি বলেন, রাওয়ের সরকারকে বাবরি 
মসজিদ ধ্বংসের জন্য সব সময়ই দায়ী করা হয়েছে। উত্সাহব্যঞ্জক বিষয় হলো, পুরো 
বিষয়টি সম্বন্ধে তত্কালীন প্রধানমন্ত্রী সচেতন থাকলেও দৃশ্যত কিছুই করেননি 
তিনি। উপরন্তু জ্যেষ্ঠ সাংবাদিকদের বিষয়টি নিষ্পত্তির কথা বললেও তিনি 
‘সামান্য’ অগ্রগতি হয়েছে বলে জানান। এর মানে দাঁড়ায় সমস্যা সমাধানে উদ্যোগী
 ছিলেন না তিনি। তা ছাড়া বাবরি মসজিদ রক্ষা পায়, এমনটি চাননি বিজেপি নেতা ও
 উত্তর প্রদেশের তত্কালীন মুখ্যমন্ত্রী কল্যাণ সিংও। ফলে ধ্বংস হয়েছিল 
বাবরি মসজিদ যা ছিল হিন্দুত্ববাদী দুটি দল—ভারতীয় জনতা পার্টি (বিজেপি) ও 
রাষ্ট্রীয় সমাজসেবক সংঘের (আরএসএস) যৌথ প্রচেষ্টা। আর এর মাধ্যমে 
ধর্মনিরপেক্ষতার ওপর সর্বশেষ পেরেকটি ঠুকে দেওয়া হয়েছিল।</p>	  </div>
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
			<input type="hidden" name="newsID" value="4ff68d61424d9">
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
	<h4><a href="../../international/default.htm">আন্তর্জাতিক</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6e21066482">‘মৎস্যকন্যাদের অস্তিত্বের প্রমাণ পাওয়া যায়নি’</a></li>
                    <li><a href="4ff6e1b54660f">ন্যাটোর রসদ সরবরাহের পথ খুলে দিচ্ছে পাকিস্তান</a></li>
                    <li><a href="4ff6dfdbddfaa">কনস্টেবলের চিত্রকর্ম দুই কোটি ২৪ লাখ পাউন্ডে বিক্রি</a></li>
                    <li><a href="4ff6df79b36eb">নারীঘটিত অপরাধে শীর্ষে পশ্চিমবঙ্গ</a></li>
                    <li><a href="4ff68ea422dc5">পরিচারিকার ধমক খেলেন ক্যামেরন!</a></li>
                    <li><a href="4ff68dd2048be">পানিসম্পদ ব্যবস্থাপনায় সহযোগিতা জরুরি</a></li>
                    <li><a href="4ff68b7c9f99b">সিরিয়ার ২৪ লাখ ই-মেইল প্রকাশ করবে উইকিলিকস</a></li>
                    <li><a href="4ff5942476">‘ঈশ্বরকণা’ পাওয়া গেছে?</a></li>
                    <li><a href="4ff5941744">ভারতের প্রথম প্রেসিডেন্টের ব্যাংক হিসাব এখনো সচল!</a></li>
                    <li><a href="4ff5940b5b">সরকারের সঙ্গে দ্বন্দ্ব: তিউনিসিয়া গণমাধ্যম কমিশন প্রধানের পদত্যাগ</a></li>
                    <li><a href="4ff593ba48">এমিরেটসের নতুন গন্তব্য স্পেনের বার্সেলোনা</a></li>
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