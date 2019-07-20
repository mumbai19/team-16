<?php
require 'vendor/autoload.php';
include 'connection.php';
// include 'cipher.php';
// include 'PHPMailer/message.php';
// include 'PHPMailer/mail.php';
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp as GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\Psr7\Request as GuzzleRequest;

if (isset($_POST['Login'])) {
    $updatetrips = "UPDATE trips set stat=1 WHERE date_time < now()";
    $updatetripsresult = mysqli_query($conn,$updatetrips);
    $username =  $_POST['username'];    
    $password =  $_POST['password'];    
    $password = sha1($password);
    
    $result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $username . "' and password = '". $password."'");
    while($row1 = mysqli_fetch_array($result)){
        $email =  $row1['email_id'];
    }

	$count  = mysqli_num_rows($result);
	if($count==0) {
        $message = "Invalid Username or Password!";
        header('Location: login.php'); 
        } 
        else 
        {
                $role =  $row1['roleid'];
                session_start();
                $_SESSION["email"] = $email;
                if($role === 1){
                    header('Location: farmer/index.php'); 
                }
                if($role === 2){
                    header('Location: admin/index.php'); 
                }
                if($role === 3){
                    header('Location: vendor/index.php'); 
                }
                if($role === 4){
                    header('Location: expert/index.php'); 
                }
                if($role === 5){
                    header('Location: po/index.php'); 
                }




                

                
	}
}


?>