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
      <li class="current"><a href="../../national/default.htm">জাতীয়</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</span></h1>
	  <p>
		নিজস্ব প্রতিবেদক<br/>তারিখ: ১৬-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/buet03109a66def-untitled-53.jpg" alt="বুয়েট সংকট" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  বুয়েট সংকট নিরসনে প্রধানমন্ত্রী শেখ হাসিনা আলোচনার পরামর্শ দিয়েছেন। 
কিন্তু বুয়েট শিক্ষক সমিতি সাফ জানিয়ে দিয়েছে, উপাচার্যের সঙ্গে শিক্ষকেরা 
আলোচনা করবেন না। আজ সোমবার শিক্ষা মন্ত্রণালয় দুই প্রতিপক্ষ উপাচার্য ও 
শিক্ষক সমিতিকে বাদ দিয়ে সভা ডেকেছে। সভায় বিশ্ববিদ্যালয়ের বিভিন্ন অনুষদের
 ডিন, বিভাগীয় প্রধান, দুজন সাবেক উপাচার্য ও স্বনামধন্য কয়েকজন শিক্ষককে 
আমন্ত্রণ জানানো হয়েছে।<br>আন্দোলনকারী শিক্ষক, শিক্ষার্থী ও 
কর্মকর্তা-কর্মচারীরা জানিয়েছেন, এ দুই ব্যক্তির অপসারণ ছাড়া আন্দোলন থামবে
 না। এ দাবিতে তাঁরা রাষ্ট্রপতি ও বিশ্ববিদ্যালয়ের আচার্য মো. জিল্লুর 
রহমানের কাছে গতকাল রোববার স্মারকলিপি দিয়েছেন।<br>শিক্ষামন্ত্রী নুরুল 
ইসলাম নাহিদ গতকাল প্রথম আলোকে বলেছেন, আলোচনা ছাড়া সরকারের হাতে আর কোনো 
শক্তি নেই। এর মাধ্যমে সংকট নিরসন হবে বলেও তিনি আশা প্রকাশ করেন।<br>আন্দোলনকারী
 শিক্ষক সমিতির নেতাদের ডাকা হচ্ছে না কেন—জানতে চাইলে শিক্ষামন্ত্রী বলেন,
 ‘তাঁদের সঙ্গে আগেও কথা হয়েছে। তা ছাড়া একবার তাঁরা সময় দিয়ে বৈঠকে 
আসেননি। যেহেতু তাঁরা আসবেন না, তাই দাওয়াত করে শিক্ষকদের বিব্রত করতে চাই 
না।’<br>তবে বুয়েট পরিবারের সদস্যদের প্রায় সবাই সংকট নিরসনে রাষ্ট্রপতি ও 
প্রধানমন্ত্রীর দিকে চেয়ে আছেন। বিশ্ববিদ্যালয়ের একাধিক শিক্ষক ও 
শিক্ষার্থী গতকাল জানান, পরিস্থিতি যে রূপ ধারণ করেছে, তাতে সাধারণ আলোচনায়
 সংকট নিরসন হবে না।<br>বুয়েট প্রশাসনের পক্ষ নিয়ে কিছু শিক্ষক, 
ছাত্রলীগ-সমর্থক শিক্ষার্থী এবং কর্মকর্তা-কর্মচারীদের একাংশ মাঠে নামায় 
আন্দোলনকারীরা আরও ক্ষুব্ধ হয়ে উঠেছেন। তাঁরা অভিযোগ করেছেন, আন্দোলন থেকে 
বিরত থাকতে তাঁদের বিভিন্নভাবে হুমকি দেওয়া হচ্ছে। এ নিয়ে উত্তেজনা বিরাজ 
করছে। বিশ্ববিদ্যালয়ে মোতায়েন করা হয়েছে অতিরিক্ত পুলিশ।<br>উপাচার্য ও 
সহ-উপাচার্যের বিরুদ্ধে ১৬টি অনিয়মের অভিযোগ তুলে কয়েক মাস ধরেই বুয়েটের 
শিক্ষক সমিতি আন্দোলন করছে। যদিও উপাচার্য ও সহ-উপাচার্য দুজনই তাঁদের 
বিরুদ্ধে আনা অভিযোগ অস্বীকার করে আসছেন।<br>সাবেক তত্ত্বাবধায়ক সরকারের 
প্রধান উপদেষ্টার বিশেষ সহকারী ও বুয়েটের শিক্ষক ম. তামিম বলেন, ‘এখন আর 
অভিযোগ প্রমাণ হওয়া বা না হওয়ার বিষয় নেই। যেখানে প্রায় ৯৫ ভাগ শিক্ষক, 
শিক্ষার্থী ও কর্মকর্তা-কর্মচারী অনাস্থা দেখিয়েছেন, সেখানে উপাচার্য ও 
সহ-উপাচার্যের জন্য সম্মানজনক হলো, নিজ থেকেই পদত্যাগ করে চলে যাওয়া।’<br>গত
 ৭ এপ্রিল থেকে শিক্ষক সমিতি কর্মবিরতি শুরু করে। লাগাতার ২৮ দিন 
কর্মবিরতির পর ৪ মে প্রধানমন্ত্রী শেখ হাসিনার আশ্বাসের পরিপ্রেক্ষিতে 
শিক্ষকেরা ৫ মে থেকে আন্দোলন সাময়িকভাবে স্থগিত করেন। গত ৯ জুন সমিতির সভায়
 ৩০ জুনের মধ্যে উপাচার্য ও সহ-উপাচার্যকে পদত্যাগ করতে সময় বেঁধে দেওয়া 
হয়। এর মধ্যে তাঁরা পদত্যাগ না করায় ৭ জুলাই থেকে প্রতীকী কর্মবিরতি চলতে 
থাকে। ১৪ জুলাই থেকে তাঁরা লাগাতার কর্মবিরতির ঘোষণা দেন।<br>এরই মধ্যে ১০ 
জুলাই বিশ্ববিদ্যালয় কর্তৃপক্ষ আকস্মিকভাবে ১১ জুলাই থেকে ৪৪ দিনের জন্য 
বুয়েট বন্ধ ঘোষণা করে। এরপর শিক্ষক সমিতি পদত্যাগ শব্দটি বাদ দিয়ে উপাচার্য
 ও সহ-উপাচার্যের অপসারণের দাবিতে লাগাতার অবস্থান কর্মসূচি চালিয়ে যাওয়ার 
ঘোষণা দেয়। ১১ জুলাই থেকে বিশ্ববিদ্যালয়ের প্রশাসনিক ভবনের সামনে থেকে 
তাঁরা লাগাতার অবস্থান ধর্মঘট কর্মসূচি পালন করে আসছেন।<br>আন্দোলনের 
ধারাবাহিকতায় গতকাল শিক্ষক, শিক্ষার্থী, কর্মকর্তা ও কর্মচারীদের ব্যানারে 
রাষ্ট্রপতির বরাবর স্মারকলিপি দেওয়া হয়। বেলা ১১টার কিছু পর অবস্থান 
ধর্মঘটস্থল থেকে বিশাল মিছিল বের হয়। কেন্দ্রীয় শহীদ মিনারের সামনে দিয়ে 
মিছিলটি ঢাকা বিশ্ববিদ্যালয়ের খেলার মাঠের কাছে গেলে পুলিশ বাধা দেয়। 
সেখানে হাত তুলে বিপুলসংখ্যক শিক্ষার্থী আন্দোলন অব্যাহত রাখার শপথ করেন।<br>পরে
 শিক্ষক সমিতির সভাপতি মুজিবুর রহমান ও সাধারণ সম্পাদক আশরাফুল ইসলামের 
নেতৃত্বে চার সদস্যের একটি প্রতিনিধিদল বঙ্গভবনে গিয়ে স্মারকলিপি দিয়ে আসে।<br>আশরাফুল
 ইসলাম প্রথম আলোকে বলেন, দুপুর সাড়ে ১২টার দিকে রাষ্ট্রপতির উপ-প্রেস সচিব
 আবুল কালাম আজাদের কাছে তাঁরা স্মারকলিপি দিয়ে আসেন। পরে আন্দোলনকারীরা 
আবার বুয়েটের প্রশাসনিক ভবনের সামনে গিয়ে অবস্থান নেন।<br>বুয়েটের অধ্যাপক 
সারোয়ার জাহান প্রথম আলোকে বলেন, ‘এখন দায়িত্ব সরকারের ঘাড়ে। আশা করি, 
আন্দোলনের বিষয়টি অনুধাবন করে সরকার উপাচার্য ও সহ-উপাচার্যকে বিদায় করবে।’<br>নাম
 প্রকাশে অনিচ্ছুক একজন নামকরা শিক্ষক প্রথম আলোকে বলেন, শিক্ষক ও 
শিক্ষার্থীরা এখন ‘পয়েন্ট অব নো রিটার্নে’ চলে গেছেন, সেখানে এই দুজনের 
বিদায় ছাড়া সমস্যার সমাধান হবে না।<br>তবে উপাচার্য নজরুল ইসলাম ও 
সহ-উপাচার্য হাবিবুর রহমান দুজনই পৃথকভাবে প্রথম আলোকে বলেন, তাঁরা পদত্যাগ
 করবেন না। উপাচার্য বলেন, ‘নিজ থেকে কেন পদত্যাগ করব? আমি কোনো অন্যায় বা 
অনিয়ম করিনি। তবে রাষ্ট্রপতি যা সিদ্ধান্ত দেবেন, তা মেনে নেব।’<br>সহ-উপাচার্য বলেন, ‘শিক্ষক হিসেবে কোনো অনৈতিক দাবির কাছে মাথা নত করব না।’<br>এক প্রশ্নের জবাবে উপাচার্য ও সহ-উপাচার্য বলেন, সাংঘর্ষিক অবস্থা এড়ানোর জন্য বিশ্ববিদ্যালয় ছুটি ঘোষণা করা হয়েছে।<br>একাধিক
 শিক্ষক গতকালও বলেন, প্রথমে তাঁদের অভিযোগ ছিল সহ-উপাচার্যকে নিয়ে। 
বুয়েটের ঐতিহ্য হলো, বিভিন্ন গুরুত্বপূর্ণ পদে জ্যেষ্ঠ শিক্ষকদের নিয়োগ 
দেওয়া। কিন্তু সহ-উপাচার্য হাবিবুর রহমানকে নিয়োগ দেওয়া হয় ৫৯ জনকে ডিঙিয়ে।
 নিয়োগ পাওয়ার পর সহ-উপাচার্য নানাভাবে দলীয়করণ শুরু করেন। তাঁকে নিয়োগ না 
দিলে এবং দাবির মুখে সরিয়ে দিলে পরিস্থিতি এত দূর গড়াত না। পরবর্তী সময়ে 
দেখা গেল, যাঁর নিয়োগ শিক্ষকেরা মেনে নেননি, তিনিই নেপথ্যে থেকে মূলত 
বিশ্ববিদ্যালয় চালাচ্ছেন।<br>শিক্ষক সমিতির কোষাধ্যক্ষ আতাউর রহমান প্রথম 
আলোকে বলেন, ‘আমরা বিবেকবান, কারও ভয়ে ভীত নই। যতক্ষণ পর্যন্ত সরকার এই 
দুজনকে না সরাবে, ততক্ষণ পর্যন্ত আন্দোলন চলবে। প্রয়োজনে শিক্ষকেরা 
গণপদত্যাগ করবেন।’<br>আন্দোলনকারীরা প্রশাসনিক ভবনের সামনে (এই ভবনের 
দোতলায় উপাচার্যের কার্যালয়) কর্মসূচি পালন করছেন। এই অবস্থায় উপাচার্য 
গতকাল প্রশাসনিক ভবনের কার্যালয়ে যাননি। তিনি ক্যাম্পাসের ভেতরে নিজ বাসায় 
অফিসের কাজ করেছেন। জানতে চাইলে উপাচার্য বলেন, ‘এখানে বসেই আমি বেশি কাজ 
করি।’ তবে সহ-উপাচার্য অফিসেই কাজ করেছেন।<br>এদিকে প্রশাসনের পক্ষ নিয়ে 
কয়েকজন শিক্ষক এবং কিছু কর্মকর্তা-কর্মচারী ও শিক্ষার্থী গত শনিবার থেকে 
উপাচার্য ও সহ-উপাচার্যের পক্ষ নিয়ে কর্মসূচি পালন করছেন। বুয়েট 
শিক্ষক-ছাত্র-কর্মকর্তা ও কর্মচারী ঐক্য ফোরামের ব্যানারে গতকাল বিকেলে 
বুয়েট ক্যাফেটেরিয়ার সামনে সমাবেশ ও পরে মৌন মিছিল করেন তাঁরা। উপাচার্য 
সমর্থকদের এই কর্মসূচির পেছনে সবচেয়ে বেশি ভূমিকা রাখছেন ছাত্রলীগের কিছু 
নেতা-কর্মী। গতকাল বুয়েট ছাত্রলীগের সাবেক কয়েকজন নেতাকেও দেখা গেছে। 
উল্লেখ্য, এই বিশ্ববিদ্যালয়ের ছাত্রলীগের কমিটি নেই।<br>কয়েকজন শিক্ষক, 
শিক্ষার্থী ও কর্মকর্তা প্রথম আলোকে জানান, আন্দোলনে যোগ না দেওয়ার জন্য 
শনিবার থেকে তাঁদের হুমকি দেওয়া হচ্ছে। অনেকের বাসায় গিয়ে কিংবা মুঠোফোনে 
হুমকি দেওয়া হচ্ছে। শুধু তা-ই নয়, ক্যাম্পাসে অবস্থান করে লাগাতার কর্মসূচি
 পালন করায় নানা অপপ্রচারও চালানো হচ্ছে। তবে তাঁরা বলছেন, দাবি পূরণ না 
হওয়া পর্যন্ত তাঁরা কর্মসূচি থেকে ফিরে যাবেন না। হুমকির বিষয়ে জানতে চাইলে
 উপাচার্য বলেন, ‘শিক্ষকেরা চালকদের ভয় দেখিয়ে গাড়ি চালাতে বলেছেন। হুমকি 
তো তাঁরাই দিচ্ছেন।’	  </div>
	  <!-- Comments Bars, To Show Comments -->
	  <br/><br/><hr/>
      <div id="comments">
        <h2>পাঠকের মন্তব্যঃ</h2>
				<ul class="commentlist">
		        
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">কাদির রাজু</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-07-23 00:25:41</a></div>
            <p>
				সরকার এর বুয়েট নিয়ে ভাবনা কি নাই????			</p>
          </li>
		          
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">শানতনু</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-07-23 00:43:06</a></div>
            <p>
				ভালো লাগলো			</p>
          </li>
		          
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">কবির হোসেন</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-07-23 00:54:24</a></div>
            <p>
				!!!!!!!!!!!!!!			</p>
          </li>
		          
          <li class="comment_odd">
            <div class="author"><span class="name"><a href="#">রাশেদ</a></span> <span class="wrote">&nbsp;লিখেছেন :</span></div>
            <div class="submitdate"><a href="#">2012-07-23 02:11:58</a></div>
            <p>
				ফেফেফেফেফরফগরগগগগ			</p>
          </li>
		          </ul>
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
			<input type="hidden" name="newsID" value="50038777991a3">
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
                    <li><a href="500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">লাইভ নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="Md. Abdul Kadir Razu"> মোঃ আব্দুল কাদির রাজু</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>