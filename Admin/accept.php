<?php
include '../connection.php';
if(isset($_POST['accept'])){
$name=$_POST['url'];
 $updatetrips = "UPDATE users set auth=1 WHERE id = '$name'";
    $updatetripsresult = mysqli_query($conn,$updatetrips);
    header('Location: adminacceptuser.php'); 
}

if(isset($_POST['danger'])){
    $name=$_POST['url'];
 $updatetrips = "UPDATE users set auth=2 WHERE id = '$name'";
    $updatetripsresult = mysqli_query($conn,$updatetrips);
    header('Location: adminacceptuser.php'); 
}


?>