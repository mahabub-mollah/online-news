<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<?php require('connect.php');?>
<?php
			$timestamp=time();
			$timestamp=$timestamp+(6*60*60);
			$time=date( "Y-m-d 00:00:00",$timestamp);
			mysql_select_db("news", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM jatiyo where  dateofpub >= '$time'  order by dateofpub desc");
			$result2 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
			$result3 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time'  order by dateofpub desc");
	
?>


<title>সংবাদ ৭১</title>
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
body,td,th {
	color: #FF0055;
}
a:visited {
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
      <h1><a href="default.php"><strong>সংবাদ ৭১</strong></a><a href="../../default.htm"></a></h1>
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
		
				
        <li><a href="default.php">জাতীয়</a></li>
		
				
        <li><a href="../international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="../politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="../sports/default.php">খেলা</a></li>
		
				
        <li><a href="../entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="../technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
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
      <li class="current"><a href="default.htm">জাতীয়</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
	
	<div class="fl_left1">

      <img src="../../newsImages/abul-sm20120722150623.jpg" width="200" height="200" alt="সৈয়দ আবুল হোসেনের পদত্যাগ" />
      <p><strong><a href="../details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a></strong></p>
      <p>
	  ঢাকা: পদ্মাসেতু নিয়ে বাংলাদেশ সরকারের সাথে 
বিশ্বব্যাংকের সমঝোতা হতে যাচ্ছে। বিশ্বব্যাংকের তরফ থেকে এরই মধ্যে 
সরকারকে এটি জানানো হয়েছে।তবে বিশ্বব্যাংকের শর্ত হচ্ছে, পদ্মাসেতু
 নিয়ে যাদের বিরুদ্ধে দুর্নীতির অভিযোগ, তাদের বিরুদ্ধে শাস্তিমূলক 
ব্যবস্থা গ্রহণ করতে হবে। ওয়াশিংটনে বিশ্বব্যাংকের সদর দফতর থেকে এটি 
নিশ্চিত করা হয়েছে।বিশ্বব্যাংকের এই শর্তে সরকারও রাজী হয়েছে&#8230;	  </p>
	  <p class="readmore"><a href="../details_news/index/500c69ac1ddee.php">বিস্তারিত পড়ুন  &raquo;</a></p>
	  <p class="readmore">&nbsp;</p>
    </div>
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
			<?php ob_start(); echo $row1['shortdes'];?><a href="details.php?news=jatiyo&id=<?php echo $row1['id'];?>">বিস্তারিত</a>
			
		  </td><?php $i++;} ?></div>
	<p>&nbsp;</p>
      <div id="hpage_latest1">
        <ul>
				  <li>
          <img src="../../newsImages/buet03109a66def-untitled-53.jpg" width="190" height="130" alt="বুয়েট সংকট" />
            <p>বুয়েট সংকট নিরসনে প্রধানমন্ত্রী শেখ হাসিনা আলোচনার পরামর্শ দিয়েছেন। 
কিন্তু বুয়েট শিক্ষক সমিতি সাফ জানিয়ে দিয়েছে, উপাচার্যের সঙ্গে শিক্ষকেরা 
আলোচনা করবেন না। আজ সোমবার শিক্ষা&#8230;</p>
            <p class="readmore"><a href="../details_news/index/50038777991a3.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/Rajshahi University20120716040639.jpg" width="190" height="130" alt="রাবি" />
            <p>রাবি: রাজশাহী বিশ্ববিদ্যালয়ে ছাত্রলীগের দু’গ্রুপের 
গোলাগুলিতে মাথায় গুলিবিদ্ধ সাধারণ সম্পাদক গ্রুপের ছাত্রলীগকর্মী সোহেল 
রানাকে ঢাকায় আনা হচ্ছে। তার অবস্থা আশঙ্কাজনক বলে সর্বশেষ খবরে জানা গেছে।&nbsp;রোববার&#8230;</p>
            <p class="readmore"><a href="../details_news/index/500386f256e44.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/em20120715220241.jpg" width="190" height="130" alt="এমিরেটস ফ্লাইটে বোমাতঙ্ক" />
            <p>ঢাকা: দুবাই থেকে আসা এমিরেট্স এর ফ্লাইটে বোমা পেতে রাখার হুমকিদাতা মদ্যপ যাত্রীকে আটক করা হয়েছে।উত্তরা
 ডিভিশনের উপ-পুলিশ কমিশনার নিসারুল আরিফ রাত সাড়ে ৯টায় বাংলানিউজকে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/5003866e9edac.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/bangladesh-government-logo.jpg" width="190" height="130" alt="Govt Logo" />
            <p>বিডিআর
 বিদ্রোহের বিচার নিয়ে মানবাধিকার সংস্থা হিউম্যান রাইটস ওয়াচের প্রতিবেদন ও
 বক্তব্যের পরিপ্রেক্ষিতে স্বরাষ্ট্র মন্ত্রণালয় আজ শুক্রবার এক প্রতিবাদ 
পাঠিয়েছে। ওই প্রতিবাদলিপিতে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6de94a86f1.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/default.htm" width="190" height="130" alt="" />
            <p>মৌলভীবাজারের শ্রীমঙ্গল উপজেলার সীমান্ত এলাকা থেকে ধরে নিয়ে যাওয়া 
র‌্যাবের সদস্যসহ দুই বাংলাদেশিকে ফেরত দিয়েছে ভারতীয় সীমান্তরক্ষী বাহিনী 
(বিএসএফ)। গতকাল বৃহস্পতিবার ব্যাটালিয়ন পর্যায়ে কয়েক দফা&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6de0e94c98.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/obydul_kader_sangbad24.jpg" width="190" height="130" alt="যোগাযোগ ও রেলমন্ত্রী ওবায়দুল কাদের" />
            <p>যোগাযোগ ও রেলমন্ত্রী ওবায়দুল কাদের খুলনা-ঢাকা মহাসড়কের বেহাল দশা দেখে 
ক্ষোভ প্রকাশ করেছেন। আজ শুক্রবার মহাসড়ক পরিদর্শনের পরে সড়ক ও জনপথ (সওজ) 
বিভাগের প্রকৌশলীদের উদ্দেশে&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6dd92175c7.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
		        </ul>
        <br class="clear" />
      </div>
    </div>
	
	<!--Secondary Navigation Of Related News -->
    <div class="column">
	<h4><a href="default.htm">জাতীয়</a>  এর অন্যান্য খবরসমূহ</h4>
      <div class="subnav"> 
		        <ul>
		            <li><a href="../details_news/index/4ff6dd1cd2447.php">পাহাড়িদের ভূমির অধিকার রক্ষা করব</a></li>
                    <li><a href="../details_news/index/4ff68f0fa48d9.php">৩৯৮ একর জমি বসুন্ধরার দখলমুক্ত করল পিডিবি</a></li>
                    <li><a href="../details_news/index/4ff68e36dd47d.php">নবীনগরে সড়ক দুর্ঘটনায় একজন নিহত</a></li>
                    <li><a href="../details_news/index/4ff68c7de5883.php">‘প্রয়োজনে এক বেলা বাজার করব না’</a></li>
                    <li><a href="../details_news/index/4ff68ad60fe01.php">পদ্মা সেতু নির্মাণে বিনিয়োগে আগ্রহী বিআইএ</a></li>
                    <li><a href="../details_news/index/4ff68a131387f.php">র‌্যাব রাখা-না রাখা আমাদের ব্যাপার</a></li>
                    <li><a href="../details_news/index/4ff5940039.php">নিতুন কুণ্ডুর স্বপ্নের অটবি এখন দাদা-দিদিতে বিভক্ত!</a></li>
                    <li><a href="../details_news/index/4ff593f56e.php">ঢাকার যানজট মারাত্মক অবস্থা ধারণ করেছে: প্রধানমন্ত্রী</a></li>
                    <li><a href="../details_news/index/4ff593e70f.php">৩ প্রকৌশলীর অস্বীকার
‘লাভালিনের প্রশিক্ষণে অংশ নিতে কানাডায় যাইনি’</a></li>
                    <li><a href="../details_news/index/4ff593ce1a.php">ট্রেনের ধাক্কায় যশোরে ট্রাক রেললাইনে: খুলনা থেকে যোগাযোগ বিচ্ছিন্ন</a></li>
                    <li><a href="../details_news/index/4ff5939c31.php">ব্র্যাক ব্যাংকের এইচআরডি প্রধানসহ ১১ জনের বিরুদ্ধে সিলেটে মামলা</a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১২ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="default.php"><strong>সংবাদ ৭১</strong></a><a href="../../default.htm"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="sopnilsamrat.blogspot.com" title="samrat kumar dey"> সম্রাট কুমার দে</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>