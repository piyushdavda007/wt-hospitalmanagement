<?php
$con=mysqli_connect("localhost:3308","root","");
if(!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("hospital",$con);
?>