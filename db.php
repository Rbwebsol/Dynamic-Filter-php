<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db="smdb"; 
$con = mysql_connect("$host", "$username", "$password") or die("cannot connect"); 
mysql_select_db($db,$con) or die("cannot select DB");
?>