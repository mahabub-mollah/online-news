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
			$result1 = mysql_query("SELECT * FROM rajniti where  dateofpub >= '$time'  order by dateofpub desc");
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
    <p>ই মেইল : binaryextreme5@gmail.com</p>
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
	<!--<h1><a href="default.php"><strong>সংবাদ ৭১</strong></a><a href="../../default.htm"></a></h1>-->
      
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
 ?></li>
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
		
				
        <li><a href="default.php">রাজনীতি</a></li>
		
				
        <li><a href="../sports/default.php">খেলা</a></li>
		
				
        <li><a href="../entertainment/default.php">বিনোদন</a></li>
		
				
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
      <li class="current"><a href="default.php">রাজনীতি</a></li>
    </ul>
  </div>
</div>
<!-- Body -->
<div class="container">
    <div class="content">
	
	<div class="fl_left1">
	
	

     <!-- <img src="../../newsImages/khaleda-zia-bg20120705232122.jpg" width="200" height="200" alt="বিএনপি চেয়ারপারসন খালেদা জিয়া" />
      <p><strong><a href="../details_news/index/4ff6ea26a515a.php">শবে বরাতে জিয়ার মাজারে খালেদা</a></strong></p>
      <p>
	  ঢাকা: পবিত্র শবে বরাত উপলক্ষে শেরেবাংলা নগরে সাবেক 
রাষ্ট্রপতি ও বিএনপির প্রতিষ্ঠাতা জিয়াউর রহমানের মাজারে বিশেষ মোনাজাত, 
খতমে কোরাআন, মিলাদ ও দোয়া মাহফিল অনুষ্ঠিত হয়েছে। এতে অংশ নেন বিএনপি 
চেয়ারপারসন খালেদা জিয়া।বৃহস্পতিবার সন্ধ্যা সাড়ে ৭টা থেকে রাত 
সাড়ে ৯টা পর্যন্ত জিয়ার মাজারে অবস্থান করেন খালেদা জিয়া। রাত ৯টা থেকে 
সোয়া&#8230;	  </p>
	  <p class="readmore"><a href="../details_news/index/4ff6ea26a515a.php">বিস্তারিত পড়ুন  &raquo;</a></p>
	  <p class="readmore"><br/>&nbsp;</p>-->
	  
	  
	  
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
			<?php ob_start(); echo $row1['shortdes'];?><a href="details.php?news=rajniti&id=<?php echo $row1['id'];?>">বিস্তারিত</a>
			
		  </td><?php $i++;} ?></table></div>&nbsp;</p>
    </div>
	
	
	
	
	<!--<p>&nbsp;</p>
      <div id="hpage_latest1">
        <ul>
          <li>
          <img src="../../newsImages/Badrodojz20120704202918.jpg" width="190" height="130" alt="সাবেক রাষ্ট্রপতি অধ্যাপক এ কিউ এম বদরুদ্দোজা চৌধুরী" />
            <p>ঢাকা: বিকল্পধারা বাংলাদেশের প্রেসিডেন্ট সাবেক 
রাষ্ট্রপতি অধ্যাপক এ কিউ এম বদরুদ্দোজা চৌধুরী বলেছেন,&nbsp; দুর্নীতিবাজ সরকার
 প্রবাসীদের পাঠানো কষ্টার্জিত বৈদেশিক মুদ্রা কোথায় খরচ করছে, দেশবাসী তা&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6e8ee6fa1a.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
				  <li>
          <img src="../../newsImages/Banggo-Bondhu-sm20120705010601.jpg" width="190" height="130" alt="জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের" />
            <p>ঢাকা : জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের লেখা 
‘অসমাপ্ত আত্মজীবনী’ গ্রন্থের প্রকাশনা উৎসব করতে যাচ্ছে আওয়ামী লীগ। আগামী
 ৯ জুলাই সোমবার বিকালে বঙ্গবন্ধু আন্তর্জাতিক&#8230;</p>
            <p class="readmore"><a href="../details_news/index/4ff6e89df12e8.php">বিস্তারিত পড়ুন  &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>-->
	  
	  
	  
	  
    </div>
	
	<!--Secondary Navigation Of Related News -->
    <div class="column">
	<h4><a href="default.php"><font size="+1">প্রথম সকাল </a> <font color="#FF0000"> এর সর্বশেষ </font> সংবাদসমূহ</h4>
      <div class="subnav"><?php include('latest.php');?>   
		        
      </div>
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
	
<!-- Footer For Copyright Related Information -->
<div class="wrapper colNew1">
  <div id="copyright">
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="#"><strong>প্রথম সকাল</strong></a><a href="#"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="#">বাইনারি টীম</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>