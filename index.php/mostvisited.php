<?php
require('connect.php');

$timestamp=time();
			$timestamp=$timestamp+(6*60*60)-99999999;
			$time=date( "Y-m-d 00:00:00 ",$timestamp);
			
			mysql_select_db("498063", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			
			
			
$result1 = mysql_query("SELECT * FROM topnews where  dateofpub >= '$time' order  by counter desc");
$result2 = mysql_query("SELECT * FROM prothom_pata where  dateofpub > '$time' order  by  counter desc");
$result3 = mysql_query("SELECT * from desh  where  dateofpub > '$time' order  by  counter desc");
$result4 = mysql_query("SELECT * from international where  dateofpub > '$time' order  by  counter desc");
$result5 = mysql_query("SELECT * from khela where  dateofpub > '$time' order  by  counter desc");

$row1 = mysql_fetch_array($result1);
$row2 = mysql_fetch_array($result2);
$row3 = mysql_fetch_array($result3);
$row4 = mysql_fetch_array($result4);
$row5 = mysql_fetch_array($result5);

		echo "<ul>";
		echo "<li>";echo "<a href=details.php?news=topnews&id=";echo $row1['id'];echo ">";echo $row1['headline'];echo "</a> - ";echo $row1['counter'];echo "</li>";
		echo "<li>";echo "<a href=details.php?news=prothom_pata&id=";echo $row2['id'];echo ">";echo $row2['headline'];echo "</a> - ";echo $row2['counter'];echo "</li>";
		echo "<li>";echo "<a href=details.php?news=desh&id=";echo $row3['id'];echo ">";echo $row3['headline'];echo "</a> - ";echo $row3['counter'];echo "</li>";
		echo "<li>";echo "<a href=details.php?news=international&id=";echo $row4['id'];echo ">";echo $row4['headline'];echo "</a> - ";echo $row4['counter'];echo "</li>";
		echo "<li>";echo "<a href=details.php?news=khela&id=";echo $row5['id'];echo ">";echo $row5['headline'];echo "</a> - ";echo $row5['counter'];echo "</li>";
		echo "</ul>";
?>