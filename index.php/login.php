<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
mysql_select_db("mahbub", $con);
mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
$result1 = mysql_query("SELECT username,password FROM admin");
while($row1 = mysql_fetch_array($result1))
{
	if(($row1['username']==$username)&&($row1['password']==$password))
	{
	include('adminpanel.php');
	}
	else {
	echo"<table align='center'>";
	echo "<tr>";
	echo "<td align='center'>";
	echo "ভুল ইউজার নাম এবং পাসওয়ার্ড";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	include('default.php');
	}
}
?>