<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>লাইভ নিউজ ২৪</title>
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
      <li><a href="../../../default.htm">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="../../feature/default.htm">ফিচার</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">মুক্তিযোদ্ধা সন্তানদের জন্য চাকরির সুযোগ</span></h1>
	  <p>
		জাহিদ হাসান<br/>তারিখ: ১১-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/ffffuntitled-9.jpg" alt="AAA" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  যাঁদের অসীম অবদানে বাংলাদেশ স্বাধীনতা পেয়েছে সেই সব বীর মুক্তিযোদ্ধার 
সন্তান বা তাঁদের সন্তানদের সন্তানের জন্য সরকারি চাকরির সুযোগ তৈরি হয়েছে।
 সুযোগটি এনে দিয়েছে প্রাথমিক শিক্ষা অধিদপ্তর এবং বাংলাদেশ চিনি ও 
খাদ্যশিল্প করপোরেশন (বিএসএফআইসি)।<br><br>প্রাথমিক শিক্ষা অধিদপ্তর<br>শিক্ষা
 মন্ত্রণালয়ের অধীনে এ অধিদপ্তরে দুটি পদের বিপরীতে মোট ১৭৭ জন লোক নিয়োগ 
করা হবে। এর মধ্যে হিসাব সহকারী পদে মোট ১১২ জন আর অফিস সহকারী কাম 
কম্পিউটার অপারেটর পদে ৬৫ জন লোক নিয়োগ দেওয়া হবে। আবেদনপত্র অবশ্যই আগামী 
১৫ জুলাইয়ের মধ্যে ডাকযোগে প্রধান কার্যালয় বরাবর পৌঁছাতে হবে।<br>আবেদনের 
যোগ্যতা: দুটি পদের জন্যই প্রার্থীকে ন্যূনতম উচ্চমাধ্যমিক বা সমমানের পাস 
হতে হবে। বয়সসীমা ১৮ থেকে ৩২ বছর। তবে অফিস সহকারী কাম কম্পিউটার অপারেটর 
পদের ক্ষেত্রে শিক্ষাগত যোগ্যতার পাশাপাশি কম্পিউটারে বাংলা ও ইংরেজিতে 
টাইপ করা এবং ডেটা এন্ট্রির কাজ জানতে হবে। রাঙামাটি, খাগড়াছড়ি ও বান্দরবান
 জেলার প্রার্থীদের আবেদনের সুযোগ নেই।<br>আবেদনের নিয়মাবলি: প্রার্থীকে 
স্বহস্তে লিখিত আবেদনপত্রের সঙ্গে পাসপোর্ট আকারের তিন কপি ছবিসহ শিক্ষাগত 
যোগ্যতার সনদপত্র, জাতীয় পরিচয়পত্র এবং অভিভাবকের মুক্তিযোদ্ধা সনদপত্রের 
সত্যায়িত ফটোকপি জমা দিতে হবে। সঙ্গে বাংলাদেশ ব্যাংক বা সোনালী ব্যাংকের 
কোনো শাখা থেকে ‘মহাপরিচালক, প্রাথমিক শিক্ষা অধিদপ্তর, ঢাকা’ এই ঠিকানায় 
১০০ টাকা ট্রেজারি চালানের মাধ্যমে জমা দিতে হবে। চালানের মূল কপি দিতে 
হবে। খামের ওপর পদ, জেলা ও মুক্তিযোদ্ধা কোটার নাম লিখতে হবে। আবেদনপত্র 
মহাপরিচালক, প্রাথমিক শিক্ষা অধিদপ্তর, সেকশন-২, মিরপুর, ঢাকা এই ঠিকানায় 
পাঠাতে হবে।<br>নিয়োগ পরীক্ষার ধরন: এ প্রসঙ্গে প্রাথমিক শিক্ষা অধিদপ্তরের
 প্রশাসন পরিচালক আবদুল রাউফ চৌধুরী জানান, গঠিত কমিটির মাধ্যমে কোন 
প্রক্রিয়ায় নিয়োগ পরীক্ষা হবে, সে ব্যাপারে সিদ্ধান্ত নেওয়া হবে। তবে গত 
নিয়োগ পরীক্ষার আলোকে তিনি জানান, ১০০ নম্বরের নৈর্ব্যক্তিক প্রশ্ন করা 
হবে। পরীক্ষায় বাংলা, ইংরেজি, গণিত ও সাধারণ জ্ঞান বিষয়ে প্রশ্ন থাকে। এ 
ছাড়া অফিস কাম কম্পিউটার অপারেটর পদে বাংলাদেশ কম্পিউটার কাউন্সিল (বিসিসি)
 থেকে কম্পিউটার বিষয়ে ব্যবহারিক পরীক্ষা দিতে হবে। লিখিত ও ব্যবহারিক 
পরীক্ষায় উত্তীর্ণ প্রার্থীদের ১০ নম্বরের মৌখিক পরীক্ষায় যেকোনো ধরনের 
প্রশ্ন করা হবে।<br>দায়দায়িত্ব ও বেতন-ভাতা: এ দুটি পদে নিয়োগ পেলে জেলা ও 
উপজেলা পর্যায়ে কাজ করতে হবে। সে ক্ষেত্রে হিসাব সহকারীদের শিক্ষকদের বেতন 
ভাতাসহ বিভিন্ন বিদ্যালয়ের উন্নয়নে বরাদ্দকৃত টাকার হিসাব রাখতে হবে। আর 
অফিস সহকারী কাম কম্পিউটার অপারেটর হিসেবে যাঁরা নিয়োগ পাবেন তাঁদের 
কম্পিউটার বিষয়ে যাবতীয় কাজ করতে হবে। দুটি পদেরই বেতন স্কেল হচ্ছে 
৪৭০০-২৬৫x৭-৬৫৫৫ইবি২৯০-১১ x ৯৭৪৫ টাকা। কাজের ভিত্তিতে পদোন্নতিরও সুযোগ 
আছে বলে জানান আবদুল রউফ চৌধুরী।<br>যোগাযোগ: প্রাথমিক শিক্ষা অধিদপ্তর, মিরপুর, সেকশন-২, ঢাকা। দেখতে পারেন: www.dpe.gov.bd<br><br>বাংলাদেশ চিনি ও খাদ্যশিল্প করপোরেশন<br>শিল্প
 মন্ত্রণালয়ের অধীনে বাংলাদেশ চিনি ও খাদ্যশিল্প করপোরেশন (বিএসএফআইসি) 
ইক্ষু উন্নয়ন সহকারী (সিডিএ) নামে একটি পদে মোট ৬৮ জন লোক নিয়োগ করা হবে। 
আবেদনপত্র অবশ্যই আগামী ২৬ জুলাইয়ের মধ্যে বিএসএফআইসির প্রধান কার্যালয়ে 
পৌঁছাতে হবে।<br>আবেদনের যোগ্যতা ও প্রক্রিয়া: প্রার্থীকে কৃষি ডিপ্লোমা 
পাস হতে হবে। উচ্চমাধ্যমিকে বিজ্ঞান শাখা থেকে পাস করলেও আবেদন করা 
যাবে।বয়স সর্বোচ্চ ৩২ বছর। প্রার্থীকে নিজ হাতে লিখিত আবেদনপত্রের সঙ্গে 
পাসপোর্ট আকারের তিন কপি ছবিসহ শিক্ষাগত যোগ্যতার সনদপত্র, জাতীয় পরিচয়পত্র
 এবং অভিভাবকের মুক্তিযোদ্ধা সনদপত্রের সত্যায়িত ফটোকপি জমা দিতে হবে। 
যেকোনো তফসিলি ব্যাংকের শাখা থেকে ‘বাংলাদেশ চিনি ও খাদ্যশিল্প করপোরেশন’ 
বরাবর ৩০০ টাকার ব্যাংক ড্রাফট বা পে-অর্ডার করে তার মূল কপি আবেদনপত্রের 
সঙ্গে দিতে হবে। আবেদনপত্র ‘চিফ অব পার্সোনেল, বাংলাদেশ চিনি ও খাদ্যশিল্প 
করপোরেশন, চিনিশিল্প ভবন, ষষ্ঠ তলা, ৩ দিলকুশা বা/এ, ঢাকা-১০০০’ এই ঠিকানা 
বরাবর পাঠাতে হবে।<br>নিয়োগ পরীক্ষার ধরন: এ প্রসঙ্গে বিএসএফআইসির চিফ অব 
পার্সোনেল এ এস এম আবদার হোসেন জানান, এখানে প্রার্থীকে ৭০ নম্বরের 
নৈর্ব্যক্তিক প্রশ্ন করা হবে। পরীক্ষায় উচ্চমাধ্যমিক পর্যায়ের বাংলা, 
ইংরেজি, গণিত, বিজ্ঞান, সাধারণ জ্ঞান, কৃষিসহ অন্যান্য বিষয়েও প্রশ্ন 
থাকবে। উত্তীর্ণ প্রার্থীদের ২০ নম্বরের মৌখিক পরীক্ষায় যেকোনো বিষয়ে জানতে
 চাওয়া হবে।<br>দায়দায়িত্ব ও বেতন-ভাতা: নিয়োগ পেলে কাজ করতে হবে বিভিন্ন 
জেলায় অবস্থিত চিনিকলের আওতায়। দায়িত্ব হবে মাঠপর্যায়ে আখের ফলন বৃদ্ধি, 
রোপণ ও পরিচর্যা পদ্ধতি পর্যবেক্ষণ, আখচাষিদের পরামর্শ প্রদান, ঋণ বিতরণ ও 
তা আদায় এবং চিনিকলে আখ সরবরাহ নিশ্চিত করা। বেতন স্কেল হবে 
৫২০০-৩২০x৭-৭৪৪০-ইবি-৩৪৫x১১-১১২৩৫ টাকা।পদোন্নতিরও সুযোগ আছে বলে জানান এ 
এস এম আবদার হোসেন।<br>যোগাযোগ: বাংলাদেশ চিনি ও খাদ্যশিল্প করপোরেশন, চিনিশিল্প ভবন, ষষ্ঠ তলা, ৩ দিলকুশা, ঢাকা।	  </div>
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
			<input type="hidden" name="newsID" value="5003881c73ca7">
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
	<h4><a href="../../feature/default.htm">ফিচার</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="4ff6f5bfcb1de.php">পাহাড়ের ডাক</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">লাইভ নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="Md. Abdul Kadir Razu"> মোঃ আব্দুল কাদির রাজু</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>