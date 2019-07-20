<?php

  $conn = mysqli_connect('localhost','root','1234','fcfg');

if(mysqli_connect_errno()){
echo 'connection failed'.mysqli_connect_errno();
}


  $selectSQL = 'SELECT * FROM users where auth=0 and roleid=3 or roleid =4';
 
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
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
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['address']}</td><td>{$row['state']}</td><td>{$row['district']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }
?>