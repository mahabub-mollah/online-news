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
    <p>ফোন নম্বর :  ০১৭৩১ ২৯৩৯৬০ | ই মেইল : sopnilsamrat@yahoo.com</p>
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
      <li class="current"><a href="../../literature/default.htm">শিল্প-সাহিত্য</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">জননী জন্মভূমিশ্চ...</span></h1>
	  <p>
		মুস্তাফা জামান আব্বাসী <br/>তারিখ: ১৩-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/janani-untitled-8.jpg" alt="লুৎফন, আব্বাসউদ্দিনের স্ত্রী" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  দিন বয়ে চলেছে। সামনে কী আছে জানা নেই। স্মৃতিগুলো সব সময় খেলা করছে। কখনো 
বা তাদের নিয়ে খেলছি। এ খেলা আমার কাছে দুরন্ত খেলা। খুব ভালো লাগছে।<br>মা বলতে মায়ের কোলে শিশুটি, মাকে জড়িয়ে ধরছি, মা আদর করছেন, খাইয়ে দিচ্ছেন, ছোট থেকে বড় বয়স পর্যন্ত।<br>ছেচল্লিশ
 বছর, ঊনিশ শ ষাট থেকে দুই হাজার ছয়, দেখেছি তাঁর বৈধব্য বেশ। স্বামী অল্প 
বয়সে তিনটি সন্তান রেখে চলে যান পরপারে। সংসারের হাল ধরেছেন হাসিমুখে। শুধু
 নিজ সংসারই নয়, স্বামীর রেখে যাওয়া আরও দু-তিনটি দেবরের সংসার, গ্রামে 
ফেলে আসা বেশ কয়েকটি ভাইবোনের সংসার, আত্মীয়স্বজনের সংসার। তার ওপর পাড়ার 
যত ছেলেমেয়ে তাদের সংসার। এতগুলো সংসার যে মা বহন করে এসেছেন এত দীর্ঘকাল, 
তাঁর কথা নিশ্চয়ই হবে এমন, যা সমাজে রেখেছে উদাহরণ। এত দিন পরে হলেও লিখতে 
বসেছি মায়ের কথা, যে মা সংসারে, দেশে, পৃথিবীতে বিরল।<br>মায়ের কথা মনে 
হলেই গিয়ে উপস্থিত হই ডোমারের আদি নানাবাড়িতে, যার উঠানে শুকাতে দিয়েছে 
বরই, বড় বড় জলপাইগাছ থেকে পাড়া জলপাই, অজস্র পুঁটি ও খলসে মাছ শুকাতে দেওয়া
 হয়েছে সারা উঠানে। মা সুন্দর স্বাস্থ্য সুন্দর অবয়ব নিয়ে গল্প করছেন 
শুভ্রবসনা অনিন্দ্যকান্তি নানির সঙ্গে, ভাষা রংপুরের কথ্য। ঘোরাঘুরি করছি 
চারদিকে, কোনোক্রমে যদি একটি মিষ্টি আলু পাওয়া যায়, যা চিনি দিয়ে মিশিয়ে 
খেতে লাগে অমৃতের মতো। মিষ্টি আলুর দেশি নাম ‘শেখালু’, যা এখনো ভালো লাগে। 
খেতে খেতে চলে যাই মা ও নানির স্মৃতিবাগানে, এখনো বড় দোকানগুলোয় জলপাই 
কিনতে গিয়ে দেখতে পাই উত্তরাঞ্চলের বড় বড় জলপাইগাছ, যেগুলো আকাশ ছুঁতে চায়।
 সেই সঙ্গে জলপাইয়ের নানা রকমের আচারের বয়ামগুলো চোখের সামনে ভাসে। নানির 
বড় ঘরের চালের নিচে কয়েকটি কাঠের থাক সাজানো যেখানে আচারের বয়াম। খালারা 
ওগুলোর পেছনে। পিঠাপিঠি নেহার খালা, এখন আমার মতোই বয়স। জিজ্ঞেস করলাম, 
তোমার মনে আছে ওই বয়ামগুলোর কথা, সেই সঙ্গে আমার হাতে তাঁর কিছু উত্তমমধ্যম
 খাওয়ার স্মৃতি। খালা বলতেন, তোর চেয়ে আমি বড়, তাই তোর কাছে আমি মার খাব, 
তা কেমন করে হয়। এই বলেই আমার কান মলে দিতেন।<br>আব্বাসউদ্দিনের স্ত্রী হওয়ার সুবাদে সাতগ্রামে মায়ের বিরাট সম্মান। সবাই এসে জিজ্ঞেস করে,<br>লুৎফন
 কী বলে? যেন লুৎফন বললেই সাত খুন মাফ। মা ছিলেন বুদ্ধিমতী। সবার সঙ্গেই 
ছিল সুন্দর ব্যবহার, বুদ্ধিটি ধার দিতেন, তবে ভেবেচিন্তে। যেমন কারও বেড়া 
নিয়ে গণ্ডগোল, কারও কুয়ার পানি নিয়ে বচসা, কারও জামাই দুর্ব্যবহার করছে 
বউয়ের সঙ্গে, মা সেগুলো শুনতেন গভীর মনোযোগ দিয়ে এবং যতখানি সম্ভব মিটমাট 
করে দিতেন। সেই আমলে তাঁর কাছে ছিল না অর্থের তেমন সম্ভার। একজন গায়কের 
স্ত্রীর কাছে কটাকাই বা থাকে। কিন্তু মায়ের মন ছিল এত নরম যে আঁচলের খুঁটে 
বেঁধে রাখা সব টাকাই তিনি দিয়ে দিতেন। অনেক দিন তাঁর এই উদার দান স্বচক্ষে 
পর্যবেক্ষণ করেছি বৈকি।<br>মা-খালারা ছিলেন চার বোন। তিনি বড়, খতে 
খালাম্মা, হাসনা খালাম্মা, চায়না খালাম্মা ও নেহার খালাম্মা। ভাই পাঁচজন। 
মোশাররফ, মোজাম্মেল, সোলায়মান, মফিজার ও বাবু। সোলায়মান মামু বেঁচে আছেন, 
বয়স ৮৫, শক্ত-সমর্থ এখনো। সাত গ্রামে তাঁর মতো দয়ালু ও বিচক্ষণ ব্যক্তি 
খুঁজে পাওয়া দায়। সারা দিন কাটে তাঁর নামাজ, তসবিহ ও তাহলিলে। দীর্ঘদেহী 
সূক্ষ্ম মনের অধিকারী এই মানুষটি আমার কাছে এক বিস্ময়। প্রতিটি সন্তান নিজ 
হাতে মানুষ করেছেন। চার ছেলে চারদিকে সমানভাবে নিজেদের ছায়া বিস্তার করে 
চলেছে।<br>ডোমার উত্তরবঙ্গের ঘুমন্ত রেলস্টেশন, পার্বতীপুর-সৈয়দপুরের দিক 
থেকে যেখানে দিনে-রাতে দুটি সময় রেলগাড়ি এসে থামে মাত্র এক মিনিটের জন্য। 
৫০ বছর আগেও এক মিনিট, এখনো এক মিনিট। রেলওয়ে স্টেশনে ছিল বিরাট কয়েকটি 
পাটের গোডাউন, তা ভর্তি উত্তরাঞ্চলের গ্রাম থেকে আহূত পাট দিয়ে, রেলগাড়িতে 
চালান যেত আসাম, পশ্চিমবঙ্গ ও পূর্ববঙ্গে। টিনের চালায় বড় বড় স্টোর 
ভগ্নপ্রায়, বহুদিন এই স্টেশনের পেছনে কোনো অর্থ ব্যয় হয়নি। রেললাইনের নিচে 
পাথরগুলো ক্ষয়িষ্ণু, ডোমার স্টেশনটির নামও লেখা হয়েছে কয়েক বছর আগে, 
বৃষ্টির পানিতে ক্ষয়ে এসেছে কালো অক্ষর।<br>রেলগাড়ি যেত উত্তরাঞ্চলের 
শিলিগুড়ি পর্যন্ত, পরে হলদিবাড়ি, এখন চিলাহাটি বর্ডার। এরপর রেললাইন 
স্তব্ধ...। দুটি উঁচু ঢিবি দাঁড়িয়ে আছে, এখানে রেললাইন শেষ... দুই বাংলার 
মানুষের বুকের ওপর দিয়ে চলে গেছে স্তব্ধতার হাহাকার। হলদিবাড়িতে থাকেন ছোট 
খালাম্মা হাসনা, ছোটবেলায় তাঁর সঙ্গে লুকোচুরি খেলেছি। আমাকে আদর করতেন। 
ওখানেই তাঁর বিয়ে হয়েছে, ছেলেমেয়েরা ভারতের নাগরিক। স্বামীর ফেলে যাওয়া 
সহায়সম্পত্তি ছেড়ে খালাম্মা বাংলাদেশে আসেননি। আগে মাঝে মাঝে আসতেন 
ধাক্কায়, ধাক্কা পাসপোর্টে। এখন আর আসা হয় না। মোবাইল অনেক সুবিধা করে 
দিয়েছে। হলদিবাড়ি থেকে অনায়াসেই কথা বলা যায় ডোমারে, দুই দেশের দারোগারা 
কথা বলা থামাতে পারেননি।<br>ডোমারে গেলে সাত-আট বছরের বালক হয়ে যাই। জিলা 
স্কুলটি বেশ আধুনিক, ক্লাসরুমগুলো এখনো ঝকঝকে। ক্লাস থ্রি অথবা ফোরে পড়েছি,
 কোচবিহারে বা কলকাতায় যখন গণ্ডগোল, আব্বা পাঠিয়ে দিতেন ডোমারে, যথারীতি ওই
 স্কুলে খাতা-পেনসিল নিয়ে হাজির। রোল খাতায় নাম নেই, বেতনের বালাই নেই, 
তাতে কী, আব্বাসউদ্দিনের ছেলে বলে কথা। নানাবাড়ির সামনেই একটি স্কুল, সরলা 
বিদ্যানিকেতন, মা সেখানেই পড়াশোনা করেছেন। আগের চেয়ে সুন্দর হয়েছে এখন। 
লুৎফন তাদের মেয়ে। ওই স্কুলে লুৎফন পড়েছে বলে তারা খুব গর্বিত। পুরো 
চিকনমাটি গ্রামটি গর্বিত লুৎফন ও আব্বাসউদ্দিনকে নিয়ে।<br>মা যখন লিখতেন, 
সবাই যার যার কাজে ব্যস্ত। মাকে গিয়ে সুধালাম, মা কী লিখছ? মা বললেন, ও 
কিছু না। তাঁর হাতের লেখা মনে হতো সবচেয়ে মিষ্টি। সব সময় খিদে লাগত, বাড়তি 
বয়সে সবারই লাগে, এটা কোনো অন্যায় নয়, কিন্তু আমার খিদের খবর একমাত্র মা 
ছাড়া কাউকে বলতাম না। মাকে গিয়ে জড়িয়ে ধরতেই মা বলতেন, কী রে, খিদে লেগেছে?
 এই না সকালের নাশতা খেলি?<br>গরিব ছিলাম না, সচ্ছলও ছিলাম না। সংসারে 
অর্থের প্রাচুর্য ছিল না, যতটুকু ছিল তাতে সংসার কেটে যেত। আজ ফ্রিজ ভরা 
খাবার, কোল্ড ফ্রিজে মাছ-মাংসভর্তি, অতিথি এলেই নানা খাবার প্রস্তুত। সেদিন
 তেমন ছিল না। পুরানা পল্টনের বাড়িতে ছিল অনেকগুলো আতা ফলের গাছ, মা যত্ন 
করে পেড়ে রাখতেন। ক্ষুধার মুহূর্তে ফলগুলো বেহেশতি মেওয়ার মতো। চার-পাঁচটা 
পেয়ারার গাছ।<br>বাড়িতে ছিল বেশ কয়েকটি জামরুলের গাছ। কোনো কোনোটির রং ছিল 
লাল। পাড়ার ছেলেরা দেয়াল টপকে সেই ফলগুলো চুরি করতে আসত। আমার মা তাদের ধরে
 ফেলতেন, আবার তাদেরই সেগুলো উপহার দিতেন। এ ছাড়া আমগাছ ছিল চারটি। আমগুলো 
তেমন ভালো ছিল না। আমি যে আমের চারা এনেছিলাম সেটি পরে মহীরুহে পরিণত হয়। 
বছরে দেড় শ থেকে দুই শ আম হতো। আমার স্ত্রী আসমা সে আমগুলো একসঙ্গে পেড়ে 
রাখত। খাটের নিচে বিছিয়ে রাখা আমগুলো আস্তে আস্তে পাকত। যেহেতু এই আমগাছটি 
আমার রোপণ করা, কাজেই এতে ছিল আমার সর্বস্বত্ব। তবে আমার বড় ভাই, বোন ও মা 
সবচেয়ে বেশি ভাগ পেত। আমার শ্বশুরবাড়িতেও এ আমের ভাগ যেত। কথাগুলো এই জন্যই
 মনে পড়ল যে এখন আক্রার বাজারে যখন কেজি হিসেবে আম কিনতে যাই তখন মনে পড়ে এ
 আমগুলো প্রতিবছর মা, ভাইবোনদের মধ্যে বিলিয়ে দিতে কী আনন্দই না পেতাম। ওই 
আমের স্বাদ এখনো আমার মুখে লেগে আছে।<br>বেতার জগৎ নামের একটি পত্রিকা 
কলকাতা থেকে বেরোত। প্রথম পৃষ্ঠায় নজরুলের ছবি। ছবিটি এত ভালো লাগল যে সেটি
 বাঁধাই করে আনলাম। রাখলাম মায়ের ঘরে। বাবার পরেই মা সবচেয়ে ভালোবাসতেন 
নজরুলকে। নজরুল যখন অসুস্থ, তখন তিনি তাঁর কথা বলতে গিয়ে মাঝে মাঝে কেঁদে 
উঠতেন। সেই মা নজরুল সম্বন্ধে কী লিখেছেন, তা পড়লে বিস্মিত হই।<br>একদিন মা
 আমার ওপর খুব রেগে গেলেন, প্রধান কারণ আমার ব্যবহার। এমএ পাস করে ফিরেছি, 
অথচ রোজগার করার কোনো ক্ষমতা নেই। আম্মা কঠিন কণ্ঠে বললেন,<br>তোমাকে আদর 
দিয়ে দিয়ে মাথায় তুলেছি। তুমি পরীক্ষাতেও ভালো রেজাল্ট করনি। সবাই আশা 
করেছে তুমি ফার্স্ট ক্লাস পাবে, তা তুমি পাওনি। সবাই ভেবেছে তুমি ভালো 
ছাত্র, তা তুমি নও। তুমি সিএসএস-এও ভালো রেজাল্ট করতে পারনি। এমন ছেলে দিয়ে
 আমি কী করব। এতে আমি মনোক্ষুণ্ন হলাম নিঃসন্দেহে, সবগুলোর কারণ আমি নিজেই,
 অথচ এমনি মায়ের প্রতি অধিকার যে সবগুলোর জন্য মাকেই দায়ী করলাম এবং নিজকে 
প্রমাণ করতে চেষ্টা করলাম যে আমি ধোয়া তুলসীপাতা।<br>আমি যে লুকিয়ে লুকিয়ে প্রেম করছি, তা নিয়ে মা একটি কথাও তুললেন না। সেখানে আঘাত দেওয়া মায়ের সাজে না, কারণ মেয়েটিকে তাঁর পছন্দ।<br>পরের
 দিন গেলাম বাংলা একাডেমীতে। ওখানে অ্যাসিস্ট্যান্ট কালচারাল অফিসারের একটি
 চাকরি খালি হয়েছে। এর জন্য আমি উপযুক্ত, কারণ এমএ পাস। গান জানি, কবিতা 
আবৃত্তি করতে পারি, ভালো সংগঠক। বেতন ২৫০ টাকা। মাকে বললাম, কালই চাকরি 
পাব, তুমি ভেব না। মাকে জড়িয়ে ধরতে গেলাম, মা আমাকে সে সুযোগ দিলেন না।<br>পরিচালক
 চাকরি দিলেন না। পিতৃবন্ধু ইব্রাহিম খাঁ ও আলিমুর রহমান খান একটিও প্রশ্ন 
করলেন না, কারণ চাকরির তখন খুব খারাপ অবস্থা। ওই চাকরি যিনি পেলেন 
পরিচালকের নিকটাত্মীয়। আব্বাসউদ্দিনপুত্র হওয়ার কোনো সুযোগ পেলাম না।<br>আবার
 মায়ের কাছে হাত পাততে হলো। অল্প চাইতেই মা ৫০০ টাকা দিলেন। ২৫০ টাকায় 
করাচির টিকিট। ২৫০ টাকা হাতে রইল। প্রথম চাকরি জাফর ইব্রাহিম কোম্পানির 
অ্যাডমিনিস্ট্রেটিভ ম্যানেজার। বেতন ৭৫০ টাকা। মাকে লিখলাম চাকরি পেয়েছি 
এবং ভালো বেতন। বড় ভাই তখন লন্ডন থেকে ফিরেছেন ব্যারিস্টারি পাস করে। তাঁর 
মতো প্রতিভাবান লোক বাংলাদেশে বিরল। আমরা এক বাড়িতেই, তাঁর রোজগার শূন্যের 
কোঠায়। এটাই বাস্তবতা। করাচিতে ছয় মাস পরই চাকরি পেলাম আরও বড়। মাসিক বেতন 
এক হাজার টাকা। পরে হলাম হাইসন্স গ্রুপ অব ইন্ডাস্ট্রিজের জেনারেল 
ম্যানেজার।<br>মাকে গিয়ে বললাম, তুমি সেদিন বকেছিলে...। মা বললেন, তোকে 
ভালোবাসি বলেই বকেছি। তুই আমার আদরের ধন, তোর ওই বড় চাকরির জন্য আমি 
আল্লাহ্র কাছে দরখাস্ত করেছি।<br>পরের কাহিনি আমার গ্রন্থে। চাচা আবদুল 
করিম, পছন্দ করা মেয়েটিকে বিয়ে করার জন্য সবচেয়ে বেশি সাহায্য করলেন। মা, 
বড় ভাই সবাইকে রাজি করিয়েছেন। ধুমধাম করে বিয়ে হয়ে গেল পুরানা পল্টনে। 
প্রতিটি ঘটনা চোখের সামনে জ্বলজ্বল করছে, যেন কালই বিয়ে হলো। বিয়ের পাগড়ি 
পরালেন আমার ভাই। আমার চোখে পানি, কারণ পিতা সে বিয়েতে অনুপস্থিত। আমার মা,
 ফুফু আম্মা, নানি, মীর্ণা তার বন্ধুরা এবং পাড়া-প্রতিবেশীর চোখে ঘুম নেই। 
ফুফু আম্মা আব্বার চেয়ে দুই বছরের বড়, তিনি বলরামপুরের বৈরালী নৃত্যের 
সঙ্গে গেয়েছিলেন, ‘হাফা হাফা নাপা নাপা পাত, ওকি তাৎ ফালানু পাত, ওকি দই 
ভালাকো ভাইয়া রে’।<br><br>[.... ‘জননী জন্মভূমিশ্চ’ থেকে একটি অধ্যায়]	  </div>
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
			<input type="hidden" name="newsID" value="50038920416b6">
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
		            <li><a href="500c6b36b0baa.php">আমি হিমুও না, মিসির আলিও না</a></li>
                    <li><a href="500388b556bc8.php">নারীর ক্ষমতায়নে উচ্চশিক্ষা</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="../../../default.htm">বাংলা নিউজ ২৪</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="../../../../../../www.razu.comeze.com/default.htm" title="samrat kumar dey"> সম্রাট কুমার দে
    </a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>