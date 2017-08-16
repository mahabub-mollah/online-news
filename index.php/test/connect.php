<?php
							$con = mysql_connect("localhost","root","");
							if (!$con)
							  {
							  die('Could not connect: ' . mysql_error());
							  }
							if (mysql_query("CREATE DATABASE IF NOT EXISTS st_db",$con))
							  {
							  
							  }
							else
							  {
							  echo "ERROR CREATING DATABASE: " . mysql_error();
							  }
										  mysql_select_db("mahbub", $con);
								
?>