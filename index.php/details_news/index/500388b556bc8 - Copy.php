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
      <li class="current"><a href="../../literature/default.htm">শিল্প-সাহিত্য</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">নারীর ক্ষমতায়নে উচ্চশিক্ষা</span></h1>
	  <p>
		আনিসুজ্জামান<br/>তারিখ: ১৩-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/nariuntitled-7.jpg" alt="Female" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  ইতিহাসে দেখা যায়, বাঙালি নারীরাও কখনো কখনো উচ্চশিক্ষা লাভ করে পেশাগত 
জীবনে প্রবেশ করেছিলেন। খ্রিষ্টীয় আঠারো-উনিশ শতকের এমন তিনজন বিদুষী 
মহিলার কথা জানা যাচ্ছে। এঁদের মধ্যে হটী বিদ্যালঙ্কার (মৃত্যু ১৮১০) ও হটু
 বিদ্যালঙ্কার (১৭৭৫?-১৮৭৫?) সমধিক প্রসিদ্ধ। হটী ছিলেন বর্ধমানের এক 
পণ্ডিতের কন্যা। বিয়ের পরেও তিনি পিতৃগৃহে বাস করতেন, অল্পবয়সেই বিধবা হন। 
প্রথমে পিতার কাছে, পরে কাশীর পণ্ডিতদের কাছে, ব্যাকরণ, স্মৃতি ও 
নব্যন্যায়ের শিক্ষা গ্রহণের শেষে তিনি নিজেই চতুষ্পাঠী স্থাপন করে 
অধ্যাপনায় প্রবৃত্ত হন। কাশীতেও তিনি চতুষ্পাঠী স্থাপন করে বহু ছাত্রকে 
পড়িয়েছিলেন। পুরুষ পণ্ডিতদের মতো তিনিও দক্ষিণা নিতেন এবং পণ্ডিতসভায় 
প্রকাশ্যে যোগ দিয়ে তর্কবিতর্কে অংশ নিতেন। হটুও বর্ধমানের মেয়ে, তবে 
চিরকুমারী। তাঁর প্রকৃত নাম রূপমঞ্জরী। ষোলো-সতেরো বছর বয়সে তিনি গুরুগৃহে 
বাস করে টোলের ছাত্রদের সঙ্গে পড়াশোনা করতেন। ব্যাকরণ, সাহিত্য ও 
চিকিৎসাশাস্ত্রে তাঁর ব্যুৎপত্তি ছিল। কাশীতে গিয়ে তিনি দণ্ডীদের কাছে নানা
 শাস্ত্র অধ্যয়ন করেছিলেন। দেশে ফিরে তিনি মূলত চিকিৎসাশাস্ত্র শিক্ষা 
দিতেন। তিনি পুরুষের মতো বেশভূষা করতেন, উত্তরীয় পরতেন এবং ব্রাহ্মণ 
পুরুষের মতো মুণ্ডিতমস্তকে শিখা ধারণ করতেন। তৃতীয়জন দ্রবময়ী। তিনি 
কৃষ্ণনগরের সন্নিহিত এলাকার সন্তান এবং বালবিধবা। পিতার টোলে তিনি ব্যাকরণ ও
 অভিধান শেষ করে কাব্যালঙ্কার ও ন্যায়শাস্ত্র পড়েন। চোদ্দ বছর বয়সেই তিনি 
গভীর পাণ্ডিত্য অর্জন করেন এবং পিতার টোলে পুরুষ ছাত্রদের শিক্ষা দিতে শুরু
 করেন। তিনিও তর্কসভায় বিচার করতেন এবং অনর্গল সংস্কৃত বলতে পারতেন। উনিশ 
শতকের মধ্যভাগেও তিনি জীবিত ছিলেন।<br>তবে এক কোকিলের ডাকেই বসন্তের সূচনা 
হয় না। এসব দৃষ্টান্ত নিয়মের ব্যতিক্রম বলেই গণ্য হওয়া স্বাভাবিক। গৌরমোহন 
বিদ্যালঙ্কারের স্ত্রীশিক্ষাবিধায়ক (১৮২২; তৃতীয় সংস্করণ ১৮২৪), 
সর্ব্বশুভকরী পত্রিকায় (১৮৫০) প্রকাশিত মদনমোহন তর্কালঙ্কারের 
‘স্ত্রীশিক্ষা’ প্রবন্ধ, প্যারীচাঁদ মিত্রের রামারঞ্জিকা (১৮৬০) ও 
রাসসুন্দরী দেবীর আমার জীবন (১৮৬৮) প্রভৃতি রচনায় দেখা যাচ্ছে যে, 
স্ত্রীশিক্ষার বিরুদ্ধে নিম্নলিখিত ধ্যানধারণা সমাজে ব্যাপকভাবে প্রচলিত 
ছিল: শক্ষালাভের উপযোগী মানসিক শক্তি ও বুদ্ধিবৃৃত্তি মেয়েদের নেই; 
স্ত্রীশিক্ষা লোকাচার-বিরুদ্ধ ও শাস্ত্র-প্রতিষিদ্ধ; বিদ্যাশিক্ষা করলে 
স্ত্রীলোক দুর্ভাগ্যদুঃখ ও পতিবিয়োগ দুঃখের ভাজন হয়ে চিরকাল কষ্ট পাবে; 
স্ত্রীলোক সংসারের কাজ অর্থাৎ রান্নাবান্না ও সন্তান প্রতিপালন প্রভৃতি না 
করলে কী করে চলবে—এসব কাজ কি পুরুষে করবে? স্ত্রীশিক্ষা দিয়েই বা লাভ কী? 
তারা চাকরিবাকরি করবে না, আদালতে যাতায়াত করতে পারবে না, রাজকার্য করবে না,
 সাহেবসুবোর সঙ্গে আলাপ করবে না, দেশান্তরে যাবে না, হাটবাজারে যাবে 
না—সুতরাং স্ত্রীলোকের শিক্ষার আবশ্যকতা কী? বিদ্যাবতী হলে স্ত্রীলোকেরা 
স্বেচ্ছাচারিণী, মুখরা, অহংকারী, গুরুজনের প্রতি অবজ্ঞাকারী ও দুশ্চরিত্র 
হয়ে নিজেরা পতিত হবে এবং তাদের কুলকেও পতিত করবে।<br>এ সত্ত্বেও উনিশ শতকের
 বাংলাদেশে যে স্ত্রীশিক্ষার আয়োজন হয়েছিল, তা আশ্চর্যের কথা। ইউরোপীয় 
মিশনারীরা এ-বিষয়ে তৎপর হয়েছিলেন, কলকাতার স্কুল সোসাইটিও সাহায্য করেছিল; 
১৮১৯-২০ খ্রিষ্টাব্দে The Female Juvenile Society for the Establishment 
and Support of Bengalee Female School এবং Ladies Society for Native 
Female Education in Calcutta and its Vicinity নামে দুটি সংগঠনও গড়ে 
উঠেছিল। প্রথম প্রথম মেয়েরা এঁদের প্রতিষ্ঠিত স্কুলে যেতে চায়নি, কিন্তু 
১৮২৪-এর মধ্যে কলকাতায় পঞ্চাশটা ‘স্ত্রী-পাঠশালা’ গড়ে উঠেছিল। একথা উল্লেখ 
করা প্রয়োজন যে, শুধু প্রাচীনপন্থীরা নন, অনেক ইংরেজিশিক্ষিত ব্যক্তিও 
স্ত্রীশিক্ষার অনুমোদন করেননি, আবার রাধাকান্ত দেবের মতো মানুষ—যিনি সহমরণ 
প্রথার পক্ষে ও বিধবাবিবাহের বিপক্ষে আন্দোলন করেছিলেন, 
তিনিও—স্ত্রীশিক্ষার জন্যে অনেক কিছু করেছিলেন। সরকারি সাহায্যে 
ঈশ্বরচন্দ্র বিদ্যাসাগর বেশ কিছু বালিকা-বিদ্যালয় প্রতিষ্ঠা করেন। 
ড্রিঙ্কওয়াটার বিটনের সঙ্গে রামগোপাল ঘোষ, দক্ষিণারঞ্জন মুখোপাধ্যায় ও 
মদনমোহন তর্কালঙ্কার মিলে ১৮৫৯ সালে হিন্দু বালিকা বিদ্যালয় স্থাপন করেন, 
পরে তার নাম হয় বেথুন স্কুল। নারীশিক্ষাবিস্তারে এর বিশেষ ভূমিকা ছিল।<br>এসব
 তর্কবিতর্ক ও সংস্কারপ্রয়াস বাঙালি মুসলমান সমাজকে তেমন স্পর্শ করেনি। 
সেখানে পুরুষের শিক্ষাবিষয়েই অনেককাল দ্বিধাদ্বন্দ্ব এবং সুযোগের অভাব ছিল।
 মেয়েদের শিক্ষাদানের প্রশ্ন তাই তেমন করে ওঠেনি, তার উপর ছিল পর্দাপ্রথার 
কড়াকড়ি। যাঁকে আমরা বাঙালি মুসলমান সমাজে নারীশিক্ষার অগ্রদূত বলে জানি, 
সেই রোকেয়া সাখাওয়াত হোসেন (১৮৮০-১৯৩২) নিজের অভিজ্ঞতার কথা তাঁর 
অবরোধবাসিনীতে (১৯৩১) লিপিবদ্ধ করেছেন এভাবে:<br>সবে মাত্র পাঁচ বৎসর বয়স 
হইতে আমাকে স্ত্রীলোকদের হইতেও পর্দা করিতে হইত। ... পাড়ার স্ত্রীলোকেরা 
হঠাৎ বেড়াইতে আসিত; অমনি বাড়ীর কোন লোক চক্ষুর ইসারা করিত, আমি যেন 
প্রাণভয়ে যত্রতত্র—কখনও রান্নাঘরে ঝাঁপের অন্তরালে, কখনও কোন চাকরাণীর গোল 
করিয়া জড়াইয়া রাখা পাটির অভ্যন্তরে, কখনও তক্তপোষের নীচে লুকাইতাম। ...<br>কোন
 সময় চক্ষের ইসারা বুঝিতে না পারিয়া দৈবাৎ না পলাইয়া যদি কাহারও সম্মুখীন 
হইতাম, তবে হিতৈষিণী মুরুব্বিগণ, ‘কলিকালের মেয়েরা কি বেহায়া, কেমন বেগয়রৎ’
 ইত্যাদি বলিয়া গঞ্জনা দিতে কম করিতেন না।’<br>ভাইবোনের উৎসাহে যেটুকু লেখাপড়ার সুযোগ তিনি পেয়েছিলেন, তার ব্যবহারও তাঁকে করতে হয়েছিল অতি সন্তর্পণে।<br><br>দুই<br>এইসব
 বাধানিষেধ ও তর্কবিতর্কের বেড়াজাল পেরিয়ে মেয়েরা যে লেখাপড়া শিখতে এগিয়ে 
এসেছিল, সেটা খুব বড়ো কথা। বরিশালের ব্রাহ্মধর্মাবলম্বী ভাগলপুর-প্রবাসী 
ব্রজকিশোর বসুর কন্যা কাদম্বিনী বসু (পরে গঙ্গোপাধ্যায়, ১৮৬১-১৯২৩) বেথুন 
স্কুলে পড়াশোনা করে যখন প্রবেশিকা পরীক্ষার প্রার্থী হন, তখন কলকাতা 
বিশ্ববিদ্যালয় একেবারেই অপ্রস্তুত অবস্থায় পড়ে। মেয়েরা প্রবেশিকা পরীক্ষা 
দিতে পারবে না, এমন কোনো আইন ছিল না; কিন্তু মেয়েরা পরীক্ষা দেবে, এমনটি 
কল্পনায়ও ছিল না। এই অস্বস্তির মধ্যে স্বয়ং ভাইস-চান্সেলর কাদম্বিনীর—এবং 
সরলা দাস নামে আরেকজনের—যোগ্যতা যাচাই করার পর পরীক্ষায় অংশগ্রহণের অনুমতি 
দেন। ১৮৭৮ সালে কাদম্বিনী এন্ট্রান্স পাশ করেন—ওই পরীক্ষায় উত্তীর্ণ প্রথম 
ভারতীয় মহিলা তিনিই। এরপর তাঁরই জন্যে বেথুন স্কুলে এফ এ ও পরে বি এ পড়াবার
 ব্যবস্থা হয়। ১৮৮৩ সালে তিনি ও চন্দ্রমুখী বসু (১৮৬০-১৯৪৪) বেথুন কলেজ 
থেকে বি এ পাশ করেন। বি এ পাশ করার পর কাদম্বিনীর বিয়ে হয়। ১৮৮৪ সালে তিনি 
কলকাতা মেডিক্যাল কলেজে ভর্তি হন, কিন্তু সেখানকার অধ্যাপকদের অনেকেই 
সন্তুষ্টচিত্তে এই প্রথম ছাত্রীকে গ্রহণ করেননি। শোনা যায়, এই কারণেই ১৮৮৮ 
খ্রিষ্টাব্দে মেডিক্যাল কলেজের শেষ পরীক্ষায় সব বিষয়ে কৃতকার্য হয়েও 
মেডিসিনের পরীক্ষায় তিনি উত্তীর্ণ হতে পারেননি। ফলে তাঁর ভাগ্যে এম বি 
ডিগ্রি জোটেনি। তবে মেডিক্যাল কলেজের অধ্যক্ষ তাঁকে গ্রাজুয়েট অফ বেঙ্গল 
মেডিক্যাল কলেজ বলে একটি সনদপত্র দেন—তার জোরে তিনি বিলেতে গিয়ে 
চিকিৎসাশাস্ত্র পড়ার সুযোগ পান এবং একই সঙ্গে এডিনবরা, গ্লাসগো ও ডাবলিন 
থেকে ডিগ্রি নিয়ে দেশে ফেরেন। কিছুকাল লেডি ডাফরিন হাসপাতালে কাজ করার পর 
তিনি স্বাধীনভাবে চিকিৎসা-ব্যবসায়ে প্রবৃত্ত হন। পরে কংগ্রেসেও যোগ দেন। 
চন্দ্রমুখী বসু ছিলেন প্রবাসী বাঙালি খ্রিষ্টান পরিবারের সন্তান। লেখাপড়ার 
জন্যে তাঁকেও অনেক কাঠখড় পোড়াতে হয়েছিল। তিনি ১৮৮৪ সালে ইংরেজিতে এম এ পাশ 
করেন এবং বেথুন কলেজে অধ্যাপনা শুরু করেন। অল্পকাল পরে তিনি ওই কলেজের 
অধ্যক্ষ হয়েছিলেন।<br>ঢাকা বিশ্ববিদ্যালয়ও তার প্রথম ছাত্রী লীলা নাগকে 
(১৯০০-১৯৭০) ভর্তি করতে অনিচ্ছুক ছিল। তিনি সিলেটের মেয়ে। ১৯২১ সালে 
মেয়েদের মধ্যে প্রথম স্থান অধিকার করে তিনি বেথুন কলেজ থেকে ডিস্টিংশনসহ বি
 এ পাশ করেন এবং ঢাকা বিশ্ববিদ্যালয় প্রতিষ্ঠিত হওয়ামাত্রই সেখানে ইংরেজি 
বিভাগে ভর্তি হতে চান। তাঁর প্রয়াস শেষ পর্যন্ত সফল হয় এবং ১৯২৩ সালে তিনি 
এম এ পাশ করেন। তিনি নারীমুক্তির আন্দোলনে নিজেকে উৎসর্গীকৃত করেন এবং 
ঢাকায় নারী-শিক্ষা-মন্দির প্রতিষ্ঠা করেন। পরে রাজনীতিতে যোগ দিয়ে তিনি 
দীর্ঘকাল কারাভোগ করেন। দেশবিভাগের পরেও তিনি ও তাঁর স্বামী অনিল রায় 
কিছুকাল ঢাকায় ছিলেন। লীলা নাগের দৃষ্টান্তে উৎসাহিত হয়ে ঢাকা 
বিশ্ববিদ্যালয়ের আইন অনুষদের ডিন ও জগন্নাথ হলের প্রোভোস্ট নরেশচন্দ্র 
সেনগুপ্তের কন্যা সুষমা সেনগুপ্ত ১৯২১ সালে অর্থনীতিতে অনার্স ক্লাসে ভর্তি
 হন। অর্থনীতিতে ছাত্রসংখ্যা ছিল যথেষ্ট। তাদের মধ্যে একমাত্র মেয়ে সুষমার 
অসুবিধে বা সংকোচের কারণ ঘটতে পারে বলে ভাইস-চান্সেলর পি জে হার্টগের 
স্ত্রী প্রথমে কিছুকাল তাঁকে সঙ্গে নিয়ে ক্লাসে যেতেন, পরে তাঁর জন্যে একজন
 সেবিকার ব্যবস্থা করা হয়। শেষ পর্যন্ত অবশ্য সুষমা কলকাতায় পড়তে চলে যান। 
১৯২৩ সালে বাংলায় এম এ শ্রেণিতে ভর্তি হন লতিকা রায়, লীলা রায় ও অরুবালা 
সেনগুপ্ত এবং সংস্কৃতে এম এ শ্রেণিতে ভর্তি হন শান্তিবালা নাগ। ঢাকা 
বিশ্ববিদ্যালয়ের প্রথম মুসলিম ছাত্রী ফজিলতুননেসা (১৮৯৯-১৯৭৭)। ১৯২৪ সালে 
তিনি গণিত বিভাগে ভর্তি হন এবং ১৯২৭ সালে এম এ পরীক্ষায় প্রথম শ্রেণিতে 
উত্তীর্ণ হন। পরে তিনি বিলেত থেকে উচ্চশিক্ষা লাভ করে কলকাতার বেথুন কলেজে 
অধ্যাপনা শুরু করেন এবং ঢাকার ইডেন গার্লস কলেজের অধ্যক্ষরূপে ১৯৫৫ সালে 
অবসরগ্রহণ করেন।<br>ব্যক্তির কথা একটু সবিস্তারে বলা হলো এ-কারণে যে, এঁরা 
দুর্গম পথ অতিক্রম করে ইতিহাস গড়েছিলেন। তখন সমাজ ছিল অনেক পরিমাণে 
রক্ষণশীল। সে-রক্ষণশীলতার প্রভাব থেকে বিশ্ববিদ্যালয়ও সম্পূর্ণ মুক্ত হতে 
পারেনি কিংবা তার সঙ্গে আপোস করে চলা আবশ্যক বলে কর্তৃপক্ষ গণ্য করেছিলেন। 
ঢাকা বিশ্ববিদ্যালয়ের কথাই ধরা যাক। একটা সময় ছিল যখন শ্রেণিকক্ষ, 
গ্রন্থাগার ও নিজেদের কমনরুমের বাইরে ছাত্রীদের পক্ষে বিশ্ববিদ্যালয়েও 
কোথাও যাবার উপায় ছিল না। মেয়েদের কমনরুম থেকে শিক্ষকেরা ছাত্রীদের 
শ্রেণিকক্ষে নিয়ে যেতেন এবং ক্লাসের শেষে আবার তাদের কমনরুমে পৌঁছে দিতেন। 
প্রক্টরের অনুমতি নিয়ে এবং তাঁর উপস্থিতিতেই কেবল কোনো ছাত্র ও ছাত্রী 
পরস্পরের সঙ্গে কথা বলতে পারতো। ১৯৫৩ সালে আমি যখন ঢাকা বিশ্ববিদ্যালয়ে 
ভর্তি হই, তখন দেখেছি, এই বিশেষ নিয়ম এড়াতে একজন ছাত্রী একটু সামনে হেঁটে 
চলেছে কলাভবন-প্রাঙ্গণে এবং তার পেছনে খানিক দূরত্ব বজায় রেখে একজন ছাত্র 
ওভাবে হেঁটে হেঁটেই কথা বলছে। ঢাকা বিশ্ববিদ্যালয়ে নাটকে সহ-অভিনয়ের প্রথম 
সুযোগ দেওয়া হয় ১৯৫৪ সালে, সলিমুল্লাহ মুসলিম হলে, অবশ্য সংশ্লিষ্ট 
ছাত্রীদের আইনত অভিভাবকের লিখিত অনুমতি নিয়ে। অথচ বিশ্ববিদ্যালয়-প্রতিষ্ঠার
 প্রথম থেকেই এর বিভিন্ন আবাসিক হলের সাংস্কৃতিক অনুষ্ঠান দেখতে ঢাকার 
নাগরিকদের সমাগম হতো এবং জগন্নাথ হলের নাট্যাভিনয় দেখতে শহর ভেঙে পড়তো। 
আবার সেই জগন্নাথ হলের সাংস্কৃতিক অনুষ্ঠানে অপ্রাপ্তবয়স্ক এক বালিকার 
নৃত্যপ্রদর্শনের সমালোচনায় ১৯২৯ সালে চাবুক পত্রিকায় নাকি বড়ো অক্ষরে 
শিরোনাম দেওয়া হয়: ‘জগন্নাথ হলে আবার মেয়ে নাচিল’।<br>নাচুক বা না-নাচুক, 
ঢাকা বিশ্ববিদ্যালয়ে ছাত্রীর সংখ্যা ধীরে ধীরে বাড়ছিল। তাদের চাহিদা মেটাতে
 ১৯২৬ সালে বিশ্ববিদ্যালয়ের একটি বাংলো চামারি হাউজে ১৯২৬ সালে প্রতিষ্ঠিত 
হয় ‘উইমেনস হাউজ’। উইমেনস হাউজে আবাসিক ছাত্রী তিনজন, একজন হাউজ 
টিউটর—মিসেস পি নাগ। তবে হাউজটি ছিল ঢাকা হলের সঙ্গে যুক্ত, সেই হলের 
প্রোভোস্টই তার তত্ত্বাবধান করতেন। পরে ছাত্রীদের আবাসস্থলের পরিবর্তন হয় 
একাধিবার এবং বিদ্যমান তিনটি হলের—সলিমুল্লাহ মুসলিম হল, জগন্নাথ হল ও ঢাকা
 হলের—সঙ্গে এবং আরো পরে ছাত্রদের অন্যান্য আবাসিক হল প্রতিষ্ঠিত হলে 
সেসবের সঙ্গেও অনাবাসিক ছাত্র হিসেবে যুক্ত থাকার সুযোগ দেওয়া হয় 
ছাত্রীদের।<br>১৯৩৫ সালে ঢাকা বিশ্ববিদ্যালয়ে প্রথম শিক্ষিকা নিযুক্ত হন 
করুণাকণা গুপ্তা (১৯২২-৭৯)—ইতিহাস বিভাগের অ্যাসিস্ট্যান্ট লেকচারার 
হিসেবে। তিনি ১৯৩২ সালে অনার্সে এবং ১৯৩৩ সালে এম এতে প্রথম শ্রেণি লাভ 
করেছিলেন। তাঁর উদেযাগেই স্বতন্ত্র ঢাকা বিশ্ববিদ্যালয় ছাত্রী ইউনিয়ন গঠিত 
হয় এবং ক্রমে তা ছাত্রদের হল সংসদের সমমর্যাদা অর্জন করে। করুণাকণা গুপ্তা 
অল্পকালের মধ্যে ঢাকা বিশ্ববিদ্যালয় ছেড়ে যান। পরে তিনি কলকাতার বেথুন কলেজ
 ও লেডি ব্রেবোর্ন কলেজের অধ্যক্ষ এবং পশ্চিমবঙ্গের ডি ডি পি আই হয়েছিলেন। 
ভারতের স্বাধীনতা-সংগ্রামেও তাঁর ভূমিকা ছিল। করুণাকণা গুপ্তা চলে গেলে 
ছাত্রীদের স্বার্থসংশ্লিষ্ট বিষয় দেখার ভার নেন ঢাকা বিশ্ববিদ্যালয়ের 
দ্বিতীয় শিক্ষিকা চারুপমা বোস। ১৯৩৭ সালে তিনি ইংরেজি বিভাগের 
অ্যাসিস্ট্যান্ট লেকচারার নিযুক্ত হয়েছিলেন। মেয়েদের উন্নয়নে তাঁরও ভূমিকা 
উল্লেখযোগ্য। তবে একথা নিশ্চয় করুণাকণা বা চারুপমার স্বপ্নের অগোচর ছিল যে,
 ঢাকা বিশ্ববিদ্যালয়ের শতবর্ষপূর্তিরও আগে ছাত্রীদের আবাসিক হল হবে পাঁচটি 
এবং হস্টেল একটি। <br><br>তিন<br>কেবল ঢাকা বিশ্ববিদ্যালয়ের কথা বলা আমার 
পক্ষে পক্ষপাতদুষ্ট হয়ে যাচ্ছে। কিন্তু আজকের বাংলাদেশে ঢাকা 
বিশ্ববিদ্যালয়ের প্রতিষ্ঠা ঘটেছিল অন্যসব বিশ্ববিদ্যালয়ের আগে এবং 
রাষ্ট্রীয় আনুকূল্যে প্রতিষ্ঠিত এদেশের প্রায় অন্যসব বিশ্ববিদ্যালয় গড়ে 
উঠেছে ঢাকা বিশ্ববিদ্যালয়ের আদর্শ সামনে রেখে। মনে রাখতে হবে যে, ঢাকা 
বিশ্ববিদ্যালয় স্থাপিত হয়েছিল শিক্ষাদানকারী ও আবাসিক বিশ্ববিদ্যালয় 
হিসেবে। তারপর ১৯৪৭ সালে ঢাকা বিশ্ববিদ্যালয়কে যেমন অধিভুক্ত কলেজের 
দেখাশোনা ও পরীক্ষা নেওয়ার দায়িত্ব গ্রহণ করতে হয়,—কিছু ব্যতিক্রম বাদে 
অন্যান্য বিশ্ববিদ্যালয়ের উপরেও সেই দায়িত্ব বর্তায়। জাতীয় বিশ্ববিদ্যালয়ের
 আবির্ভাবের পরে ঢাকাসহ অন্য বিশ্ববিদ্যালয়গুলি আবার শিক্ষাদানকারী 
বিশ্ববিদ্যালয়ে পরিণত হয়েছে, তবে তার আবাসিক চরিত্র কতটা কার্যকর রয়েছে, 
সে-সম্পর্কে মতভেদ হতে পারে। কিন্তু সে-প্রশ্ন এখানে প্রাসঙ্গিক নয়।<br>ইংরেজ
 শাসনের অবসানের পর থেকে এ-পর্যন্ত বাংলাদেশ নামক এই ভূখণ্ডে সবচেয়ে বড়ো যে
 পরিবর্তন হয়েছে, আমার বিবেচনায়, তা নারীর অগ্রগতির ক্ষেত্রে। আমি মনে করতে
 পারি, পাকিস্তানের জন্মলাভের অব্যবহিত পরে এই ঢাকা শহরে মেয়েদের চলাচলের 
ক্ষেত্রে কত বাধাবিপত্তি ছিল। পর্দাছাড়া রিকশায় নিকটতম আত্মীয়ের সঙ্গে 
উঠলেও মেয়েদের অবাঞ্ছিত মন্তব্য শুনতে হতো, ঘোড়াগাড়িতে চললে তার জানলা বন্ধ
 রাখতে হতো। মেয়েদের স্কুলের সংখ্যা তখন বেশি নয়, কলেজ আরো কম। 
সরকারি-বেসরকারি কর্মক্ষেত্রে মেয়েদের সুযোগ নিতান্তই সীমিত। 
স্কুল-শিক্ষিকা বা হাসপাতালে সেবিকার কাজই কেবল তাদের জন্যে খোলা, মুসলমান 
মেয়েদের পক্ষে নার্সিংয়ের পেশাও আবার সমাজের অনুমোদন লাভ করতো না। 
রাজনীতিতে দু-একজন ছিলেন, কিন্তু চালকের আসনে কেউ নন। চিকিৎসক খুবই কম, 
আইনজীবী ছিলেন না বললে চলে। সাহিত্য ও সংগীতে ছিলেন কয়েকজন, বেতার-নাটকেও, 
কিন্তু মঞ্চে নন, চিত্রশিল্পেও নন। সাংবাদিকতায় একজনের বেশি ছিলেন কি না 
সন্দেহ, কলেজ-বিশ্ববিদ্যালয়ের শিক্ষকও কম।<br>আজকে বাংলাদেশের নারী যেখানে 
এসে দাঁড়িয়েছে, সেদিন তা অকল্পনীয় ছিল। আমি ভুলে যাচ্ছি না যে, 
নারীনির্যাতন এদেশে এখনো নিত্যনৈমিত্তিক ঘটনা। ফতোয়া, অ্যাসিড-সন্ত্রাস, 
যৌতুকের দাবি, পথেঘাটে উত্যক্ত করা, এমনকী ধর্ষণ ও হত্যার মর্মান্তিক সংবাদ
 প্রায় রোজই পড়তে হচ্ছে। তারপরও তৈরি পোশাকশিল্পের শ্রমিক থেকে শুরু করে 
উচ্চ আদালতের বিচারপতি, ইউনিয়ন পরিষদ থেকে মন্ত্রিসভার সদস্য, বিমানবালা 
থেকে পর্বতশৃঙ্গজয়ী, শুটার থেকে ক্রিকেটার, অভিনেতা থেকে পরিচালক, 
চিত্রশিল্পী থেকে স্থপতি—এমন কোনো ক্ষেত্র নেই যেখানে নারীর পদচারণা নেই।<br>সবক্ষেত্রেই
 যে নারীর ক্ষমতায়ন ঘটেছে, তা নয়, কিন্তু সব ক্ষেত্রেই তার নিজের কথা বলার 
অধিকার বেড়েছে। তার পারিবারিক, সামাজিক ও রাজনৈতিক সিদ্ধান্তগ্রহণের সুযোগ 
সৃষ্টি হয়েছে অনেক বেশি। নিজের জীবন সম্পর্কে—বিয়ে, সন্তানধারণ, অধ্যয়ন, 
পেশা, পোশাক এবং এমনি আরো অনেক বিষয়ে—সে নিজের বুদ্ধি-বিবেচনা প্রয়োগ করার 
স্বাধীনতা তুলনামূলকভাবে অনেক বেশি ভোগ করছে। তার আত্মমর্যাদাবোধ ও 
আত্মবিশ্বাস—দুইই বেড়েছে। আর এর অধিকাংশ ক্ষেত্রে উচ্চশিক্ষার বড়ো ভূমিকা 
রয়েছে। নারীর ক্ষমতায়নে আর্থিক স্বাধীনতার প্রশ্নটি গুরুত্বপূর্ণ। সেই 
আর্থিক স্বাধীনতা হয়তো শস্তায় শ্রম বিক্রি করেও পাওয়া যাচ্ছে, কিন্তু তা 
অনেক বেশি করে আসছে উচ্চশিক্ষার পথ বেয়ে। নারীকে কেউ আজ আর ভালো স্ত্রী বা 
মা হওয়ার শিক্ষা দিতে যাচ্ছে না, শিক্ষা আজ তার সর্ববিধ বিকাশে ভূমিকা 
রাখতে চাইছে। উচ্চশিক্ষা তাকে মানুষ হিসেবে নিজের মূল্য নিরূপণ করতে 
শেখাচ্ছে, নিজের সত্তার স্বাতন্ত্র্য সম্পর্কে অবহিত করছে।<br>শ্রেণিবিভক্ত
 সমাজে সব স্তরের নারী কিংবা পুরুষের সমান ক্ষমতায়ন ঘটে না। কিন্তু 
ক্ষমতায়নের লক্ষ্যে তাদের কাজ করতে হয়। বাংলাদেশের নারীকে সেই লক্ষ্য 
অর্জনে অনেকদূর যেতে হবে। সেই যাত্রায় তার সবচেয়ে বড়ো পাথেয় হবে 
শিক্ষা—উচ্চশিক্ষা। আমাদের উচ্চশিক্ষার সকল অসম্পূর্ণতা সত্ত্বেও এটি নারীর
 ক্ষমতায়নের পথ। পথ ও পাথেয় এখানে অভিন্ন।<br><br>(১ জুলাই ২০১২ ঢাকা বিশ্ববিদ্যালয় দিবসের অনুষ্ঠানে পঠিত)	  </div>
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
			<input type="hidden" name="newsID" value="500388b556bc8">
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
	<h4><a href="../../literature/default.htm">শিল্প-সাহিত্য</a>  এর সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="500c6b36b0baa">আমি হিমুও না, মিসির আলিও না</a></li>
                    <li><a href="50038920416b6">জননী জন্মভূমিশ্চ...</a></li>
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