<?php
$val = $_POST['name'];
$val1=$_POST['basic'];

if($val=="Rajat Bose")
{ 
    echo "
    <div class='info'>
    
    <span class='tag is-info is-medium'>Information of ".$val." </span>
    
    <table class='table'>
  <thead>
      <th>Name</th>
      <th>Designation</th>
      <th>Basic</th>
      <th>Address</th>
    </tr>
  </thead>
  <tr>
      <th>".$val."</th>
      <td>Web Developer</td>
      <td>".$val1."</td>
      <td>Asansol</td>
    </tr>
  </tbody>
  </table>
 </div>";
 
}
elseif($val=="Rajesh Koiri"){
    echo "
    <div class='info'>
    
    <span class='tag is-info is-medium'>Information of ".$val." </span>
    
    <table class='table'>
  <thead>
      <th>Name</th>
      <th>Designation</th>
      <th>Basic</th>
      <th>Address</th>
    </tr>
  </thead>
  <tr>
      <th>".$val."</th>
      <td>Web Developer</td>
      <td>".$val1."</td>
      <td>Asansol</td>
    </tr>
  </tbody>
  </table>
 </div>";
    
}
else{
    
    echo"<span class='tag is-danger is-medium'>Error</span>";
    
}