<?php
require('connect.php');
$counter=1;
$timestamp=time();
			$timestamp=$timestamp+(6*60*60);
			$time=date( "Y-m-d 00:00:00 ",$timestamp);
			
			mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			
			
			$result = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time' order by dateofpub desc");
			$result1 = mysql_query("SELECT * FROM shikha where  dateofpub >= '$time' order by dateofpub desc");
			
			while($row1= mysql_fetch_array($result))
			//while($row2= mysql_fetch_array($result1))
 {
 if($counter==6)
 break;
 echo "<a href=details.php?news=topnews&id=";echo $row1['id'];echo ">";echo $row1['headline'];echo "</a>";
 $counter++;
 
 }
 
 ?>