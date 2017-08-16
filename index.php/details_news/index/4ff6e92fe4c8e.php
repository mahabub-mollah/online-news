﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <h1><span style="color:maroon;">অভ্যন্তরীণ বিষয়ে হস্তক্ষেপ ষড়যন্ত্রমূলক: সুরঞ্জিত</span></h1>
	  <p>
		স্টাফ করেসপন্ডেন্ট<br/><br/><hr/>	  </p>
	  	  <div style="font-size:12pt;">
	  <strong>ঢ‍াকা:</strong> বিশ্বব্যাংক ও হিউম্যান রাইটস ওয়াচের বক্তব্য ষড়যন্ত্রমূলক বলে দাবি করেছেন দপ্তরবিহীন মন্ত্রী সুরঞ্জিত সেনগুপ্ত।<br><br>তিনি
 বলেন, “পদ্মাসেতুর বিষয়ে বিশ্বব্যাংকের সিদ্ধান্ত এবং হিউম্যান রাইটস 
ওয়াচের দেশের অভ্যন্তরীণ বিষয়ে হস্তক্ষেপ ষড়যন্ত্র ও দুরভিসন্ধিমূলক।”<br><br>রাজধানীর
 পাবলিক লাইব্রেরি মিলানয়াতনে বঙ্গবন্ধু সাংস্কৃতিক জোট আয়োজিত শেখ হাসিনা ও
 তার পরিবারের বিরুদ্ধে দেশি-বিদেশি ষড়যন্ত্র বিষয়ে এক আলোচনা অনুষ্ঠানে 
তিনি এসব কথা বলেন।<br><br>সুরঞ্জিত বলেন, “জাতীয় ও আন্তর্জাতিক রক্তচক্ষু 
উপেক্ষা করে আমরা যখন যুদ্ধাপরাধের বিচার কাজে এগিয়ে যাচ্ছি, তখন তারা 
আন্তর্জাতিকভাবে স্নায়ুচাপ সৃষ্টি করে ব্যর্থ হয়েছে। আর এখন তারা আমাদের 
দেশের মাটিতে এসে কথা বলার এটাকেই প্রকৃত সময় হিসেবে বেছে নিয়েছে।”<br><br>তিনি
 বলেন, “তারা যুদ্ধাপরাধের বিচার সম্পর্কে এবং ৠাব বন্ধের কথা বলছে। কিন্তু
 একটি স্বাধীন দেশে এসে তারা এ বিষয়ে কথা বলার কে। ৠাব যদি আইন না মানে 
সেটা দেখবে সুপ্রিম কোর্ট। এ বিষয়ে তাদের কথা বলা মানে অভ্যন্তরীণ বিষয়ে 
হস্তক্ষেপ করা।”<br><br>সুরঞ্জিত আরও বলেন, “পদ্মাসেতুর বিষয়ে বিশ্বব্যাংক 
যে সিদ্ধান্ত নিয়েছে, সেটা ষড়যন্ত্রের অংশ। বিশ্বব্যাংক দুর্নীতির কথা বলে,
 কিন্তু তারা কি দুর্নীতির উর্ধ্বে। বিদেশি একটি পত্রিকায় এসেছে তাদের 
বিরুদ্ধে হাজার হাজার কোটির টাকার দুর্নীতির কথা। পৃথিবীর সবাই জানে তাদের 
দুর্নীতির কথা। তারা পদ্মাসেতু নিয়ে পারসেপশন করাপশনের কথা বলছে। এ নিয়ে 
কয়েকজন আমলা ও দায়িত্বশীলকে অপসারণ করা হয়েছে। এরপরও তাদের মন ভরেনি। তাহলে
 এটা কি দুর্নীতি প্রতিরোধ না অন্য কিছু।”<br><br>বিশ্বব্যাংকের উদ্দেশ্যে 
তিনি বলেন, “দেশের মানুষ আপনাদের চেনে। বায়বীয় চাপ দিয়ে শেখ হাসিনাকে তার 
কাজ থেকে সরানো যাবে না। যুদ্ধাপরাধীদের বিচার বা অন্য যেসব মামলা আছে 
সেগুলোর সুষ্ঠু নিষ্পত্তি হবেই।”<br><br>বঙ্গবন্ধু সাংস্কৃতিক জোটের সাধারণ
 সম্পাদক অরুণ সরকার রানার সভাপতিত্বে আরও বক্তব্য রাখেন আইন প্রতিমন্ত্রী 
অ্যাড. কামরুল ইসলাম, ওয়ার্ল্ড ইউনিভার্সিটির ভিসি আব্দুল মান্নান, মহানগর 
আওয়ামী লীগের সাংগঠনিক সম্পাদক শাহে আলম মুরাদ প্রমুখ।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6e92fe4c8e">
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
                    <li><a href="4ff6e8ee6fa1a">প্রবাসীদের জন্য কিছুই করেনি সরকার: বি চৌধুরী</a></li>
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