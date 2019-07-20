<?php
include '../../connection.php';

//$id = $_SESSION['id']
// $id = 12;
//if(isset($id) && !empty($_SESSION['role'])) {
//   echo 'Logged';

$title = $_POST['title'];


// echo $title;

$description = $_POST['description'];
$url = $_POST['url'];
$keyword = $_POST['keywords'];
$lang = $_POST['lang'];

$query = "insert into expert values('',1,'$url','$title','$description','$lang','$keyword');";

$sqlresult = mysqli_query($conn,$query) or die("no no");

header('Location: videoList.php');

?>