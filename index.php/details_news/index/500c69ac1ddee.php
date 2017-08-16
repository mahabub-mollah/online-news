<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>সংবাদ ৭১</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../../../../livenewstest/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../../scripts/jquery.validate.js"></script>
<script type="text/javascript" src="../../scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="../../scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="../../scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="../../scripts/phonetic_int.js"></script>
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
    <p>ফোন নম্বর : ০১৭৩১ ২৯৩৯৬০| ই মেইল : sopnilsamrat@yahoo.com</p>
    <ul>
	<li><a href="../../../../livenews/index.php/bangla_help"><img class="noBangla" src="../../../../livenewstest/images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="../../../../livenews/index.php/contactUs.php">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="../../../../livenews/index.php/details_news/index/default.php"><strong>সংবাদ ৭১</strong></a><a href="../../../../livenewstest/default.htm"></a></h1>
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
		<a href="../../../../livenews/index.php/details_news/index/500c69ac1ddee.php">আজ মহান বিজয় দিবস,
বিজয়ের স্মৃতিতে বিনম্র শ্রদ্ধা</a> &nbsp;
		</li> 
				<li>
		<a href="../../../../livenews/index.php/details_news/index/50038777991a3">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="../../../../livenews/index.php/details_news/index/500386f256e44">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="../../../../livenews/index.php/details_news/index/5003866e9edac">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
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
				
        <li><a href="../../../../livenews/default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="../../../../livenews/index.php/national/default.php">জাতীয়</a></li>
		
				
        <li><a href="../../../../livenews/index.php/international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../../../../livenews/index.php/politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="../../../../livenews/index.php/sports/default.php">খেলা</a></li>
		
				
        <li><a href="../../../../livenews/index.php/entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="../../../../livenews/index.php/technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../../../../livenews/index.php/economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../../../../livenews/index.php/feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../../../../livenews/index.php/literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../../../../livenews/index.php/education/default.php">শিক্ষা</a></li>
		
		      </ul>
    </div>
    <div id="search">
      <form action="http://localhost/livenews/default.php"  method="post">
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
      <li><a href="../../../../livenews/default.php">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="../../../../livenews/index.php/national/default.php">জাতীয়</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">আজ মহান বিজয় দিবস,
বিজয়ের স্মৃতিতে বিনম্র শ্রদ্ধা</span></h1>
	  <p>
		স্পেশাল করেসপন্ডেন্ট<br/>বাংলাদেশ সময়:১৬ই ডিসেম্বর, ২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../../livenews/newsImages/bijoy dibos.jpg" alt="আজ মহান বিজয় দিবস,
বিজয়ের স্মৃতিতে বিনম্র শ্রদ্ধা" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  <p align="justify"><strong>ঢাকা:</strong> আজ ষোলোই ডিসেম্বর, ২০১২। স্বাধীনতার লক্ষ্যে বাংলাদেশের মুক্তিযুদ্ধের বিজয়ের ৪১তম বছর পূর্ণ হলো আজ। ১২ ডিসেম্বর বাঙালির সেই গৌরবের স্মারকটি কেমন আছে, তা দেখার জন্য গিয়েছিলাম সাভারে জাতীয় স্মৃতিসৌধ চত্বরে।
<br><br>কেমন আছে আমাদের জাতীয় স্মৃতিসৌধ?
স্মৃতিসৌধের গেটের সামনে পৌঁছাই সকাল নয়টার দিকে। প্রবল ধাক্কা খেলাম মূল প্রবেশপথের কাছে পৌঁছে। যেখানে আশা করেছিলাম শান্ত সমাহিত পরিবেশ, চারদিকে সেখানে বিরাজ করছে বিশৃঙ্খল অবস্থা।
নিশ্চিত করা হয়েছে।<br><br>গেটের সামনের রাস্তার অপর পাশে রেখে দেওয়া হয়েছে সারিবদ্ধ বাস। চারপাশে দোকান, বেশ কয়েকটি ভ্যানের ওপর রাখা খাদ্যসামগ্রী, এলোমেলো দাঁড়িয়ে আছে রিকশা, পথচারীদের বিশৃঙ্খল আনাগোনা। অসংখ্য ব্যানার ও পোস্টার দেয়ালের গায়ে, গেটের ওপরে ঝুলছে। গেটের দেয়ালজুড়ে সেঁটে দেওয়া হয়েছে রাজনৈতিক নেতার ছবি।
।<br><br>
<br><br>স্মৃতিসৌধের প্রবেশপথের সামনের পরিসরটির এ রকম দৃশ্য মনের ওপর মারাত্মক চাপ তৈরি করল। প্রত্যাশা ছিল যে, স্মৃতিসৌধের সামনের পরিবেশ এমন হবে, যার সামনে দাঁড়িয়ে দেশের প্রত্যেক নাগরিকের মাথা নত হয়ে আসবে—সৌন্দর্যে, মর্যাদায়, মুগ্ধতায়। যেভাবে জাপানিরা হিরোশিমায় নির্মিত স্মৃতিসৌধে গিয়ে দ্বিতীয় বিশ্বযুদ্ধে নিহত ব্যক্তিদের স্মরণে শ্রদ্ধায় সবাই অবনত হয়। যেখানে শব্দ নেই, চেঁচামেচি নেই, বিশৃঙ্খলা নেই—আছে শুধু বিপর্যস্ত মানবতার স্মরণে নতমস্তকে বিনম্র শ্রদ্ধা নিবেদন। আমাদের জাতির জন্য জাতীয় স্মৃতিসৌধ তেমনই একটি মর্যাদার জায়গা। মুক্তিযুদ্ধে আত্মদানকারী লাখো শহীদকে শ্রদ্ধাভরে স্মরণ করার গৌরবে অভিষিক্ত হওয়ার জায়গা। পরিসরটিকে আমরা এখনো তেমনভাবে রাখতে পারিনি।
দিয়েছেন।<br><br>মন প্রসন্ন হয়ে গেল ভেতরে ঢুকেই। চত্বরটি চমৎকার। দৃষ্টিনন্দন। মনে হয়নি যে, শুধুই বিজয় দিবস সামনে রেখে সাজানো হয়েছে। কয়েকজন শিশুর সঙ্গে কথা বলি। ছয় থেকে আট বছর বয়স। জিজ্ঞেস করলাম, তোমরা কেন এসেছ এখানে?
ওরা হেসে বলল, ‘ফুল দেখতে এসেছি।’
জানো, এ জায়গাটা কী?
‘না।’ বলে প্রবলভাবে মাথা নাড়ে ওরা।
জিজ্ঞেস করলাম, কোন ক্লাসে পড়ো তোমরা? ওয়ানে না টুয়ে?
চারটি মেয়েশিশু মাথা ঝাঁকিয়ে বলল, ‘স্কুলে ভর্তি হইনি।’
বলে একছুটে অন্যদিকে চলে গেল।
ওদের দিকে তাকিয়ে এই ভেবে আশ্বস্ত হই, একদিন ওরাও ফুল নিয়ে আসবে স্মৃতিসৌধে। শহীদদের স্মরণ করবে গৌরবে। যদিও বুঝতে পারছি, স্কুলে ভর্তি হওয়ার বয়স হলেও ওদের জীবনে শিক্ষার দরজা এখনো খোলেনি। কখনো খুলবে কি? নাকি দেখা যাবে, ওই দরজাটি ওদের জন্য বন্ধই রয়ে গেছে? এতটা হতাশা হতে চাই না। বিশ্বাস করি, স্কুলে ওরা ঠিকই যাবে।
১৯৭২ সালের ষোলোই ডিসেম্বর এই স্মৃতিস্তম্ভের ভিত্তি স্থাপন করেছিলেন জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমান। নির্মাণকাজ শেষ হয় ১৯৮৮ সালের জুন মাসে। নকশা প্রণয়ন করেছিলেন স্থপতি সৈয়দ মঈনুল হোসেন।
এই স্মৃতিসৌধে গাছ লাগিয়েছেন দেশ-বিদেশের অসংখ্য বরেণ্য ব্যক্তি। ১৯৯৭ সালের ছাব্বিশে মার্চ এসেছিলেন দক্ষিণ আফ্রিকার অবিসংবাদিত নেতা নেলসন ম্যান্ডেলা। লাগিয়েছিলেন নাগেশ্বর চাঁপা ফুলগাছ। ২০০১ সালের ১৪ মার্চ এসেছিলেন জাতিসংঘের সাবেক মহাসচিব কফি আনান। তিনি লাগিয়েছেন বকুল ফুলের গাছ। একটি কামরাঙাগাছ লাগিয়েছেন ভারতের প্রধানমন্ত্রী ড. মনমোহন সিং, ২০১১ সালের ৬ সেপ্টেম্বর। ১৯৮৬ সালের ১ নভেম্বর যুক্তরাষ্ট্রের সাবেক প্রেসিডেন্ট জিমি কার্টার লাগিয়েছেন কাঠবাদামগাছ। এভাবে ১০০-টিরও বেশি গাছের সবুজ চত্বর গড়ে উঠেছে স্মৃতিসৌধের পাশে। এটি তো শ্রদ্ধা নিবেদনের বিশাল পরিসরের জায়গা। অবশ্য শুধু এই চত্বরের আয়তন দিয়েই স্মৃতিসৌধের পরিসর নির্ধারণ করা যাবে না। এ দেশের মানুষের মধ্যেও আমাদের গৌরবময় ইতিহাস অনবরত জাগরূক।
পেয়ে যাই মিরপুর বাঙলা কলেজের ছাত্র সাজেদুলকে। এ সময়ের অনেক তরুণের পিঠে যেমন ব্যাগ থাকে, ওর পিঠেও তেমনই একটি ব্যাগ। ও জানাল, কলেজের সেকেন্ড ইয়ার অনার্সের ছাত্র।
জিজ্ঞেস করি, এখানে এই স্মৃতিসৌধটি কেন করা হয়েছে?
ও চুপ করে থাকে।
বলি, দেশের স্বাধীনতার কথা জানো? মুক্তিযুদ্ধের কথা?
ও কোনো কথা বলে না।
আমার পেছনে দাঁড়িয়ে থাকা পরিচ্ছন্নতাকর্মীদের কেউ কেউ বলেন, ‘কথা কও না ক্যান? যুদ্ধের কথা হোনো নাই? তুমি কি কথা কইতে ভয় পাইতাছ?’
ও একটি কথাও না বলে হেঁটে চলে যায়।
আমি একদল পরিচ্ছন্নতাকর্মীর মুখোমুখি হই। বিজয় দিবস উপলক্ষে স্মৃতিসৌধ চত্বর পরিষ্কার করার জন্য তাঁরা জড়ো হয়েছেন। সংখ্যায় ১৫ থেকে ২০ জন হবেন। ২ ডিসেম্বর থেকে কাজ করছেন। সবাই বিভিন্ন বয়সের নারী। কারও জন্ম স্বাধীনতাযুদ্ধের দু-চার বছর আগে। বেশির ভাগের জন্মই পরে। তাঁদের ভাষায়, তাঁরা এখানে ধোয়াপাকলার কাজ করতে এসেছেন।
ঝাড়ু দিচ্ছিলেন সুলতানা। কাছে গিয়ে জিজ্ঞেস করলাম, এই স্মৃতিসৌধটা কী, জানেন?
বললেন, ‘এটা শহীদ মিনার।’
কাজে তিনি খুবই ব্যস্ত। তাঁর সঙ্গে বেশি কথা হয় না।
মুক্তিযুদ্ধের সময় সালেহা ছিলেন ধামরাইয়ে। দেখেছেন পাকিস্তানি সেনাদের নানা কীর্তি। ধামরাইয়ের রথটিতে আগুন দিয়েছিল তারা। সাত দিন ধরে রথে আগুন জ্বলে ছিল। তাঁর চাচা মোখলেস ছিলেন মুক্তিযোদ্ধা। রাজাকাররা তাঁকে পাকিস্তানি সেনাদের হাতে ধরিয়ে দেয়। তারা তাঁকে মেরে ফেলে। সালেহা বলেন, ‘এখনো তাদের ভাষা আমার কানে বাজে। ওরা বলত, ইধার সে আও, উধার সে যাও। তারপর গুলি করে মারত।’
সেদিন কয়েকজন নারী অনেক কথা বলেছেন। তাঁরা মুক্তিযুদ্ধের কথা জানেন। শহীদদের স্মরণে নির্মিত স্মৃতিসৌধের কথা তাঁরা জানেন। কয়েক দিনের জন্য তাঁরা এখানে কাজ করতে এসে খুশি। সারা দিন কাজ করে ২৫০ টাকা পাবেন। চাল-ডাল কিনে বাড়ি যাবেন। তাঁরা হরতাল চান না। কারণ, দিনমজুর বা রিকশাচালক স্বামীদের রোজগার বন্ধ হয়ে যায়।
কাজ শুরু করার আগে তাঁরা একসঙ্গে বসে ভাত খাচ্ছিলেন। একজনের খাওয়া তখনো হয়নি। সবার চেয়ে বয়সী। চোখের দৃষ্টি ধূসর ঘোলাটে। তাঁর শেষ লোকমা মুখে পুরে বলেন, ‘এইহানে মুক্তিযোদ্ধাদের হাড়গোড় আইনা কবর দেয়া হইছে আমি জানি। যুদ্ধে আমাগো গেরামে রাজাকাররা অনেক অত্যাচার করছে।’
যুদ্ধের সময় কোথায় ছিলেন আপনি?
‘মুন্সিগঞ্জে।’
আপনি কি যুদ্ধাপরাধীদের বিচার চান?
‘চাই না মানে? এক শ-বার চাই। ওরা যেমুন আমাগোরে মারছিল, অহন আমাগো হাতে অগোরও তো তেমন বিচার হওন দরকার।’
হাতের থালাটা তিনি ঠক করে স্মৃতিসৌধের লাল ইটের ওপরে রাখেন। মনে হলো, সেই শব্দটা ছড়িয়ে পড়ছে চারদিকে। স্মৃতিস্তম্ভের চূড়া ছুঁয়ে চলে যাচ্ছে দেশের সর্বত্র। চোখের কোনো পলক না ফেলে অতি সাধারণ হতদরিদ্র এই মানুষটির দিকে তাকিয়ে থাকি। এটা তো ইতিহাসের সত্য, এই বিজয়ের মাস তার সাক্ষী, সাধারণ মানুষের সাহসী উদ্দীপনায় বাংলাদেশের মুক্তিযুদ্ধ রূপ নিয়েছিল জনযুদ্ধে।
এই জাতীয় স্মৃতিসৌধ দেশের মানুষের বা বিদেশের বরেণ্য ব্যক্তিদের দেখার স্থান মাত্র নয়। এর সঙ্গে জড়িয়ে আছে বাঙালি জাতির আত্মমর্যাদার ইতিহাস। তাঁদের স্বাধীনতা লাভের গৌরব। সবারই দায়িত্ব, মর্যাদার সঙ্গে বিনম্রভাবে গৌরবময় সেই ইতিহাসকে স্মরণ করা।
স্মৃতিসৌধের চত্বরের ভেতরের মতো এর প্রবেশদ্বারের পরিসরেও চাই সেই সৌন্দর্য। কারও স্বার্থের কাছে যেন এর সৌন্দর্যহানি না ঘটে। আমরা যেন বিনম্র শ্রদ্ধায় জাতির গৌরবের এই স্থানটিকে মর্যাদা দিতে শিখি।
সেলিনা হোসেন: কথাসাহিত্যিক</p><div align="justify"><br><br>
&nbsp; <br></div>	  </div>
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
        <form id="commentForm" action="http://localhost/livenews/default.php" method="post">
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
			<input type="hidden" name="newsID" value="500c69ac1ddee">
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
	<h4><a href="../../../../livenews/index.php/national/default.htm">জাতীয়</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="../../../../livenews/index.php/details_news/index/50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/500386f256e44">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/5003866e9edac">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff6de94a86f1">হিউম্যান রাইটসের প্রতিবেদন আন্তর্জাতিক ষড়যন্ত্র</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff6de0e94c98">র‌্যাবের সদস্যকে ফেরত দিয়েছে বিএসএফ</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff6dd92175c7">মহাসড়কের বেহাল দশায় যোগাযোগমন্ত্রীর ক্ষোভ</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff6dd1cd2447">পাহাড়িদের ভূমির অধিকার রক্ষা করব</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff68f0fa48d9">৩৯৮ একর জমি বসুন্ধরার দখলমুক্ত করল পিডিবি</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff68e36dd47d">নবীনগরে সড়ক দুর্ঘটনায় একজন নিহত</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff68c7de5883">‘প্রয়োজনে এক বেলা বাজার করব না’</a></li>
                    <li><a href="../../../../livenewstest/index.php/details_news/index/4ff68ad60fe01">পদ্মা সেতু নির্মাণে বিনিয়োগে আগ্রহী বিআইএ</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff68a131387f">র‌্যাব রাখা-না রাখা আমাদের ব্যাপার</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff5940039">নিতুন কুণ্ডুর স্বপ্নের অটবি এখন দাদা-দিদিতে বিভক্ত!</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff593f56e">ঢাকার যানজট মারাত্মক অবস্থা ধারণ করেছে: প্রধানমন্ত্রী</a></li>
                    <li><a href="../../../../livenews/index.php/details_news/index/4ff593e70f">৩ প্রকৌশলীর অস্বীকার
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
      <li><a href="#"><img src="../../../../livenews/images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="../../../../livenews/images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="../../../../livenews/images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../../livenews/index.php/details_news/index/default.htm"><strong>সংবাদ ৭১</strong></a><a href="../../../../livenews/default.htm"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  - <a href="sopnilsamrat.blogspot.com">সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>