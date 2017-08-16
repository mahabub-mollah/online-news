<?php
require('connect.php');
$counter=1;
$timestamp=time();
			$timestamp=$timestamp+(6*60*60)-99999999;
			$time=date( "Y-m-d 00:00:00 ",$timestamp);
			
			mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			
			
			$result = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time' order by dateofpub desc");
			while($row= mysql_fetch_array($result))
 {
 echo $row[4];
 echo "    •     ";
 }
 ?>