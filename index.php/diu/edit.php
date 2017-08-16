<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit News</title>
<style type="text/css">
<!--
body {
	background-image: url(5.JPG);
	background-repeat: repeat-x;
}
-->
</style></head>
<link rel="SHORTCUT ICON" href="frnds.ico">
<body>
<table width="760" height="336" border="0" align="center">
  
  <tr>
    <td><?php
$news=$_GET['news'];
$id=$_GET['id'];
require('connect.php');
			 mysql_select_db("498063", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			
			if($news=="photogallery")
			{
			$s1=mysql_query("SELECT * FROM $news where id=$id");
			while($test=mysql_fetch_array($s1)){
                 $headline=$test['headline'];
				 $shortdes=$test['details'];
				 }
				 
				 echo "<form id='form' name='form' method='post' action='update.php'>";
echo "<table width='748' height='258' border='0' bordercolor='#0000FF' bgcolor='#999999'>";			 

echo "<tr>

<td><div align='center' class='style1'>শিরোনাম  : </div></td>
<td><div class='style3'><textarea name='headline' type='text'>$headline</textarea></td>
</tr>

<tr>

<td><div align='center' class='style1'>বিস্তারিত  : </div></td>
<td><div class='style3'><textarea name='longdes' type='text'>$shortdes</textarea></td>
</tr>
<td><div class='style3'><input name='news' type='hidden' value='$news'/></td>
</tr>
<tr>

<td></td>
<td><div class='style3'><input name='id' type='hidden' value='$id'/></td>
</tr>
";
				 
			}
			else{
            $s1=mysql_query("SELECT * FROM $news where id=$id");
            while($test=mysql_fetch_array($s1)){
                 $headline=$test['headline'];
				 $shortdes=$test['shortdes'];
				 $longdes=$test['longdes'];
				 $imagedes=$test['imagedes'];
				}
	echo "<form id='form' name='form' method='post' action='update.php'>";
echo "<table width='748' height='258' border='0' bordercolor='#0000FF' bgcolor='#999999'>";			 

echo "<tr>

<td><div align='center' class='style1'>শিরোনাম  : </div></td>
<td><div class='style3'><textarea name='headline' type='text'>$headline</textarea></td>
</tr>
<tr>

<td><div align='center' class='style1'>সংক্ষিপ্ত :  </div></td>
<td><div class='style3'><textarea name='shortdes' type='text' line='5'>$shortdes</textarea></td>
</tr>
<tr>

<td><div align='center' class='style1'>বিস্তারিত  : </div></td>
<td><div class='style3'><textarea name='longdes' type='text'>$longdes</textarea></td>
</tr>
<tr>

<td><div align='center' class='style1'>ছবির বিবরণ  :</div></td>
<td><div class='style3'><textarea name='imagedes' type='text'>$imagedes</textarea></td>
</tr>
<tr>

<td></td>
<td><div class='style3'><input name='news' type='hidden' value='$news'/></td>
</tr>
<tr>

<td></td>
<td><div class='style3'><input name='id' type='hidden' value='$id'/></td>
</tr>
";
}			
?>

<tr>
  <td></td>
  <td><input name="Submit" type="submit" value="প্রকাশ" /></td>
  </tr>
</table>
</body>
</html>
