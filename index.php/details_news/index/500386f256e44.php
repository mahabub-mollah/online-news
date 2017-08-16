<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>বাংলা নিউজ ২৪</title>
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
      <h1><a href="../../../default.htm"><strong>বাংলা নিউজ ২৪</strong></a></h1>
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
      <li class="current"><a href="../../national/default.htm">জাতীয়</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</span></h1>
	  <p>
		জনাব আলী, রাবি প্রতিনিধি<br/>তারিখ: ১৬-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/Rajshahi University20120716040639.jpg" alt="রাবি" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <strong>রাবি:</strong> রাজশাহী বিশ্ববিদ্যালয়ে ছাত্রলীগের দু’গ্রুপের 
গোলাগুলিতে মাথায় গুলিবিদ্ধ সাধারণ সম্পাদক গ্রুপের ছাত্রলীগকর্মী সোহেল 
রানাকে ঢাকায় আনা হচ্ছে। তার অবস্থা আশঙ্কাজনক বলে সর্বশেষ খবরে জানা গেছে।<br><br>&nbsp;রোববার
 রাত ৩টা ২০ মিনিটে সোহেলের সঙ্গে থাকা ছাত্রলীগের সাধারণ সম্পাদক আবু 
হোসেন বিপু বাংলানিউজকে জানান, তারা ঢাকার পথে নাটরে রয়েছেন। সোহেলের 
অবস্থা মোটেও ভালো নয় বলে জানান তিনি। &nbsp;<br><br>এ বিষয়ে রাবি ছাত্রলীগের 
সাংগঠনিক সম্পাদক তৌহিদ আল তুহিন (সভাপতি গ্রুপ)বাংলানিউজকে জানান, 
সন্ধ্যার দিকে তিনি ক্যাম্পাসের বাহিরে ছিলেন। সভাপতির ফোন পেয়ে রাতে 
ক্যাম্পাসে ফিরে আসেন। সভাপতিকে নিয়ে অশ্লীল ভাষায় গালিগালাজ করলে সম্পাদক 
গ্রুপের তাকিমের সঙ্গে তার বাগবিতণ্ডা হয়। এ সময় তাকিম মাদার বক্স হলের 
সভাপতির কক্ষে (২৩৮ নংকক্ষ) ইট-পাটকেল ছুঁড়তে থাকে। এর প্রতিবাদ করলে সে 
দলবল নিয়ে তাদের ওপর হামলা চালায়।<br><br>সোহেল গুলিবিদ্ধ হওয়ার কথা অস্বীকার করে তুহিন জানান, তার মাথায় ইটের আঘাত লেগেছে, গুলি লাগেনি।<br><br>রাত
 ১টার দিকে রাজশাহী মেডিক্যাল কলেজ হাসপাতাল থেকে রাবি ছাত্রলীগের সাধারণ 
সম্পাদক আবু হুসাইন বাংলানিউজকে জানান, সোহেলের বাম চোখের ওপরে গুলি 
লেগেছে। তার অবস্থা আশঙ্কাজনক।<br><br>সোহেলের গুলিবিদ্ধ হওয়ার কথা স্বীকার
 করে মতিহার থানার ভারপ্রাপ্ত কর্মকর্তা (ওসি) আনিছুর রহমান বাংলানিউজকে 
জানান, দু’পক্ষের সংঘর্ষের খবর পেয়ে পুলিশ ঘটনাস্থলে গিয়ে পরিস্থিতি 
নিয়ন্ত্রণে আনে।ক্যাম্পাসে অতিরিক্ত পুলিশ মোতায়েন করা হয়েছে । এখন পর্যন্ত
 কোনো মামলা হয়নি।<br><br>ঘটনাস্থল থেকে বিশ্ববিদ্যালয় প্রক্টর অধ্যাপক 
চৌধুরী মোহাম্মদ জাকারিয়া বাংলানিউজকে জানান, বর্তমানে ক্যাম্পাসের 
পরিস্থিতি শান্ত রয়েছে। হলে হলে অতিরিক্ত পুলিশ মোতায়েন করা হয়েছে।	  </div>
	  <!-- Comments Bars, To Show Comments -->
	  <br/><br/><hr/>
      <div id="comments">
        <h2>পাঠকের মন্তব্যঃ</h2>
				<ul class="commentlist">
		        
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">symon</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-09-12 13:06:22</a></div>
            <p>
				search is not working			</p>
          </li>
		          
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">symon</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-09-12 13:07:44</a></div>
            <p>
				but great to see what is ajax playing....			</p>
          </li>
		          </ul>
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
			<input type="hidden" name="newsID" value="500386f256e44">
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
	<h4><a href="../../national/default.htm">জাতীয়</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a></li>
                    <li><a href="50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a></li>
                    <li><a href="5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a></li>
                    <li><a href="4ff6de94a86f1.php">হিউম্যান রাইটসের প্রতিবেদন আন্তর্জাতিক ষড়যন্ত্র</a></li>
                    <li><a href="4ff6de0e94c98.php">র‌্যাবের সদস্যকে ফেরত দিয়েছে বিএসএফ</a></li>
                    <li><a href="4ff6dd92175c7.php">মহাসড়কের বেহাল দশায় যোগাযোগমন্ত্রীর ক্ষোভ</a></li>
                    <li><a href="4ff6dd1cd2447.php">পাহাড়িদের ভূমির অধিকার রক্ষা করব</a></li>
                    <li><a href="4ff68f0fa48d9.php">৩৯৮ একর জমি বসুন্ধরার দখলমুক্ত করল পিডিবি</a></li>
                    <li><a href="4ff68e36dd47d.php">নবীনগরে সড়ক দুর্ঘটনায় একজন নিহত</a></li>
                    <li><a href="4ff68c7de5883.php">‘প্রয়োজনে এক বেলা বাজার করব না’</a></li>
                    <li><a href="4ff68ad60fe01.php">পদ্মা সেতু নির্মাণে বিনিয়োগে আগ্রহী বিআইএ</a></li>
                    <li><a href="4ff68a131387f.php">র‌্যাব রাখা-না রাখা আমাদের ব্যাপার</a></li>
                    <li><a href="4ff5940039.php">নিতুন কুণ্ডুর স্বপ্নের অটবি এখন দাদা-দিদিতে বিভক্ত!</a></li>
                    <li><a href="4ff593f56e.php">ঢাকার যানজট মারাত্মক অবস্থা ধারণ করেছে: প্রধানমন্ত্রী</a></li>
                    <li><a href="4ff593e70f.php">৩ প্রকৌশলীর অস্বীকার
‘লাভালিনের প্রশিক্ষণে অংশ নিতে কানাডায় যাইনি’</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">লাইভ নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.samrat.comeze.com/default.htm" title="samrat kumar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>

</html>