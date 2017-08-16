<?php 
include('connect.php');
mysql_select_db("mahbub", $con);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;


$id=$_POST['id'];
$user=$_POST['name'];
$news=$_POST['news'];
$comment=$_POST['comment'];



$sql="INSERT INTO comments (id,news,user,comment)
			VALUES (
			'$id',
			'$news',
			'$user',
			'$comment')";
			
			 if (!mysql_query($sql,$con))
			  {
			  'Error: ' . mysql_error();
			  }
			  include('default.php');
?>