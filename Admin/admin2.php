<?php


 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "scfg";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo "done";  

  //require('../PHP/connection.php');


  $selectSQL = "SELECT * FROM users where auth=0 and roleid=3 or roleid =4";

 $selectRes = mysqli_query($conn,$selectSQL );
 
  if( !$selectRes ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno().': '.mysqli_error();
    echo "done";
  }else{
    echo "else";
    ?>
<table border="2">
  <thead>
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>State</th>
      <th>Email Id</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){ ?>
          <tr><td> <?php echo $row['name'] ?> </td><td> <?php echo $row['email'] ?> </td><td><?php echo $row['address'] ?> </td><td> <?php echo $row['state'] ?> </td><td><?php echo $row['dist'] ?></td></tr> <?php
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }
?>