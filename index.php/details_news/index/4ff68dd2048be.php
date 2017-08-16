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
      <h1><span style="color:maroon;">পানিসম্পদ ব্যবস্থাপনায় সহযোগিতা জরুরি</span></h1>
	  <p>
		কূটনৈতিক প্রতিবেদক<br/>তারিখ: ০৫-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-05-13-12-26-4ff592ba6d20a-x-indian-president-02.jpg" alt="এ পি জে আবদুল কালাম আজাদ" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  ভারতের সাবেক রাষ্ট্রপতি এ পি জে আবদুল কালাম বলেছেন, এ অঞ্চলের মানুষের 
প্রয়োজনেই দেশগুলোকে পানিসম্পদ ব্যবস্থাপনায় সহযোগিতা গড়ে তুলতে হবে। আজ 
বৃহস্পতিবার দুপুরে রাজধানীর সিরডাপ মিলনায়তনে তিনি এক সংবাদ সম্মেলনে এ 
মন্তব্য করেন। এশিয়া ও প্রশান্ত মহাসাগরীয় অঞ্চলের পল্লি উন্নয়নের সমন্বিত 
কেন্দ্রের (সিরডাপ) ৩৩তম প্রতিষ্ঠাবার্ষিকীর বক্তৃতা দেওয়ার পর তিনি 
সাংবাদিকদের সঙ্গে কথা বলেন।<br>সিরডাপের প্রতিষ্ঠাবার্ষিকীতে যোগ দিতে 
গতকাল বুধবার ঢাকায় এসেছিলেন এ পি জে আবদুল কালাম। এ সফর শেষে তিনি আজ 
সন্ধ্যায় ঢাকা ছেড়ে গেছেন।<br>আঞ্চলিক সহযোগিতার ব্যাপারে তিনি কতটা 
আশাবাদী জানতে চাইলে ভারতের সাবেক রাষ্ট্রপতি বলেন, ‘অবশ্যই। আমি তো মনে 
করি, পরিবেশ বিপর্যয় ঠেকাতে বাংলাদেশ, ভারতসহ এ অঞ্চলের দেশগুলো 
প্লাস্টিকের বিকল্প হিসেবে পাটের সম্ভাবনাকে কাজে লাগাতে সহযোগিতা বাড়াবে।’<br>পানিসম্পদ
 খাতে সহযোগিতা প্রসঙ্গে জানতে চাইলে আবদুল কালাম বলেন, ‘পানিসম্পদ 
ব্যবস্থাপনায় সহযোগিতা খুব জরুরি। আমরা প্রচুর পানি অপচয় করছি। অথচ বিপুল 
সংখ্যক মানুষের প্রয়োজনে পানি ধরে রাখার কোনো বিকল্প নেই। তাই পানির 
সদ্ব্যবহারে প্রতিবেশী দেশগুলোর একসঙ্গে কাজ করা উচিত।’<br>বাংলাদেশে আসতে 
পেরে সাংবাদিকদের কাছে নিজের উচ্ছ্বাস প্রকাশ করেছেন ভারতের একাদশতম 
রাষ্ট্রপতি। বাংলাদেশের আর্থ-সামাজিক অগ্রগতির প্রশংসা করে তিনি বলেন, 
‘একটি দেশের অর্থনীতিই বলে দেয় দেশটি কোন পথে চলছে। বাংলাদেশ ছয় থেকে সাত 
শতাংশ হারে প্রবৃদ্ধি অব্যাহত রেখে এগোচ্ছে। কৃষি, মত্স্যসহ বিভিন্ন খাতে 
অগ্রগতির আভাষ বেশ চমকপ্রদই বটে।’<br>ভারতের পারমাণবিক কর্মসূচির জড়িত থেকে
 এ অঞ্চলে পারমাণবিক অস্ত্রের বিস্তারে ভূমিকার জন্য তাঁর কোনো অপরাধবোধ 
আছে কি না জানতে চাইলে, ভারতের সাবেক এই রাষ্ট্রপতি নিজের অবস্থান ব্যাখ্যা
 করে বলেন, শান্তিপূর্ণ ব্যবহারের উদ্দেশ্যেই তিনি কৃত্রিম উপগ্রহ গবেষণায় 
কাজ করেছেন। আবার প্রতিবেশী দেশগুলোতে ক্ষেপণাস্ত্র থাকায় এ কাজের 
গবেষণাতেও যুক্ত হতে হয়েছে। তবে ক্ষেপণাস্ত্র গবেষণায় ভারত তুলনামূলকভাবে 
কম অর্থ খরচ করে বলে দাবি করেন আবদুল কালাম।<br>প্রচলিত জ্বালানির বিকল্প 
হিসেবে নতুন জ্বালানি সম্ভাবনা কতটা জানতে চাইলে আবদুল কালাম সাংবাদিকদের 
বলেন, ‘সারা বিশ্বে বায়ুমণ্ডলে প্রতিবছর ৩০ বিলিয়ন টন কার্বন ডাই অক্সাইড 
গ্যাস নির্গত হচ্ছে। এ জন্যই সৌরশক্তি, জলবিদ্যুত্, বায়ু-বিদ্যুত্, পরমাণু 
শক্তি ও জৈব জ্বালানির ওপর আমি জোর দিচ্ছি। নবায়নযোগ্য শক্তির ব্যবহার 
বাড়তে থাকায় ২০৩০ সালের মধ্যে জীবাশ্ম জ্বালানির ব্যবহার ২০ থেকে ৫০ শতাংশ 
কমবে বলেই আমার বিশ্বাস।’<br>প্রকাশের অপেক্ষায় থাকা তাঁর সর্বশেষ গ্রন্থ 
‘টার্নিং পয়েন্ট: আ জার্নি থ্রু চ্যালেঞ্জেস’কে প্যান্ডোরা বক্স নয় 
পোস্টবক্স হিসেবে অভিহিত করেছেন এ পি জে আবদুল কালাম। তাঁর ভাষায়, বইটি 
পড়লেই জ্ঞানের জন্য কঠোর পরিশ্রমের প্রতিফলন চোখে পড়বে।	  </div>
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
			<input type="hidden" name="newsID" value="4ff68dd2048be">
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
                    <li><a href="4ff68d61424d9">বাবরি মসজিদ ধ্বংসে নরসীমা সম্পৃক্ত!</a></li>
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