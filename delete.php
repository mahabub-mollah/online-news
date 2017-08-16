<?php
require('connect.php');

mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$id=$_REQUEST['id'];
			$news=$_REQUEST['news'];
			
			$sql="DELETE FROM $news where id='$id' limit 1";
		
			 if (!mysql_query($sql,$con))
			  {
			  'Error: ' . mysql_error();
			  echo "Deletion Failed";
			  }
			  else
			  echo "News Deleted";
			  include('view_all.php');
?>