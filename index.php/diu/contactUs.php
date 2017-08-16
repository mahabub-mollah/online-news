<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<title>   প্রথম সকাল</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.validate.js"></script>
<script type="text/javascript" src="../scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="../scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="../scripts/phonetic_int.js"></script>
<script type="text/javascript">
$(document).ready(function(){

  $("#newsletter_go").click( 
  
    function(){
    
        var username=$("#username").val();
        var mailAddress=$("#email").val();
      
        $.ajax({
        type: "POST",
        url: "register_sub/post_action",
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
	<li><a href="bangla_help"><img class="noBangla" src="../images/noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="contactUs.php">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="default.php"><strong>   প্রথম সকাল</strong></a><a href="../default.htm"></a></h1>
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
	  <marquee behavior="scroll" direction="left" scrollamount="1" scrolldelay="15" truespeed="" onmouseover="this.stop()" onmouseout="this.start()">
				<li>
		<a href="details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a> &nbsp;
		</li> 
				<li>
		<a href="details_news/index/50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a> &nbsp;
		</li> 
				<li>
		<a href="details_news/index/500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a> &nbsp;
		</li> 
				<li>
		<a href="details_news/index/5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a> &nbsp;
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
				
        <li><a href="../default.php">প্রচ্ছদ</a></li>
		
				
        <li><a href="national/default.php">জাতীয়</a></li>
		
				
        <li><a href="international/default.php">আন্তর্জাতিক</a></li>
		
				
        <li><a href="politics/default.php">রাজনীতি</a></li>
		
				
        <li><a href="sports/default.php">খেলা</a></li>
		
				
        <li><a href="entertainment/default.php">বিনোদন</a></li>
		
				
        <li><a href="technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="feature/default.php">ফিচার</a></li>
		
				
        <li><a href="literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="education/default.php">শিক্ষা</a></li>
		
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

</div>
<!-- Body -->
<div class="wrapper">
  <div class="container">
    <div class="content">
		<h1 style="color:green;"><u>আমাদের সাথে যোগাযোগের তথ্য </u></h1>
				<!-- Table To Show Details About Us -->
		<div class="contactView">
		<table border="0" cellspacing="0" cellpadding="4">
			<tr class="odd">
				<th>প্রতিষ্টানের নাম</th>
				<td>বাংলা নিউজ ২৪</td>
			</tr>
			<tr>
				<th>ডোমেইনের নাম</th>
				<td>বাংলানিউজ২৪.কম</td>
			</tr>
			<tr class="odd">
				<th>আমাদের স্লোগান</th>
				<td>লাইভ বাংলা খবর - ২৪ ঘন্টা</td>
			</tr>
			<tr>
				<th>প্রধান সম্পাদক</th>
				<td>সম্রাট কুমার দেু</td>
			</tr>
			<tr class="odd">
				<th>আমাদের ঠিকানা </th>
				<td>শের-ই-বাংলা হল ২, পবিপ্রবি</td>
			</tr>
			<tr>
				<th>ফোন নম্বর</th>
				<td>০১৭৩১ ২৯৩৯৬০</td>
			</tr>
			<tr class="odd">
				<th>নিউজরুম মোবাইল</th>
				<td>০১৮২৩২৬৭৯৩৭, ০১৭৩১২৯৩৯৬০</td>
			</tr>
			<tr>
				<th>ফ্যাক্স নম্বর</th>
				<td>০৪৮৫২-৭৫০০০</td>
			</tr>
			<tr class="odd">
				<th>ইমেইল ঠিকানা</th>
				<td>sopnilsamrat@yahoo.com</td>
			</tr>
			<tr>
				<th>ওয়েব ঠিকানা </th>
				<td>www.বাংলানিউজ24.com</td>
			</tr>
		</table>
				<br/><br/>
		<!-- Table To Show Developer Information -->
		<table border="0" cellspacing="0" cellpadding="4">
			<tr>
				<td class="headTitle">"বাংলা নিউজ ২৪" নকশা , প্রোগ্রামিং ও উন্নয়নে </td>
			</tr>
			<tr class="odd">
				<th>নাম</th>
				<td>সম্রাট কুমার দে</td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>samrat kumar dey</td>
			</tr>
			<tr class="odd">
				<th>ঠিকানা</th>
				<td>শের-ই-বাংলা হল ২, পবিপ্রবি</td>
			</tr>
			<tr>
				<th>মোবাইল নম্বর</th>
				<td>০১৭৩১ ২৯৩৯৬০</td>
			</tr>
			<tr class="odd">
				<th>ইমেইল ঠিকানা</th>
				<td>sopnilsamrat@yahoo.com</td>
			</tr>
			<tr>
				<th>ওয়েব ঠিকানা</th>
				<td>www.sopnilsamrat.0fees.com</td>
			</tr>
		</table>
			  </div>
	  <br/><br/>
	  যে কোন ধরণের মতামত বা পরামর্শ এর জন্য দয়া করে এই ঠিকানায় মেইল পাঠান  : sopnilsamrat@yahoo.com
    </div>
	
	
	<!--Secondary Navigation Of Related News -->
	    <div class="column">
	<h4>সর্বশেষ খবরসমূহ</h4>
      <div class="subnav">        
        <ul>
		            <li><a href="details_news/index/500c6b36b0baa.php">আমি হিমুও না, মিসির আলিও না</a></li>
                    <li><a href="details_news/index/500c69ac1ddee.php">সৈয়দ আবুল হোসেনের পদত্যাগ আসন্ন!</a></li>
                    <li><a href="details_news/index/50038920416b6.php">জননী জন্মভূমিশ্চ...</a></li>
                    <li><a href="details_news/index/500388b556bc8.php">নারীর ক্ষমতায়নে উচ্চশিক্ষা</a></li>
                    <li><a href="details_news/index/5003881c73ca7.php">মুক্তিযোদ্ধা সন্তানদের জন্য চাকরির সুযোগ</a></li>
                    <li><a href="details_news/index/50038777991a3.php">বুয়েট সংকট: উপাচার্য ও শিক্ষক সমিতিকে বাদ দিয়ে আজ বৈঠক ডেকেছেন শিক্ষামন্ত্রী</a></li>
                    <li><a href="details_news/index/500386f256e44.php">রাবিতে গোলাগুলি: ঢাকার পথে গুলিবিদ্ধ সোহেল</a></li>
                    <li><a href="details_news/index/5003866e9edac.php">শাহজালালে এমিরেটস ফ্লাইটে বোমাতঙ্ক</a></li>
                    <li><a href="details_news/index/4ff71a5aa97b9.php">বেড়েছে রসুন, পেঁয়াজ, আদা ও মরিচের দাম, কমেছে মুরগি-ডিমের দাম</a></li>
                    <li><a href="details_news/index/4ff716c19ec36.php">রমজানে নিত্যপণ্য রফতানি বন্ধের আহ্বান এফবিসিসিআইর</a></li>
                    <li><a href="details_news/index/4ff6f691b7f0a.php">প্রাথমিক শিক্ষা সমাপনী পরীক্ষার প্রস্তুতি</a></li>
                    <li><a href="details_news/index/4ff6f61b57d65.php">২০১২ সালের জুনিয়র স্কুল সার্টিফিকেট পরীক্ষার প্রস্তুতি</a></li>
                    <li><a href="details_news/index/4ff6f5bfcb1de.php">পাহাড়ের ডাক</a></li>
                    <li><a href="details_news/index/4ff6f5218079c.php">সাফল্যের সন্ধানে</a></li>
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
      <li><a href="#"><img src="../images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="../images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="../images/twitter.gif" alt="" /><span>Twitter</span></a></li>
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
    <p class="fl_left">কপিরাইট &copy; ২০১৫ - সকল স্বত্ব &reg; সংরক্ষিত - <a href="default.htm"><strong>প্রথম সকাল</strong></a><a href="../default.htm"></a></p>
    <p class="fl_right">ডিজাইন ও উন্নয়নে  -  <a href="sopnilsamrat.blogspot.com" title="Md. Abdul Kadir Razu"> বাইনারি টীম</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>