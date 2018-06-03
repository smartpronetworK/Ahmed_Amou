<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/05/2018
 * Time: 18:41
 */


require(dirname(__FILE__).'../library/PHPMailer/src/PHPMailer.php');
require(dirname(__FILE__).'../library/PHPMailer/src/Exception.php');
require(dirname(__FILE__).'../library/PHPMailer/src/SMTP.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');
$mail = new PHPMailer(true);// Passing `true` enables exceptions
function Dao_become_user($name,$email,$tel,$cv,$account_type){
    $data= array();
    $data[0]=true ;
    $to = "";
    $subject = 'new User want to join us ';
    $from = '';
    global $log;
    date_default_timezone_set('Africa/Nouakchott');
    $date =date("d/m/y h:i:s");

    $message=" Full name :".$name."<br> Tel:".$tel."<br> Email :".$email."<br> account type :".$account_type;
// Sending email

    global $mail;
    try {
        $log->info('/-------------- try ----------/');
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $from;                 // SMTP username
        $mail->Password = '';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($from, ' NEW USER COME IN');
        $mail->addAddress( $to, "SmartProNetwork");     // Add a recipient




        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    =$message;
        $fileName = $cv['cv']['name'];
        $fileSize = $cv['cv']['size'];
        $fileTmpName  = $cv['cv']['tmp_name'];
        $fileType = $cv['cv']['type'];

        $uploadDirectory = dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/users/temp_cv_users/';
        $uploadPath =$uploadDirectory . basename($fileName);

        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $path=dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/users/temp_cv_users/'. basename($fileName);
            $mail->AddAttachment($path);



        $mail->send();
        $mail->SmtpClose();
        $log->info('Your mail has been sent successfully.');
        unlink(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/users/temp_cv_users/'. basename($fileName));


    } catch (Exception $e) {

        $log->info('Unable to send email. Please try again.'.$mail->ErrorInfo);
        $data[0]=false;
    }

}
