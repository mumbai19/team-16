<?php
include '../../connection.php';
session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['role'])) {
   echo 'Logged';
}

$assetName = $_POST['asset_name'];
$assetDesc = $_POST['description'];

$price = $_POST['price'];
$weight = $_POST['weight'];
$stock = $_POST['stock'];

$date = date("Y/m/d");

$id = (int)$_SESSION['id'];
echo $id;

$query = "INSERT INTO `farmerassets`( `id`, `product_name`, `product_description`, `price`, `stock`, `weight`, `date`) VALUES ($id,'$assetName','$assetDesc',$price,$stock,$weight,'$date');";

$result = mysqli_query($conn,$query) or die("not done");

header('Location:index.php');



?>
