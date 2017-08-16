<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<?php require('connect.php');?>
<?php
			$timestamp=time();
			$timestamp=$timestamp+(6*60*60)-99999999;
			$time=date( "Y-m-d 00:00:00",$timestamp);
			mysql_select_db("news", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM tothoprojukti where  dateofpub >= '$time'  order by dateofpub desc");
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
</style>
</head>
<!-- Header Section Ends Here  -->

<!-- Header Contact and Short Menu Start Here  -->
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <p>ফোন নম্বর : ০১৭৩১ ২৯৩৯৬০ | ই মেইল : sopnilsamrat@yahoo.com</p>
    <ul>
	<li><a href="../bangla_help"><img class="noBangla" src="../../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="../contactUs">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="default.php"><strong>প্রথম সকাল</strong></a><a href="../../default.htm"></a></h1>
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
		<a href="../details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a> &nbsp;
		</li> 
				<li>
		<a href="../details_news/index/50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="../details_news/index/500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="../details_news/index/5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
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
		
				
        <li><a href="../entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../education/default.php">শিক্ষা</a></li>
		
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
      <li><a href="../../default.htm">প্রচ্ছদ</a></li>
      <li>&#187;</li>
      <li class="current"><a href="default.htm">তথ্যপ্রযুক্তি</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
	
	<div class="fl_left1">

      <img src="../../newsImages/0-internet.jpg" width="200" height="200" alt="কম্পিউটার" />
      <p><strong><a href="../details_news/index/4ff6f23cb4198.php">৯ জুলাই ইন্টারনেট বিপর্যয়ের ঝুঁকিতে আড়াই লাখ কম্পিউটার</a></strong></p>
      <p>
	  সারাবিশ্বে ৯ জুলাই আড়াই লাখেরও বেশি কম্পিউটারে ইন্টারনেট সংযোগ বন্ধ হয়ে 
যেতে পারে। পিসি ও ম্যাক কম্পিউটারের জন্য ২০০৭ সালে ছড়িয়ে পড়া ‘ডিএনএস 
চেঞ্জার ম্যালওয়ার’ নামের এক ট্রোজান ভাইরাসের কারণে ইন্টারনেট থেকে 
বিচ্ছিন্ন হয়ে পড়তে পারেন ব্যবহারকারীরা। এক খবরে বার্তা সংস্থা রয়টার্স এ 
তথ্য জানিয়েছে।অনুসন্ধান সেবাদাতা প্রতিষ্ঠান গুগল ইন্টারনেট 
ব্যবহারকারীদের&#8230;	  </p>
	  <p class="readmore"><a href="../details_news/index/4ff6f23cb4198.php">বিস্তারিত পড়ুন  &raquo;</a></p>
	  <p class="readmore">&nbsp;</p>
	  <p class="readmore">&nbsp;</p>
      	<?php
		$i=0;
		 while($row1 = mysql_fetch_array($result1))
		{
		
		if ($i%2== 0)
    echo "</tr><tr>";
		
		?>
          <td width="50%" valign="top">
		  <div align="center" class="style1" >
			
			
			<?php echo $row1['headline'];?></div>
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" alt="photo" width="110" height="75" onmouseover="<?php echo $row1[9];?>" onmouseout="default"/>';?>
			<?php ob_start(); echo $row1['shortdes'];?><a href="details.php?news=tothoprojukti&id=<? echo $row1[id];?>">বিস্তারিত</a>
			
		  </td><?php $i++;} ?></div>
		  
    </div>
	<p>&nbsp;</p>
      <div id="hpage_latest1">
        <ul>
				  <li>
          <img src="../../newsImages/d90b-sam2.jpg" width="190" height="130" alt="স্যামসাং" />
            <p>গ্যালাক্সি সিরিজের স্মার্টফোন বিক্রি বেড়ে যাওয়ার রেকর্ড পরিমাণ লাভের মুখ
 দেখেছে দক্ষিণ কোরিয়ান ইলেকট্রনিক পণ্য নির্মাতা প্রতিষ্ঠান স্যামসাং। এক 
খবরে বার্তা সংস্থা রয়টার্স জানিয়েছে, স্যামসাংয়ের&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6f1df13bef.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/facebook-in-asia.jpg" width="190" height="130" alt="সাবমেরিন কেবল" />
            <p>এশিয়া প্যাসিফিক গেটওয়ে (এপিজি) নামের ১০ হাজার কিলোমিটার সাবমেরিন কেবল 
প্রকল্পে বিনিয়োগ করেছে সামাজিক যোগাযোগের ওয়েবসাইট ফেসবুক কর্তৃপক্ষ। 
দক্ষিণ এশিয়ার দেশগুলোর ইন্টারনেটের গতি আরও দ্রুততর&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6f186bbf07.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/smart-t-04--2-.jpg" width="190" height="130" alt="তোশিবা-এএমডির ল্যাপটপ" />
            <p>অ্যাডভান্সড মাইক্রো ডিভাইসেসের (এএমডি) তৈরি অ্যাক্সেলারেটেড প্রোসেসিং 
ইউনিট (এপিইউ) ও গ্রাফিকসযুক্ত তিনটি ল্যাপটপ দেশের বাজারে আনল তোশিবা। 
বাংলাদেশে এই তিনটি পণ্য বিপণন করবে স্মার্ট টেকনোলজিস।&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6f12073336.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/robot-legs.jpg" width="190" height="130" alt="রোবটিক পা" />
            <p>যুক্তরাষ্ট্রের গবেষকেরা মানুষের পায়ের মতোই কৃত্রিম পা বা রোবটিক পা তৈরি 
করতে সক্ষম হয়েছেন। এক খবরে বিবিসি এ তথ্য জানিয়েছে। নিউরাল ইঞ্জিনিয়ারিং 
সাময়িকীতে প্রকাশিত প্রতিবেদনে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6f09254c5a.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/black-hole.jpg" width="190" height="130" alt="Black Hole" />
            <p>আমাদের ছায়াপথ মিল্কিওয়ের কেন্দ্রে রয়েছে বিশাল এক ব্ল্যাকহোল বা 
কৃষ্ণগহ্বর। এই কৃষ্ণগহ্বরের সঙ্গে সংঘর্ষে জড়িয়ে পড়ছে মহাকাশে ঘুরে বেড়ানো
 বিশাল গ্যাসীয় মেঘ। কৃষ্ণগহ্বরের কাছে আসার&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6f02eed14f.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/orion_getty_hi015164970.jpg" width="190" height="130" alt="‘ওরিয়ন’" />
            <p>ওড়ার জন্য তৈরি হচ্ছে ‘ওরিয়ন’। ন্যাশনাল অ্যারোনটিক্স অ্যান্ড স্পেস 
অ্যাডমিনিস্ট্রেশনের ৩ জুলাই যুক্তরাষ্ট্রের ফ্লোরিডায় প্রদর্শিত এ স্পেস 
ক্যাপসুলটিই এখন পর্যন্ত তৈরি হওয়া সর্বাধুনিক প্রযুক্তির স্পেস&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6efdc46191.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
		        </ul>
        <br class="clear" />
      </div>
    </div>
	
	<!--Secondary Navigation Of Related News -->
    <div class="column">
	<h4><a href="default.htm">তথ্যপ্রযুক্তি</a>  এর অন্যান্য খবরসমূহ</h4>
      <div class="subnav"> 
		        <ul>
		            <li><a href="../details_news/index/4ff6ef772f77d.php">আসছে ফায়ারফক্স ওএস চালিত স্মার্টফোন</a></li>
                    <li><a href="../details_news/index/4ff6ef227a857.php">দোহাটেকে চালু হলো ই-সাইন সুবিধা</a></li>
                    <li><a href="../details_news/index/4ff5954381.php">মাইক্রোসফট ইমাজিন কাপে দেশি অন্নপূর্ণা</a></li>
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
      <li><a href="#"><img src="../../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="../../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="../../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="default.htm"><strong>সংবাদ ৭১</strong></a><a href="../../default.htm"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="sopnilsamrat.blogspot.com" title="samrat kumar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>