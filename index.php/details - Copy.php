<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<?php require('connect.php');?>
<?php
		mysql_select_db("news", $con);
		$id=$_GET['id'];
		$news=$_GET['news'];
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM $news  where id=$id");
			$result2 = mysql_query("SELECT * FROM topnews order by dateofpub desc");
			$result3 = mysql_query("SELECT * FROM topnews order by dateofpub desc");
		$row1 = mysql_fetch_array($result1);
		$a=$row1['counter'];
		$a=$a+1;
		$sql = mysql_query("UPDATE $news SET `counter` ='$a' WHERE id =$id LIMIT 1;");
		if (!$sql)
							  {
							   echo "Update failed";
							   echo "UPDATE '$news' SET `counter` ='$a' WHERE id ='$id' LIMIT 1";
							  }
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
<div class="wrapper"></div>

	

<!-- Body -->
<div class="wrapper"><!--Secondary Navigation Of Related News -->
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
   <div id="Layer2"><a href="details.php?news=<? echo $news;?>&id=<? echo $row1['id'];?>"><?php echo $row1['headline'];?>		</a></div><div align="left"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" alt="photo" align="center" height="200" onmouseover="<?php echo $row1[9];?>" onmouseout="default"/>'; echo "<br>";?></div> <div><?php echo "<br>";echo $row1['reporter'];echo ",";echo "<br>";echo "<br>"; echo $row1['longdes'];?></div>
   <?php $result = mysql_query("SELECT * FROM comments where  id= '$id' and news='$news' order by time asc");?><br/>
		  <br/>
		  <br/>
		  <br/>
		  <br/><div style="font-size:30px">
		    <p><i>পাঠকের মন্তব্য</i></p>
		    <p>&nbsp;</p>
		  </div><table>
		  <p>
		    <?php while($row=mysql_fetch_array($result))
		  { ?>
		    </p>
		  <tr>
		  <td width="75" style=" color:#996600"><b><?php echo $row['user'];?></b></td>
		  <td width="74"><?php echo $row['comment'];?>
		    <div><img src="separator.jpg" /></div></td>
		  
		  </tr><tr><td>
		  <p>&nbsp;</p></td></tr>
		  <?php }?>
		  <tr>
		  <form action="comment.php" method="post">
		  <table>
		  <tr>
		  <div style="font-size:22px"><i>মন্তব্য করুন</i></div><td>
		 আপনার নাম:</td><td><input name="name" width="40" /></td></tr>
		  <tr><td>
		  <tr><td>
		  </td><td><input name="news" type="hidden" value="<?php echo $news;?>" width="40" /></td></tr>
		  <tr><td>
		  <tr><td>
		  </td><td><input name="id" type="hidden" value="<?php echo $id;?>" width="40" /></td></tr>
		  <tr><td>
		  মন্তব্য:</td><td><textarea name="comment" cols="50" rows="5" ></textarea></td></tr>
		  <tr><td></td><td><input type="Submit" value="প্রকাশ" size="10"></td></tr>
		  </table>
                      
                    </table><br class="clear" />
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