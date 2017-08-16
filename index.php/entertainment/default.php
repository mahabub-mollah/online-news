<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<?php require('connect.php');?>
<?php
			$timestamp=time();
			$timestamp=$timestamp+(6*60*60)-99999999;
			$time=date( "Y-m-d 00:00:00",$timestamp);
			mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM binodon where  dateofpub >='$time'  order by dateofpub desc");
			$result2 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
			$result3 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
	
?>
<title>প্রথম সকাল</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../../styles/layout.css" type="text/css" />
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
        url: "../register_sub/post_action",
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
a:link {
	color: #007F55;
}
a:visited {
	color: #009F55;
}
a:hover {
	color: #808080;
}
a:active {
	color: #007FFF;
}
 </style>
</head>
<!-- Header Section Ends Here  -->

<!-- Header Contact and Short Menu Start Here  -->
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <p> ই মেইল : binaryextreme5@gmail.com</p>
    <ul>
	<li><a href="../bangla_help.php"><img class="noBangla" src="../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()"><font color="#FFFFFF">বুকমার্ক</font></a></li>
		
				
		 
		<li><a href="../contactUs.php"><font color="#FFFFFF">যোগাযোগ</font></a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
	<!--<h1><a href="default.php"><strong>সংবাদ ৭১</strong></a><a href="../../default.php"></a></h1>-->
    <h1><a href="../../default.php"><strong>প্রথম সকাল</strong></a></h1>  
      <p><i><b>জাগবে মানুষ পড়বে খবর প্রথম সকাল হবে সফল</b></i> &nbsp&nbsp&nbsp(লাইভ বাংলা খবর - ২৪ ঘন্টা)</p>
    </div>

    <br class="clear" />
  </div>
</div>

<!--Code To Show News Headlines -->
		
<div id="headlines">
	  <div class="head">শিরোনাম : </div>
	  <div class="headNews">
	  <ul>
	  <marquee behavior="scroll" direction="left" scrollamount="1" scrolldelay="15" truespeed="" onmouseover="this.stop()" onmouseout="this.start()"><li>
				<?php
include('scroller.php');
 ?>
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
				
        <li><a href="../../default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="../national/default.php">জাতীয়</a></li>
		
				
        <li><a href="../international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="../sports/default.php">খেলা</a></li>
		
				
        <li><a href="default.php">বিনোদন</a></li>
		
				
        <li><a href="../technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../education/default.php">শিক্ষা</a></li>
		
		<li><a href="../diu/default.php">ডি আই ইউ ৩য় সমাবর্তন </a></li>
		
		<li><a href="../binary_team/demo5.html">ডি আই ইউ বাইনারি টীম</a></li>
		
		
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
      <li><a href="../../default.php">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="default.php">বিনোদন</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
<div class="container">
    <div class="content">
	
	<div class="fl_left1">
	
	
	
	

      <!--<img src="../../newsImages/katrina-kaif1.jpg" width="200" height="200" alt="ক্যাটরিনা কাইফ" />
      <p><strong><a href="../details_news/index/4ff6ee98920f5">আবারও সবাইকে টপকালেন ক্যাটরিনা!</a></strong></p>
      <p>
	  যুক্তরাজ্যের একটি ফ্যাশন ম্যাগাজিন আয়োজিত সাম্প্রতিক এক ভোটে আবারও 
বিশ্বের সবচেয়ে আবেদনময়ী নারী নির্বাচিত হয়েছেন বলিউডের অভিনেত্রী 
ক্যাটরিনা কাইফ।যুক্তরাজ্যভিত্তিক পুরুষদের ফ্যাশন ম্যাগাজিন এফএইচএম 
আয়োজিত এক ভোটে বিশ্বের বিভিন্ন প্রান্তের ভক্তদের ভোট এবারও বিশ্বের 
সবচেয়ে আবেদনময়ী নারী হিসেবে নির্বাচিত করেছে ক্যাটরিনা কাইফকে। এক খবরে এ 
তথ্য জানিয়েছে মিড-ডে। এই নিয়ে পরপর&#8230;	  </p>
	  <p class="readmore"><a href="../details_news/index/4ff6ee98920f5.php">বিস্তারিত পড়ুন  &raquo;</a></p>
	  <p class="readmore">&nbsp;</p>-->
	  
	  
	  
	  
	  
	  <p class="readmore"><div id="layer1"><table width="613" height="400"><?php
		$i=0;
		 while($row1 = mysql_fetch_array($result1))
		{
		
		if ($i%2== 0)
    echo "</tr><tr>";
		
		?>
          <td width="50%" valign="top">
		  <div align="center" class="style1" ><font size="+1" color="#007FAA"><?php echo $row1['headline'];?></font></div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" alt="photo" width="110" height="75" onmouseover="<?php echo $row1[9];?>" onmouseout="default"/>';?>
			<?php ob_start(); echo $row1['shortdes'];?><a href="details.php?news=binodon&id=<?php echo $row1['id'];?>">বিস্তারিত</a>
			
		  </td><?php $i++;} ?></table></div>&nbsp;</p>
    </div>
	
	
	
	
	
	<!--<p>&nbsp;</p>
      <div id="hpage_latest1">
        <ul>
				  <li>
          <img src="../../newsImages/tom-cruise-katie-holmes0.jpg" width="190" height="130" alt="টম ক্রুজ" />
            <p>বিয়ে বাঁচানোর শেষ চেষ্টা করতে নিজের ৫০তম জন্মদিনে কেটি হোমসকে আইসল্যান্ড
 যেতে মিনতি জানিয়েছিলেন টম ক্রুজ। কিন্তু তাঁকে ফিরিয়ে দিয়েছেন কেটি।এ
 প্রসঙ্গে ঘনিষ্ঠ সূত্রের বরাতে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6ee4882a7d.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/kareena-engagement-ring.jpg" width="190" height="130" alt="
কারিনার অনামিকায় বাগদানের আংটি" />
            <p>সাইফ আলী খান ও কারিনা কাপুরের বিয়ের দিনক্ষণের খবর এরই মধ্যে জেনে ফেলেছেন
 বলিউডপাড়ার সবাই। কিন্তু এই জুটির বাগদানের খবর এখন পর্যন্ত গোপনই রয়ে 
গেছে।&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6edd1cecf2.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/2012-07-04-19-34-09-4ff49ab1daf24-untitled-16.jpg" width="190" height="130" alt="সালমান খান আর ক্যাটরিনা কাইফকে একসঙ্গে দেখা যাবে" />
            <p>বছর চার বাদে আবার এক পর্দায় দেখা যাবে তাঁদের। অনেকেই ধন্ধে পড়ে গিয়েছিল, 
এক থা টাইগার ছবিতে কি আদৌ সালমান খান আর ক্যাটরিনা কাইফকে একসঙ্গে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6ed58831cb.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/2012-07-06-09-50-18-4ff6b4da4e35e-addi.jpg" width="190" height="130" alt="আদি ব্যান্ডের সদস্যরা" />
            <p>ব্যান্ডদল গড়লেন ক্লোজআপ ওয়ান তারকা মশিউর রহমান রিংকু। তাঁর ব্যান্ডদলটির 
নাম ‘আদি’। লোকসংগীতকে মানুষের আরও অনেক কাছাকাছি পৌঁছে দেওয়ার জন্য 
ব্যান্ডটি গড়েছেন রিংকু।প্রথম আলো ডটকমকে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6ece46ff75.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/default.htm" width="190" height="130" alt="" />
            <p>সিসিমপুর—শিশুদের প্রিয় টেলিভিশন অনুষ্ঠান। এর অন্যতম অংশ হলো গ্রামীণ 
প্রামাণ্যচিত্র। নয়নতারা কমিউনিকেশনসের তৈরি সিসিমপুরের গ্রামীণ 
প্রামাণ্যচিত্র-গুলো তৈরি করে বাংলাদেশের প্রত্যন্ত এলাকার সপ্তম থেকে নবম 
শ্রেণীর&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6ec74abc99.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/mila-kunis-ashton-kutcher88888888888888.jpg" width="190" height="130" alt="অভিনেত্রী মিলা কুনিসের প্রেমে মজেছেন অ্যাস্টন কুচার" />
            <p>সাম্প্রতিক এক খবরে এইএস ম্যাগাজিন জানিয়েছে, ডেমি মুরের সঙ্গে দাম্পত্যের
 অবসানের পর হলিউডের আরেক অভিনেত্রী মিলা কুনিসের প্রেমে মজেছেন অ্যাস্টন 
কুচার। সম্প্রতি তাঁদের ঘনিষ্ঠতা আরও&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6ec32365a2.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
		        </ul>
        <br class="clear" />
      </div>-->
	  
	  
	  
	  
	  
    </div>
	
	<!--Secondary Navigation Of Related News -->
    <div class="column">
	<h4><a href="default.php">প্রথম সকাল </a> <font color="#FF0000">এর সর্বশেষ </font> সংবাদ সমুহ </h4>
      <div class="subnav"> <?php include('latest.php');?> 
		        
		      </div>
    </div>
    <br class="clear" />
</div>
<br class="clear" />
</div>
</div>
﻿<div class="wrapper colNew">
  <div id="socialise">
    <!-- Footer For Social Networks Link -->
	<ul>
      <li><a href="https://www.facebook.com/Prothom-Sokal-1533565370289522/?skip_nax_wizard=true"><img src="../../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="https://feedburner.google.com/fb/a/myfeeds"><img src="../../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="https://twitter.com/"><img src="../../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত -<a href="#"><strong>প্রথম সকাল</strong></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="#">বাইনারি টীম</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
