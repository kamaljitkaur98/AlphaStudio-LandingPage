<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

$username = filter_input(INPUT_POST, 'username');
$email_id = filter_input(INPUT_POST,'email');
$message = filter_input(INPUT_POST,'message');
if(!empty($username) && !empty($email_id)){
    if(!empty($message)){

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "alphastudio";

        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        
        if(mysqli_connect_error()){
            die('Connect error'.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else{

            header("Location:home.html#contactus");

            $sql = "INSERT INTO contactus (username, email,mess) values('$username','$email_id','$message')";

            $mail = new PHPMailer;

            try {
                //Server settings
                $mail->SMTPDebug = 0;                                       
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';  						
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = ' ';    //your gmail ID username               
                $mail->Password   = ' ';    //your gmail password                      
                $mail->SMTPSecure = 'ssl';                                  
                $mail->Port       = 465;                                    
            
                //Recipients
                $mail->setFrom(' ', 'Mailer'); //first parameter your username
                $mail->addAddress($email_id);     
                $mail->isHTML(false);                                 
                $mail->Subject = 'Hey! Thanks for the feedback';
                $mail->Body    = $message;
                
                $mail->send();
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
                }
                else{
                echo "Error: ". $sql ."
                ". $conn->error;
                }
    }
    $conn->close();
    }

    else{
        echo "Type in some message";
    }
}
?>