<?php
include '../connection.php';

if(isset($_SESSION['accessToken']) && !empty($_SESSION['role'])) {
   echo 'Logged';
}

$assetName = $_POST['asset_name'];
$assest_count = $_POST['asset_count'];
$price = $_POST['price'];

?>
