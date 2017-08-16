<html>
   <head>
   <link rel="SHORTCUT ICON" href="frnds.ico">
      <title>সব সংবাদ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-image: url(6.PNG);
	background-repeat: repeat-x;
	color: #FFFBF0;
}
-->
a.five:link {color:#ff0000;text-decoration:none;}
a.five:visited {color:#66ffff;text-decoration:none;}
a.five:hover {text-decoration:underline;}
a.four:link {color:#ff0000;text-decoration:none;}
a.four:visited {color:#ff0000;text-decoration:none;}
a.four:hover {
	text-decoration: underline;
	color: #FFFFFF;
}
</style></head>
   <body>
<table width="948" border="0" align="center">
  
  <tr>
    <td height="239" align="left" valign="middle"><?php
             require('connect.php');
			 mysql_select_db("mahbub", $con);
			mysql_query('SET CHARACTER SET utf8');
			mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'") ;
			$sql1 = mysql_query("SELECT * FROM topnews order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#2ADF55'>";
		   echo "<font ='Algerian' color='#FF0000'><h2><div align='center' class='style1'>সকল সংবাদ একনজরে</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>মূছে ফেলা</td>
			</tr>";
            while($a1=mysql_fetch_array($sql1))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a1['headline']."</td>
			   <td><div align='center' class='style3'>".$a1['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a1['longdes']."</td>
			   <td><div align='center' class='style3'>".$a1['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=topnews&id=".$a1['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=topnews&id=".$a1['id'].">মূছে ফেলুন</a></td></tr>";
                }
            echo "</table >";
$sql2 = mysql_query("SELECT * FROM prothom_pata order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#66FFFF'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>প্রথম পাতার সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			সম্পাদনা</td>
			<td> মুছে ফেলুন</td>
			</tr>";
            while($a2=mysql_fetch_array($sql2))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a2['headline']."</td>
			   <td><div align='center' class='style3'>".$a2['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a2['longdes']."</td>
			   <td><div align='center' class='style3'>".$a2['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=prothom_pata&id=".$a2['id'].">সম্পাদনা
			   </a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=prothom_pata&id=".$a2['id'].">Delete</a></td></tr>";
                }
            echo "</table >";
$sql3 = mysql_query("SELECT * FROM rajniti order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>রাজনীতির সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>মুছে ফেলুন</td>
			</tr>";
            while($a3=mysql_fetch_array($sql3))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a3['headline']."</td>
			   <td><div align='center' class='style3'>".$a3['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a3['longdes']."</td>
			   <td><div align='center' class='style3'>".$a3['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=rajniti&id=".$a3['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=rajniti&id=".$a3['id'].">Delete</a></td></tr>";
                }
            echo "</table >";
$sql4 = mysql_query("SELECT * FROM porashuna order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>পড়াশুনার সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>্মুছে ফেলুন</td>
			</tr>";
            while($a4=mysql_fetch_array($sql4))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a4['headline']."</td>
			   <td><div align='center' class='style3'>".$a4['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a4['longdes']."</td>
			   <td><div align='center' class='style3'>".$a4['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=porashuna&id=".$a4['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=porashuna&id=".$a4['id'].">মুছে ফেলুন</a></td></tr>";
                }
            echo "</table >";
$sql5 = mysql_query("SELECT * FROM orthoniti order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>অর্থনীতির সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>্মুছে ফেলুন</td>
			</tr>";
            while($a5=mysql_fetch_array($sql5))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a5['headline']."</td>
			   <td><div align='center' class='style3'>".$a5['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a5['longdes']."</td>
			   <td><div align='center' class='style3'>".$a5['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=orthoniti&id=".$a5['id'].">Edit</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=orthoniti&id=".$a5['id'].">মুছে ফেলুন</a></td></tr>";
                }
            echo "</table >";
$sql6 = mysql_query("SELECT * FROM khela order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>সব খেলার খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td> মুছে ফেলুন</td>
			</tr>";
            while($a6=mysql_fetch_array($sql6))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a6['headline']."</td>
			   <td><div align='center' class='style3'>".$a6['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a6['longdes']."</td>
			   <td><div align='center' class='style3'>".$a6['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=khela&id=".$a6['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=khela&id=".$a6['id'].">মুছে ফেলুন</a></td></tr>";
                }
            echo "</table >";
$sql7 = mysql_query("SELECT * FROM international order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>আন্তর্জাতিক সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>্মুছে ফেলুন</td>
			</tr>";
            while($a7=mysql_fetch_array($sql7))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a7['headline']."</td>
			   <td><div align='center' class='style3'>".$a7['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a7['longdes']."</td>
			   <td><div align='center' class='style3'>".$a7['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=international&id=".$a7['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=international&id=".$a7['id'].">্মুছে ফেলুন</a></td></tr>";
                }
            echo "</table >";
$sql8 = mysql_query("SELECT * FROM desh order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>দেশের সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>্মুছে ফেলুন</td>
			</tr>";
            while($a8=mysql_fetch_array($sql8))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a8['headline']."</td>
			   <td><div align='center' class='style3'>".$a8['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a8['longdes']."</td>
			   <td><div align='center' class='style3'>".$a8['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=desh&id=".$a8['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=desh&id=".$a8['id'].">্মুছে ফেলুন</a></td></tr>";
                }
            			
    echo "</table >";
	
	$sql9 = mysql_query("SELECT * FROM binodon order  by dateofpub desc");
            
           echo "<table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>";
		   echo "<font ='Algerian' color='#0000ff'><h2><div align='center' class='style1'>বিনোদনের সব খবর</h2></font>";
           echo "
		   <tr >
		   	<td><div align='center' class='style1'>শিরোনাম   </td>
			<td><div align='center' class='style1'>সংক্ষিপ্ত</td>
			<td><div align='center' class='style1'>বিস্তারিত</td>
			<td><div align='center' class='style1'>ছবির বিবরণ</td>
			<td>সম্পাদনা</td>
			<td>্মুছে ফেলুন</td>
			</tr>";
            while($a9=mysql_fetch_array($sql9))
                {
               echo "<tr>
			   <td><div align='center' class='style3'>".$a9['headline']."</td>
			   <td><div align='center' class='style3'>".$a9['shortdes']."</td>
			   <td><div align='center' class='style3'>".$a9['longdes']."</td>
			   <td><div align='center' class='style3'>".$a9['imagedes']."</td>
			   <td><div align='center' class='style3'><a class='five' href=edit.php?news=desh&id=".$a9['id'].">সম্পাদনা</a></td>
			   </font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=desh&id=".$a9['id']."মুছে ফেলুন</a></td></tr>";
                }
            			
    echo "</table >";
	
	$sql10 = mysql_query("SELECT * FROM photogallery order  by dateofpub desc");
           ?> 
           <table width='948' height='104' border='2' bordercolor='#0000FF' bgcolor='#999999'>
		   <font ='Algerian' color='#0000ff'><h2>
		     <td bgcolor="#D6D6D6"><div align='center' class='style1'>বিনোদনের সব খবর</h2>
		       <tr >
		         <td bgcolor="#D4FFAA"><div align='center' class='style1'>শিরোনাম   </td>
		         <td><div align='center' class='style1'>বিস্তারিত</td>
		         <td><div align='center' class='style1'>ছবি</td>
		         <td>সম্পাদনা</td>
		         <td>ডিলিট</td>
	           </tr>
		       <?php
            while($a10=mysql_fetch_array($sql10))
                {
				?>
		       <tr>
			   <td bgcolor="#FFFFFF"><div align='center' class='style3'><?php echo $a10['headline']?></td>
			   <td bgcolor="#FFFFFF"><div align='center' class='style3'><?php echo $a10['details']?></td>
			   <td bgcolor="#FFFFFF"><div align='center' class='style3'><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($a10['image']).'" width="450" height="300"/>';?> </td>
			   <td bgcolor="#00DF55"><div align='center' class='style3'><a class='five' href=edit.php?news=photogallery&id=<?php echo $a10['id']?>>সম্পাদনা</a></td>
		     <td bgcolor="#00DF55"></font><font color='#00ffff'><td><div align='center' class='style3'><a class='four' href=delete.php?news=photogallery&id=<?php echo $a10['id']?>>মুছে ফেলুন</a></td></tr>
                <?php } ?>
            			
    </table >
	
</td>
  </tr>
</table>
   </body>
   
</html>
