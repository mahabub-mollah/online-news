<?php
require('connect.php');
$counter=1;
$timestamp=time();
			$timestamp=$timestamp+(6*60*6)-99999999;
			$time=date( "Y-m-d 00:00:00 ",$timestamp);
			
			mysql_select_db("498063", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			
			
			$result = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time' order by dateofpub desc");
			
			while($row1= mysql_fetch_array($result))
 {
 if($counter==6)
 break;
 echo "";echo "<a href=details.php?news=topnews&id=";echo $row1['id'];echo ">";echo $row1['headline'];echo "</a>";
 $counter++;
 
 }
 
 ?>