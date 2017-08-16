<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<!-- Header Section Start Here  -->
<head profile="http://gmpg.org/xfn/11">
<?php require('connect.php');?>
<?php
		mysql_select_db("mahbub", $con);
		$id=$_GET['id'];
		$news=$_GET['news'];
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$result1 = mysql_query("SELECT * FROM $news  where id=$id");
			$result2 = mysql_query("SELECT * FROM topnews order by dateofpub desc");
			$result3 = mysql_query("SELECT * FROM topnews order by dateofpub desc");
		$row1 = mysql_fetch_array($result1);
		//$a=$row1['counter'];
		//$a=$a+1;
		
?>
<title>প্রথম সকাল</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="layout.css" type="text/css" />
<script type="text/javascript" src="livenews/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="livenews/jquery.validate.js"></script>
<script type="text/javascript" src="livenews/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="livenews/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="livenews/scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="livenews/jquery.galleryview.setup.js"></script>
<script type="text/javascript" src="livenews/phonetic_int.js"></script>
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
#apDiv1 {
	position: absolute;
	width: 1172px;
	height: 304px;
	z-index: 1001;
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
	<li><a href="../bangla_help.php"><img class="noBangla" src="noBangla.jpg"/></a></li>
				
				
				<li><a href="javascript:addToFav()">বুকমার্ক</a></li>
		
				
		 
		<li><a href="../contactUs.php">যোগাযোগ</a></li>
		
		    </ul>
    <br class="clear" />
  </div>
</div>
<!-- Header Contact and Short Menu Ends Here  -->

<!-- Header Secton Logo Start Here-->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="default.php"><strong> প্রথম সকাল</strong></a><a href="../../default.php"></a></h1>
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
		<?php
include('scroller.php');
 ?> </li>
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
		
				
        <li><a href="../technology/default.php">তথ্যপ্রযুক্তি</a></li>
		
				
        <li><a href="../economics/default.php">অর্থনীতি-ব্যবসা</a></li>
		
				
        <li><a href="../feature/default.php">ফিচার</a></li>
		
				
        <li><a href="../literature/default.php">শিল্প-সাহিত্য</a></li>
		
				
        <li><a href="../education/default.php">শিক্ষা</a></li>
		
		<li><a href="diu/default.php">ডি আই ইউ ৩য় সমাবর্তন </a></li>
		
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
<div class="wrapper"></div>
<td width="100%" valign="top">
  
</td>
  </tr>
  <tr>
      <td colspan="3" align="center" style="color:#FFFFFF"  bgcolor="#990000">&nbsp;</td>
  </tr>
</table>

<!-- Body -->
<div class="wrapper"><!--Secondary Navigation Of Related News -->
    <div class="column">
	<!-- <h4><a href="default.php"></a>  এর অন্যান্য খবরসমূহ</h4> -->
	
      <div class="subnav"> 
		        <ul>
		            
        </ul>
		      </div>
    </div>
    
    <div id="apDiv1">
  
    <td colspan="4" width="75%">
	
      <tr>
          <td valign="top">
		  
		  <div align="center" class="style1" >
			<a href="details.php?news=<? echo $news;?>&id=<? echo $row1['id'];?>"><font size="+2" color="#FF0055" ><?php echo $row1['headline'];?></font></a><a href="details.php?news=<? echo $news;?>&id=<? echo $row1['id'];?>">		</a></div>

			
			<div align="center" style="background:#CCCCCC;width:800px;" ><i><? echo $row1['imagedes'];?></i></div>
			<div align="center">
			  
			        <table align='center' width="200" border="0">
			          <tr>
			            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row1['image']).'" alt="photo" align="right" height="150" width="175" onmouseover="<?php echo $row1[9];?>" onmouseout="default"/>'; echo "<br>";?>&nbsp;<font size="+1"><?php echo "<br>";echo $row1['reporter'];echo ",";echo $row1['place'];echo "<br>";echo "<br>"; echo $row1['longdes'];?></font></td>
		              </tr>
	              </table></td>
      </tr>
		      </table>
  </div>		</td>
          </tr>

		  <tr>
		  <?php $result = mysql_query("SELECT * FROM comments where  id= '$id' and news='$news' order by time asc");?>
		  <td>
		  <br/>
		  <br/>
		  <br/>
		  <br/>
		  <br/>
		  <div align="center" style="font-size: 30px; color: #009F55;">পাঠকের মন্তব্য</div>
		  <table align="center">
		  <?php while($row=mysql_fetch_array($result))
		  { ?>
		  <tr>
		  <td width="40%" style=" color:#996600"><b><?php echo $row['user'];?></b></td>
		  <td width="60%"><?php echo $row['comment'];?><div><img src="separator.jpg" /></div></td>
		  
		  </tr>
		  <?php }?>
		  <tr>
		  <form action="comment.php" method="post">
		  <table align="center">
		  <tr>
		  <div align="center" style="font-size: 22px; color: #808080;">মন্তব্য করুন</div><td>
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
		  </form>
		  </tr>
		  </table>
		  </td>
  </tr>
      </table></td>
	</tr>
</table></div>
    <br class="clear" />
</div>
﻿<!-- Footer For Copyright Related Information -->
<div class="wrapper colNew1"></div>
</body>
</html>