<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';


    $email = $_POST['email'];//get email
    $mail=new PHPMailer(true); //new object from PHPMailer
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;

    $mail->Username="asramhmd130@gmail.com"; //sent from gmail
    $mail->Password = 'xlpuoyiptngedbvw';

    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port=587;
    $mail->setFrom('asramhmd130@gmail.com');
    $mail->addAddress($email); //sent to
    $mail->isHTML(true);

    $vervicationcode = substr(number_format(time()*rand(),0,'',''),0,6); //generate code
    $mail->Subject="Verfication Code"; //subject of email
    $mail->Body= '<p>your verfication code is: <b style="font-size:30px;">'.$vervicationcode.'</b></p>' ; //body of email
    $mail->send(); //send
    session_start();
    $_SESSION["vervicationcode"]=$vervicationcode; //save code verifation

    //redirect verfication page to enter code
    echo
    "
    <script>
    document.location.href = 'verfication_code.php'; 
    </script>
    ";

?>