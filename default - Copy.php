<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>প্রথম সকাল</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="scripts/phonetic_int.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#newsletter_go").click( 
  
    function(){
    
        var username=$("#username").val();
        var mailAddress=$("#email").val();
      
        $.ajax({
        type: "POST",
        url: "index.php/register_sub/post_action",
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
 a:visited {
	color: #FF0055;
}
 body,td,th {
	color: #FF0055;
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
	<li><a href="index.php/bangla_help.php"><img class="noBangla" src="images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="index.php/contactUs.php">যোগাযোগ</a></li>
		
		    </ul>
    <a href="admin.php">সম্পাদকীয় প্যানেল</a><br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="default.php"><strong>প্রথম সকাল</strong></a></h1>
      <p>জাগবে মানুষ পড়বে খবর প্রথম সকাল হবে সফল</p>
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
		<a href="index.php/details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a> &nbsp;
		</li> 
				<li>
		<a href="index.php/details_news/index/50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="index.php/details_news/index/500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="index.php/details_news/index/5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
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
				
        <li><a href="default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="index.php/national/default.php">জাতীয়</a></li>
		
				
        <li><a href="index.php/international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="index.php/politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="index.php/sports/default.php">খেলা</a></li>
		
				
        <li><a href="index.php/entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="index.php/technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="index.php/economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="index.php/feature/default.php">ফিচার</a></li>
		
				
        <li><a href="index.php/literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="index.php/education/default.php">শিক্ষা</a></li>
		
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
﻿<!--Code To Show Body Of The Site -->
<div class="wrapper">
  <div class="container">
    <div class="content">
	<!-- Code For Slideshow Of Top News -->
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="images/demo/do1.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ASHULIA, Bangladesh —</h2>
              <p> The fire alarm shattered the monotony of the Tazreen Fashions factory. Hundreds of <br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do2.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ASHULIA, Bangladesh —</h2>
              <p> The fire alarm shattered the monotony of the Tazreen Fashions factory. Hundreds of <br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do3.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ASHULIA, Bangladesh —</h2>
              <p> The fire alarm shattered the monotony of the Tazreen Fashions factory. Hundreds of <br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do4.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ASHULIA, Bangladesh —</h2>
              <p> The fire alarm shattered the monotony of the Tazreen Fashions factory. Hundreds of <br />
                <a href="#">Continue Reading ;</a></p>
            </div>
          </li>
          <li><img src="images/demo/do5.jpg" alt="" />
            <div class="panel-overlay">
              <h2>ASHULIA, Bangladesh —</h2>
              <p> The fire alarm shattered the monotony of the Tazreen Fashions factory. Hundreds of <br />
                <a href="#">Continue Reading ;</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column">
	
	<!-- Code To Show Latest 10 or More News -->
      <h2 style="color:maroon; font-weight:bold;">সর্বশেষ খবর </h2>
	  <ul class="latestnews">
				<li>
		
			<strong><?php include('latest.php');?></strong>
			
        </li>
		
        </li>
		      </ul>
    </div>
    <br class="clear"/>
  </div>
</div>

<!-- Advertisement Block -->
<div class="wrapper">
 <!--
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  -->
  
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="index.php/national/default.htm">জাতীয় &raquo;</a></h2>
	        <img src="newsImages/abul-sm20120722150623.jpg" width="100" height="100" alt="সৈয়দ আবুল হোসেনের পদত্যাগ" />
      <p><strong><a href="index.php/details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a></strong></p>
      <p>
	  পদ্মাসেতু নিয়ে বাংলাদেশ সরকারের সাথে বিশ্বব্যাংকের সমঝোতা হতে যাচ্ছে। বিশ্বব্যাংকের তরফ থেকে এরই মধ্যে সরকারকে এটি জানানো হয়েছে।	  </p>
    </div>
	
    <div class="fl_right">
      <h2><a href="index.php/international/default.htm">আন্তর্জাতিক &raquo;</a></h2>
            <img src="newsImages/fish4ff48cf976135-untitled-11.jpg" width="100" height="100" alt="শিল্পীর তুলিতে মত্স্যকন্যা" />
      <p><strong><a href="index.php/details_news/index/4ff6e21066482.php">‘মৎস্যকন্যাদের অস্তিত্বের প্রমাণ পাওয়া যায়নি’</a></strong></p>
      <p>
	  যুক্তরাষ্ট্রে মৎস্যকন্যাদের অস্তিত্বের কোনো প্রমাণ পাওয়া যায়নি। দেশটির সরকারি সংস্থা ন্যাশনাল ওশান সার্ভিস এ ব্যতিক্রমী ঘোষণা দিয়েছে। টেলিভিশনে মৎস্যকন্যাদের নিয়ে একটি অনুষ্ঠান সম্প্রচারের পর লোকজন ওই পৌরাণিক প্রাণীদের অনুসন্ধান শুরু করেছিল।	  </p>
    </div>
	
    <br class="clear" />
	
    <div class="fl_left">
      <h2><a href="index.php/technology/default.htm">তথ্যপ্রযুক্তি &raquo;</a></h2>
            <img src="newsImages/0-internet.jpg" width="100" height="100" alt="কম্পিউটার" />
      <p><strong><a href="index.php/details_news/index/4ff6f23cb4198.php">৯ জুলাই ইন্টারনেট বিপর্যয়ের ঝুঁকিতে আড়াই লাখ কম্পিউটার</a></strong></p>
      <p>
	  সারাবিশ্বে ৯ জুলাই আড়াই লাখেরও বেশি কম্পিউটারে ইন্টারনেট সংযোগ বন্ধ হয়ে যেতে পারে।	  </p>
    </div>
    <div class="fl_right">
      <h2><a href="index.php/entertainment/default.htm">বিনোদন &raquo;</a></h2>
            <img src="newsImages/katrina-kaif1.jpg" width="100" height="100" alt="ক্যাটরিনা কাইফ" />
      <p><strong><a href="index.php/details_news/index/4ff6ee98920f5.php">আবারও সবাইকে টপকালেন ক্যাটরিনা!</a></strong></p>
      <p>
	  যুক্তরাজ্যের একটি ফ্যাশন ম্যাগাজিন আয়োজিত সাম্প্রতিক এক ভোটে আবারও বিশ্বের সবচেয়ে আবেদনময়ী নারী নির্বাচিত হয়েছেন বলিউডের অভিনেত্রী ক্যাটরিনা কাইফ।	  </p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- Sports Part -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2><a href="index.php/sports/default.htm">খেলা &raquo; </a></h2>
        <ul>
				  <li>
          <img src="newsImages/sachin-tendulkar.jpg" width="190" height="130" alt="শচীন টেন্ডুলকার" />
            <p>শচীন টেন্ডুলকার মাত্র ১৬ বছর বয়সে যাঁদের সঙ্গে আন্তর্জাতিক ক্রিকেট খেলা শুরু করেছিলেন, তাঁদের প্রায় সবাই বিদায় বলেছেন ক্রিকেটকে। তবে লিটল মাস্টার আরও খেলে যেতে চান।</p>
            <p class="readmore"><a href="index.php/details_news/index/4ff6e6966f79b.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="newsImages/goal-line-technology-image.jpg" width="190" height="130" alt="গোললাইন প্রযুক্তি" />
            <p>ফুটবলে গোললাইন প্রযুক্তি ব্যবহারের অনুমোদন দিয়েছেন নীতি-নির্ধারকেরা। এর মধ্য দিয়ে এই প্রযুক্তির ব্যবহার নিয়ে প্রায় এক দশক ধরে চলা বিতর্কের অবসান ঘটল।</p>
            <p class="readmore"><a href="index.php/details_news/index/4ff6e6306f8aa.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="newsImages/dravid_image.jpg" width="190" height="130" alt="রাহুল দ্রাবিড়" />
            <p>অন্য ক্রিকেটারদের সমর্থন পেলে দ্রাবিড়ই ভারতের সবচেয়ে সফলতম অধিনায়ক হতে পারতেন বলেও মন্তব্য করেছেন সাবেক এই অস্ট্রেলিয়ান ক্রিকেটার। রাহুল দ্রাবিড়কে নিয়ে লেখা এ বইতে এমন কথা বলে ক্রিকেট অঙ্গনে নতুন এক বিতর্কের জন্ম দিয়েছেন তিনি।</p>
            <p class="readmore"><a href="index.php/details_news/index/4ff6e5b5863c0.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
		        </ul>
        <br class="clear" />
      </div>
    </div>
	
    <div class="column">
      <div class="holder"><!-- <a href="#"><img src="images/demo/300x250.gif" alt="" /></a> -->
	  <h2 style="color:#059BD8; background-color:#EFEFEF; font-weight:bold;">আজকের ফিচার ভিডিও &raquo;</h2>
	  
		<iframe title="YouTube video player" class="youtube-player" type="text/html" 
				width="300" height="250" src="
					../../../www.youtube-nocookie.com/embed/v3bEL8hqe30@rel=0"
				frameborder="0" allowFullScreen>
		</iframe>
	  
	  </div>
      <div class="holder"><a href="default.htm"><img src="images/slogan1.jpg" alt="Our Slogan" /></a></div>
    </div>
    <br class="clear" />
  </div>
</div>

<!-- Politics to Education -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
      <h2><a href="index.php/politics/default.htm">রাজনীতি &raquo; </a></h2>
      <ul>
	          <li><a href="index.php/details_news/index/4ff6ea26a515a.php">শবে বরাতে জিয়ার মাজারে খালেদা</a></li>
	          <li><a href="index.php/details_news/index/4ff6e9c898ecc.php">‘স্বার্থান্বেষী মহলের ষড়যন্ত্রেই বিশ্বব্যাংকের পদ্মাসেতু ঋণ প্রত্যাহার’</a></li>
	          <li><a href="index.php/details_news/index/4ff6e97d4490e.php">নৌপুলিশ গঠনের সিদ্ধান্ত নিয়েছে সরকার: স্বরাষ্ট্র প্রতিমন্ত্রী</a></li>
	          <li><a href="index.php/details_news/index/4ff6e92fe4c8e.php">অভ্যন্তরীণ বিষয়ে হস্তক্ষেপ ষড়যন্ত্রমূলক: সুরঞ্জিত</a></li>
	          <li><a href="index.php/details_news/index/4ff6e8ee6fa1a.php">প্রবাসীদের জন্য কিছুই করেনি সরকার: বি চৌধুরী</a></li>
	          <li><a href="index.php/details_news/index/4ff6e89df12e8.php">বঙ্গবন্ধুর ‘অসমাপ্ত আত্মজীবনী’ বইয়ের প্রকাশনা উৎসব করছে আওয়ামী লীগ</a></li>
	        </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/economics/default.htm">অর্থনীতি &raquo; </a></h2>
      <ul>
                <li><a href="index.php/details_news/index/4ff71a5aa97b9.php">বেড়েছে রসুন, পেঁয়াজ, আদা ও মরিচের দাম, কমেছে মুরগি-ডিমের দাম</a></li>
	          <li><a href="index.php/details_news/index/4ff716c19ec36.php">রমজানে নিত্যপণ্য রফতানি বন্ধের আহ্বান এফবিসিসিআইর</a></li>
	          <li><a href="index.php/details_news/index/4ff592ba85.php">নেই নীতিমালা, বাড়ছে ব্যাংকের এটিএম বুথ</a></li>
	          <li><a href="index.php/details_news/index/4ff568decd.php">২০১১ সালে বিদেশি বিনিয়োগ বেড়েছে সাড়ে ২৪ শতাংশ</a></li>
	        </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/feature/default.htm">ফিচার &raquo; </a></h2>
      <ul>
                <li><a href="index.php/details_news/index/5003881c73ca7.php">মুক্তিযোদ্ধা সন্তানদের জন্য চাকরির সুযোগ</a></li>
	          <li><a href="index.php/details_news/index/4ff6f5bfcb1de.php">পাহাড়ের ডাক</a></li>
	          <li><a href="index.php/details_news/index/4ff6f5218079c.php">সাফল্যের সন্ধানে</a></li>
	        </ul>
    </div>
    <div class="footbox">
      <h2><a href="index.php/literature/default.htm">শিল্প-সাহিত্য &raquo; </a></h2>
      <ul>
                <li><a href="index.php/details_news/index/500c6b36b0baa.php">আমি হিমুও না, মিসির আলিও না</a></li>
	          <li><a href="index.php/details_news/index/50038920416b6.php">জননী জন্মভূমিশ্চ...</a></li>
	          <li><a href="index.php/details_news/index/500388b556bc8.php">নারীর ক্ষমতায়নে উচ্চশিক্ষা</a></li>
	        </ul>
    </div>
    <div class="footbox last">
      <h2><a href="index.php/education/default.htm">শিক্ষা  &raquo; </a></h2>
      <ul>
                <li><a href="index.php/details_news/index/4ff6f691b7f0a.php">প্রাথমিক শিক্ষা সমাপনী পরীক্ষার প্রস্তুতি</a></li>
	          <li><a href="index.php/details_news/index/4ff6f61b57d65.php">২০১২ সালের জুনিয়র স্কুল সার্টিফিকেট পরীক্ষার প্রস্তুতি</a></li>
	        </ul>
    </div>
    <br class="clear" />
  </div>
</div>

﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="#"><img src="images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="default.php" class="samrat_blue">৭১ সংবাদ</a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে -<span class="samrat_blue"><a href="71songbad.orgfree.com">সম্রাট কুমার দে</a></span></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>