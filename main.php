<?php
// require 'vendor/autoload.php';
include 'connection.php';
// include 'cipher.php';
// include 'PHPMailer/message.php';
// include 'PHPMailer/mail.php';
// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;
// use GuzzleHttp as GuzzleHttp;
// use GuzzleHttp\Subscriber\Oauth\Oauth1;
// use GuzzleHttp\Psr7\Request as GuzzleRequest;


if (isset($_POST['login'])) {
    $username =  $_POST['email'];    
    $password =  $_POST['password'];    
    
    $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $username . "' and password = '". $password."'");
    while($row1 = mysqli_fetch_array($result)){
        $email =  $row1['email'];
        $role =  $row1['roleid'];
    }
    $a = "SELECT * FROM users WHERE email='" . $username . "' and password = '". $password."'";
    echo $a;
	$count  = mysqli_num_rows($result);
	if($count==0) {
        echo 1;
        $message = "Invalid Username or Password!";
        header('Location: login.php'); 
        } 
        else 
        {
            
                
                echo $role;
                session_start();
                $_SESSION["email"] = $email;
                if($role == 1){
                    header('Location: PHP/farmer/index.php'); 
                }
                if($role == 2){
                    header('Location: admin/index.php'); 
                }
                if($role == 3){
                    header('Location: vendor/index.php'); 
                }
                if($role == 4){
                    header('Location: expert/index.php'); 
                }
                if($role == 5){
                    header('Location: po/index.php'); 
                }
                
	}
}


if (isset($_POST['Register'])) {
    echo 1;
}

?>