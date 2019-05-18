<?php
include ("db.php");
echo $query = 'INSERT INTO
            student
                (mobile,name,add)
            VALUES
                (
    "'.$_POST['mobile'].'",
     "'.$_POST['name']. '",
                  "'.$_POST['add'].'")';
              
  $result = mysql_query($query, $con) or die(mysql_error($con));
  //header('location:form.php');
?>