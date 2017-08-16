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
      <li class="current"><a href="../../feature/default.htm">ফিচার</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <h1><span style="color:maroon;">সাফল্যের সন্ধানে</span></h1>
	  <p>
		<br/>তারিখ: ০৪-০৭-২০১২<br/><hr/>	  </p>
	        <img class="imgr" src="../../../newsImages/2012-07-03-17-35-09-4ff32d4dda59f-1.jpg" alt="বিসিএস পরীক্ষার প্রস্তুতি" width="125" height="125" />
      	  <div style="font-size:12pt;">
	  বিসিএস প্রিলিমিনারি পরীক্ষার ফল বেরিয়েছে সম্প্রতি। এখন শুরু হবে মূল 
লড়াইটা। লিখিত পরীক্ষার প্রস্তুতি কেমন হওয়া উচিত তা জানাচ্ছেন ৩০তম 
বিসিএসের (কাস্টমস) প্রথম স্থান অধিকারী সুশান্ত পাল<br><br>অভিনন্দন! যারা
 বিসিএস প্রিলিমিনারি পরীক্ষায় উত্তীর্ণ হয়েছেন, তাদের জানাই অভিনন্দন। এখন
 সময় এসেছে আরও কঠিন পরীক্ষায় মুখোমুখি হওয়ার। লিখিত পরীক্ষার 
পূর্বপ্রস্তুতি গ্রহণের। এখন নিজের স্বপ্ন নিয়ে ভাবুন, স্বপ্নও আপনাকে নিয়ে
 ভাববে। সময়টাকে সঠিকভাবে কাজে লাগাতে পারলে তা আপনাকে যে অনেক দূর নিয়ে 
যাবে, এতে কোনো সন্দেহ নেই।<br>প্রথমেই পড়ে ফেলুন ১০ম থেকে ৩২তম বিসিএস 
লিখিত পরীক্ষার সব প্রশ্নোত্তর। ভালোভাবে পড়াশোনা করুন, বারবার। প্রশ্নের 
ধরন সম্পর্কে একটা স্বচ্ছ ধারণা নিন। যুদ্ধে যাওয়ার আগে নিজের দুর্বল ও সবল
 দিকগুলো জানা থাকলে প্রস্তুতি নেওয়া সহজ হয়। যেকোনো প্রতিযোগিতামূলক 
পরীক্ষায় ভালো করতে হলে কী কী পড়তে হবে, তা জানার চেয়ে অনেক বেশি জরুরি কী 
কী বাদ দিয়ে পড়বেন, সেটা ঠিক করা।<br>সবকিছু পড়ার সহজাত লোভ সামলাতে হবে। 
শতভাগ প্রস্তুতি নিয়ে বিসিএস পরীক্ষা দেওয়া কারও পক্ষেই সম্ভব নয়। একটি 
অপ্রয়োজনীয় প্রশ্ন একবার পড়ার চেয়ে প্রয়োজনীয় প্রশ্নগুলো বারবার পড়া অনেক 
ভালো।<br>বিজ্ঞান ও প্রযুক্তি, ইংরেজি, গণিত ও মানসিক দক্ষতা, বাংলা—এই 
চারটি বিষয়ের ওপর বেশি জোর দিন। লিখিত পরীক্ষায় এমন কিছু প্রশ্ন থাকে 
যেগুলোর ওপর প্রতিযোগিতায় টিকে থাকা, না থাকা অনেকখানি নির্ভর করে। এ ধরনের
 প্রশ্নের মধ্যে রয়েছে সংক্ষিপ্ত প্রশ্ন, টীকা, শর্ট নোট, সারাংশ, সারমর্ম,
 ভাবসম্প্রসারণ, অনুবাদ, ব্যাকরণ ইত্যাদি।<br>বিজ্ঞান ও প্রযুক্তি, 
বাংলাদেশ বিষয়াবলি, আন্তর্জাতিক বিষয়াবলি—এই বিষয়গুলোতে প্রয়োজনীয় চিহ্নিত 
চিত্র ও মানচিত্র আঁকুন। যথাস্থানে বিভিন্ন ডেটা, টেবিল, চার্ট প্রদান 
করুন।<br>সম্ভব হলে কয়েকটি দৈনিক পত্রিকা নিয়মিত পড়ুন। অনলাইনেও পড়তে পারেন।<br>সম্ভব
 হলে অন্তত তিন-চারটি গাইড বই সংগ্রহে রাখুন। তবে খেয়াল রাখবেন গাইডে অনেক 
ক্ষেত্রে ভুল থাকতে পারে। তাই পড়ার সময় সেটাও খেয়াল রাখতে হবে।<br>বিভিন্ন 
রেফারেন্স, টেক্সট ও প্রামাণ্য বই অবশ্যই পড়তে হবে। বিসিএস পরীক্ষায় অনেক 
প্রশ্নই কমন পড়ে না। তাই এসব বইপত্র পড়া থাকলে উত্তর দেওয়াটা সহজ হয়।<br>প্রশ্নের
 উত্তর দেওয়ার সময় বিভিন্ন লেখকের রচনা, পত্রিকার কলাম ও সম্পাদকীয়, 
সংবিধানের সংশ্লিষ্ট ধারা, বিভিন্ন রেফারেন্স থেকে উদ্ধৃতি দিলে নম্বর 
বাড়বে।<br>নোট করে পড়ার বিশেষ প্রয়োজন নেই। এতটা সময় পাবেন না। বরং কোন 
প্রশ্নটা কোন সোর্স থেকে পড়ছেন, সেটা লিখে রাখুন। রিভিশন দেওয়ার সময় কাজে 
লাগবে।<br>বাংলাদেশের সংবিধানের ব্যাখ্যা, বিভিন্ন সংস্থার অফিসিয়াল 
ওয়েবসাইট, কিছু আন্তর্জাতিক পত্রিকা ইত্যাদি সম্পর্কে খোঁজখবর রাখুন। 
তথ্য-উপাত্ত সংগ্রহে রাখুন। প্রয়োজনে পরীক্ষার খাতায় রেফারেন্স উল্লেখ করে 
উপস্থাপন করুন।<br>হাতের লেখা সুন্দর হলে ভালো, না হলেও ক্ষতি নেই। 
পরীক্ষায় অনেক দ্রুত লিখতে হয়। তাই ৩ থেকে ৫ মিনিটের মধ্যে এক পৃষ্ঠা লেখার
 চর্চা করুন। খেয়াল রাখতে হবে, যাতে লেখা পড়া যায়। সুন্দর উপস্থাপনা নম্বর 
বাড়াতে সহায়ক হতে পারে।<br>আরেকটা জরুরি কথা, কোনোভাবেই কোনো প্রশ্ন ছেড়ে 
আসবেন না। উত্তর জানা না থাকলেও ধারণা থেকে অন্তত কিছু লিখে আসুন। আপনি 
প্রশ্ন ছেড়ে আসছেন এটা কোনো সমস্যা নয়, সমস্যা হলো, কেউ না কেউ সেটা উত্তর 
করে আসবে নিশ্চয়।<br>নিজের সাজেশনস্ নিজেই তৈরি করুন। কারও সাজেশনস্ ফলো করবেন না। এই প্রশ্নটা আসবেই আসবে, এ জাতীয় মিথ্যা আশ্বাসে কান দেবেন না।<br>যেকোনো প্রয়োজনীয় বিষয় নিয়ে একনাগাড়ে লেখার দক্ষতা অর্জন করুন। পড়ার অভ্যাস বাড়ান। এতে আপনার লেখা মানসম্মত হবে।<br>কোনো উত্তর মুখস্থ করার দরকার নেই। বরং একাধিকবার পড়ুন। ধারণা থেকে লেখার অভ্যাস গড়ে তুলুন।<br>এই
 দ্বিধা সবারই থাকে, কোন ভাষায় উত্তর লিখব। ইংরেজিতে নাকি বাংলায়?— এ 
প্রশ্ন অনেকেরই। আমি বাংলায় লিখেছি। তবে, আপনি ইংরেজিতেও লিখতে পারেন। এ 
ক্ষেত্রে প্রাঞ্জল ও সহজ ভাষায় লিখাটাই বড় কথা।<br>অনেকেই বলবে, আমার তো 
অমুক অমুক প্রশ্ন পড়া শেষ! ব্যাপারটাকে সহজভাবে নিন। আপনার আগে কেউ কাজ শেষ
 করলেই যে শেষ হাসিটা তিনিই হাসবেন, এমন তো কোনো কথা নেই।<br>মাঝেমধ্যে 
পড়তে ইচ্ছা করবে না। আমারও করতো না। সারাক্ষণ পড়তে ইচ্ছা করাটা মানসিক 
সুস্থতার লক্ষণ না। হোয়াই সো সিরিয়াস? তাই, ব্রেক নিন, পড়াকে ছুটি দিন কখনো
 কখনো। দুই দিন পড়া হলো না বলে মন খারাপ করে আরও দুই দিন নষ্ট করার তো কোনো
 মানে হয় না। অনুশোচনা করার সময় কোথায়!<br>জীবনটা যেন পৃথিবীর দূরপাল্লার 
দৌড়বিদদের জুতোর মতো। তাকে ছোটাতে হয়। তবু জীবন মাঝেমধ্যে থমকে যায়। 
নাম-পরিচয়হীন থাকার যে কী যন্ত্রণা, সেটা আমি খুব ভালোভাবে বুঝি। সাফল্যের 
জন্য আত্মবিশ্বাস জরুরি, নাকি আত্মবিশ্বাসের জন্য সাফল্য জরুরি—এই 
দ্বন্দ্বে কেটেছে বহু দিন। ভেবেছিলাম, বুঝি হারিয়েই যাব! কঠিন সময়ের স্রোতে
 শুধু কঠিন মানুষগুলোই টিকে থাকে—এই বোধটুকু কাজ করত সব সময়। নিয়তি সহায় 
হয়েছে। আমি হারাইনি! স্বপ্ন নির্মাণ করুন। তাকে স্পর্শকের স্পর্ধায় ছুঁয়ে 
ফেলার শপথ নিন। আপনাদের জন্য আগাম শুভকামনা।	  </div>
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
			<input type="hidden" name="newsID" value="4ff6f5218079c">
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
		            <li><a href="5003881c73ca7">মুক্তিযোদ্ধা সন্তানদের জন্য চাকরির সুযোগ</a></li>
                    <li><a href="4ff6f5bfcb1de">পাহাড়ের ডাক</a></li>
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