<?php
 require 'conn.php';
$con=mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD)
or die("<p>Error connecting".mysqli_error()."</p>");
echo "<p> Connected </p>";
 mysqli_select_db($con ,DATABASE_NAME)
 or die("<p>Error selecting the database your-database-name: " .
 mysql_error() . "</p>");
 echo "<p>Connected to MySQL, using database new </p>"; 
 $sql= $_REQUEST['query'];
     if($result=mysqli_query($con,$sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo "<ul>";
 while ($row = mysqli_fetch_row($result)) {
 echo "<li>Table: {$row[0]}</li>";
 }
 echo "</ul>"
?>