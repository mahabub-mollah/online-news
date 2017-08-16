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
      <li class="current"><a href="../../politics/default.htm">রাজনীতি</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">প্রবাসীদের জন্য কিছুই করেনি সরকার: বি চৌধুরী</span></h1>
	  <p>
		স্পেশাল করেসপন্ডেন্ট<br/><br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/Badrodojz20120704202918.jpg" alt="সাবেক রাষ্ট্রপতি অধ্যাপক এ কিউ এম বদরুদ্দোজা চৌধুরী" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <strong>ঢাকা:</strong> বিকল্পধারা বাংলাদেশের প্রেসিডেন্ট সাবেক 
রাষ্ট্রপতি অধ্যাপক এ কিউ এম বদরুদ্দোজা চৌধুরী বলেছেন,&nbsp; দুর্নীতিবাজ সরকার
 প্রবাসীদের পাঠানো কষ্টার্জিত বৈদেশিক মুদ্রা কোথায় খরচ করছে, দেশবাসী তা 
জানে না। এক কথায় এই সরকার প্রবাসীদের কল্যাণে কিছুই করেনি।&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br><br>তিনি
 বুধবার রাজধানীর বারিধারার বিকল্পধারার প্রেসিডিয়াম কার্যালয়ে দলের 
প্রবাসী নেতাদের সঙ্গে আলোচনার সময় এসব কথা বলেন। প্রবাসী নেতাদের মধ্যে 
ছিলেন লন্ডন প্রবাসী বিকল্পধারা যুক্তরাজ্য শাখার সভাপতি আলহাজ্ব মো. 
অহিদউদ্দিন ও বিকল্পধারার প্রবাসী বিষয়ক সম্পাদক নিউইয়র্ক প্রবাসী মুনিরুল 
ইসলাম। &nbsp;<br><br>বি চৌধুরী বলেন, এই সরকার দেশ পরিচালনায় ব্যর্থ হয়েছে। 
জাতীয় আয়ের বিশাল একটি অংশ আসে প্রবাসীদের কষ্টার্জিত বৈদেশিক মুদ্রার 
মাধ্যমে। কিন্তু সরকার তাদের পাঠানো অর্থ দিয়ে কি করছে, দেশবাসী তা জানে 
না।<br><br>প্রবাসীদের কল্যাণে সরকার কোনো পদক্ষেপই নেয়নি অভিযোগ করে তিনি 
বলেন, এই সরকার দিন দিন দেশকে ধ্বংসের দিকে ঠেলে দিচ্ছে। বিশ্বব্যাংকের 
ঋণচুক্তি বাতিলই এই সরকারের সীমাহীন দুর্নীতির একটি জলন্ত উদাহরণ।<br><br>আগামী
 নির্বাচন নির্দলীয় তত্ত্বাবধায়ক সরকারের অধীনে অনুষ্ঠানের দাবি 
পুনর্ব্যক্ত করে তিনি এ বিষয়ে জনমত গঠনের জন্য প্রবাসীদের প্রতি আহ্বান 
জানান।&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br><br>বিকল্পধারার যুক্তরাজ্য শাখার সভাপতি অহিদউদ্দিন 
বলেন, দেশে আসলে তারা নিরাপত্তাহীনতায় ভোগেন। নানাভাবে তাদের হয়রানি করা 
হয়। তিনি বলেন, পদ্মা সেতু নিয়ে এই সরকারের দুর্নীতি বিদেশে দেশের 
ভাবমূর্তি বিনষ্ট করেছে। এই অপরাধে সাবেক যোগাযোগমন্ত্রী আবুল হোসেন, 
অর্থমন্ত্রী এবং পররাষ্ট্রমন্ত্রীর পদত্যাগ করা উচিত বলে তিনি মন্তব্য 
করেন।<br><br>অহিদউদ্দিন বলেন, সরকার তাদের প্রেরিত হাজার হাজার কোটি টাকা 
দিয়ে কি করেছে, প্রবাসীরা তার হিসাব চান। অর্থনৈতিকভাবে যেমন তেমনি 
রাজনৈতিকভাবেও প্রবাসীদের বঞ্চিত করা হয়েছে অভিযোগ করে তিনি বলেন, এই সরকার
 তাদের নাগরিক অধিকার ভোটাধিকার থেকেও বঞ্চিত করেছে।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6e8ee6fa1a">
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
	<h4><a href="../../politics/default.htm">রাজনীতি</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6ea26a515a">শবে বরাতে জিয়ার মাজারে খালেদা</a></li>
                    <li><a href="4ff6e9c898ecc">‘স্বার্থান্বেষী মহলের ষড়যন্ত্রেই বিশ্বব্যাংকের পদ্মাসেতু ঋণ প্রত্যাহার’</a></li>
                    <li><a href="4ff6e97d4490e">নৌপুলিশ গঠনের সিদ্ধান্ত নিয়েছে সরকার: স্বরাষ্ট্র প্রতিমন্ত্রী</a></li>
                    <li><a href="4ff6e92fe4c8e">অভ্যন্তরীণ বিষয়ে হস্তক্ষেপ ষড়যন্ত্রমূলক: সুরঞ্জিত</a></li>
                    <li><a href="4ff6e89df12e8">বঙ্গবন্ধুর ‘অসমাপ্ত আত্মজীবনী’ বইয়ের প্রকাশনা উৎসব করছে আওয়ামী লীগ</a></li>
                    <li><a href="4ff6e84daf783">ছাত্র ইউনিয়ন ঢাবি সংসদের সম্মেলন শুরু</a></li>
                    <li><a href="4ff6e8097ea6e">পদ্মা সেতু দুর্নীতিতে আ’ লীগের রাজনৈতিক মৃত্যু হবে : হান্নান শাহ</a></li>
                    <li><a href="4ff6e7a14dace">বিশ্বব্যাংকের তোয়াক্কা করি না: সাজেদা চৌধুরী</a></li>
                    <li><a href="4ff5944c1e">পদ্মাসেতু ইস্যুতে আ.লীগের পাশে দাঁড়ান: বিএনপিকে নাসিম</a></li>
                    <li><a href="4ff594412d">‘বিদেশিদের এজেন্ডা বাস্তবায়নে ষড়যন্ত্র করছে বিএনপি-জামায়াত’</a></li>
                    <li><a href="4ff5943435">আ’লীগ যেখানে ব্যর্থ, বিএনপি সেখানে সফল: হান্নান শাহ</a></li>
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