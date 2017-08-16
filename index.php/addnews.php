<title>ADDING NEWS AREA</title>
<?php
include('connect.php');
mysql_select_db("mahbub", $con);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;

$headline=$_POST['headline'];
$reporter=$_POST['reporter'];
$place=$_POST['place'];
$short=$_POST['short'];
$long=$_POST['long'];


$image=$_FILES["image"];
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) { 

          // Temporary file name stored on the server
          $tmpName  = $_FILES['image']['tmp_name'];  
           
          // Read the file 
          $fp     = fopen($tmpName, 'r');
          $data = fread($fp, filesize($tmpName));
          $data = addslashes($data);
          fclose($fp);
}
else {
   print "কোনও ছবি সিলেকট করা হইনি</br>";
}




$imagedes=$_POST['imagedes'];
$type1=$_POST['type1'];
$type2=$_POST['type2'];
$type3=$_POST['type3'];
if($type1!="-")
	{	
		{

			$sql="INSERT INTO $type1 (headline,reporter,place,shortdes,longdes,image,imagedes)
			VALUES (
			'$headline',
			'$reporter',
			'$place',
			'$short',
			'$long',
			'$data',
			'$imagedes')";
			}
			 if (!mysql_query($sql,$con))
			  {
			  'Error: ' . mysql_error();
			  }
			  else{}
}

if($type2!="-")
{
	{
			$sql="INSERT INTO $type2 (headline,reporter,place,shortdes,longdes,image,imagedes)
			VALUES (
			'$headline',
			'$reporter',
			'$place',
			'$short',
			'$long',
			'$data',
			'$imagedes')";
}
			 if (!mysql_query($sql,$con))
			  {
			  'Error: ' . mysql_error();
			  }
			  else {}
}
if($type3!="-")
{
	{
			$sql="INSERT INTO $type3 (headline,reporter,place,shortdes,longdes,image,imagedes)
			VALUES (
			'$headline',
			'$reporter',
			'$place',
			'$short',
			'$long',
			'$data',
			'$imagedes')";
			}
			 if (!mysql_query($sql,$con))
			  {
			  'Error: ' . mysql_error();
			  }
			  else {}
}

echo"আপনার পাঠানো সংবাদ সফলভাবে পোস্ট হয়েছে</br>";
echo"<a href='newsentry.php'>ডাটাবেসে আরও সংবাদ যুক্ত করুন</a><br>";
echo "নতুবা </br>";
echo "<a href='default.php'>প্রথম পাতা প্রবেশ করুন</a>";

?>