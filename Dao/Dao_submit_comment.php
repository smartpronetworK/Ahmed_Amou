<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 08/04/2018
 * Time: 06:06
 */


require(dirname(__DIR__).'./library/PHPMailer/src/PHPMailer.php');
require(dirname(__DIR__).'./library/PHPMailer/src/Exception.php');
require(dirname(__DIR__).'./library/PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');
require(dirname(__DIR__).'./Dao/Dao_add_notification.php');



$mail = new PHPMailer(true);// Passing `true` enables exceptions






function Dao_submit_comment($commnet,$id_post,$iduser){
    // session_start();
    $conn = open_cnxn();
    global $log;
    $posts = array();
    date_default_timezone_set('Africa/Nouakchott');
    $date =date("d/m/y h:i:s");
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "INSERT INTO comment (id_post,id_user,msg,time) VALUES ('$id_post','$iduser','$commnet','$date')";

        if (mysqli_query($conn, $sql))
        {
            $id_comment = mysqli_insert_id($conn);
          //  echo Dao_add_notification(get_post_owner($id_post),$id_comment);

            $log->info("before testtttttttttttttttttttt");
            if(get_post_owner($id_post) != $iduser){
                $log->info(" inside if ----> before user != session");
                $log->info('/-----------------  call -------- //');
                   push_notification_to_email($id_post,$iduser,$date,$commnet);
                echo Dao_add_notification(get_post_owner($id_post),$id_comment);
            }else{
                $log->info(" inside else ----  >before user == session");

               echo get_all_notifcation(get_post_owner($id_post));


            }



        } else
        {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    echo "";
}


function get_post_owner($id_post){
    //  session_start();
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "SELECT * FROM posts where  id_post='$id_post'";



            if($result = mysqli_query($conn, $sql)){
                if ($result->num_rows > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        return $row["id_user"];
                    }
                }
            } else {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    return "";
}



function push_notification_to_email($id_post,$id_user,$date,$comment){
    $to = get_user_email(get_post_owner($id_post));

    $subject = 'notification from smartpronetwork';
    $from = 'smartpronetwork6@gmail.com';
    global $log;
    $info=get_user_info($id_user);
    $log->info('/-------------- push ----------/');

    $message="
<html lang=\"en\">

<body>
<ul class=\" chat \" style=' list-style: none;
        margin: 0;'>

<li class=\"left clearfix\">

<div class=\"chat-body clearfix\" style='    position: relative;
        font-size: 11px;
        padding: 10px;
        border: 1px solid #f8f9fa;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); background: #dedfe0b5;'>
<div class=\"header\" style='   padding-bottom: 5px;
        border-bottom: 1px solid #f1f5fc;'>
    <strong class=\"primary-font\" style='        color: #3c8dbc;
'>$info[0]</strong>
    <strong style=' margin-left: 800px;  color: #0d0d0d;'>$date</strong>
</div>
<p>$comment</p>



</div>
</li>


</ul>



</body>
<style>
    .chat-message {
        padding: 60px 20px 115px;
    }

    .chat {
        list-style: none;
        margin: 0;
    }

    .chat-message{
        background: #f9f9f9;
    }

    .chat li img {
        width: 45px;
        height: 45px;
        border-radius: 50em;
        -moz-border-radius: 50em;
        -webkit-border-radius: 50em;
    }

    img {
        max-width: 100%;
    }

    .chat-body {
        padding-bottom: 20px;
    }

    .chat li.left .chat-body {
        margin-left: 70px;
        background-color: #f8f9fa;
    }

    .chat li .chat-body {
        position: relative;
        font-size: 11px;
        padding: 10px;
        border: 1px solid #f8f9fa;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

    .chat li .chat-body .header {
        padding-bottom: 5px;
        border-bottom: 1px solid #f1f5fc;
    }

    .chat li .chat-body p {
        margin: 0;
    }

    .chat li.left .chat-body:before {
        position: absolute;
        top: 10px;
        left: -8px;
        display: inline-block;
        background: #f8f9fa;
        width: 16px;
        height: 16px;
        border-top: 1px solid #f8f9fa;
        border-left: 1px solid #f8f9fa;
        content: '';
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
    }

    .chat li.right .chat-body:before {
        position: absolute;
        top: 10px;
        right: -8px;
        display: inline-block;
        background: #fff;
        width: 16px;
        height: 16px;
        border-top: 1px solid #f1f5fc;
        border-right: 1px solid #f1f5fc;
        content: '';
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
    }

    .chat li {
        margin: 15px 0;
    }

    .chat li.right .chat-body {
        margin-right: 70px;
        background-color: #fff;
    }

    .chat-box {
        position: fixed;
        bottom: 0;
        left: 444px;
        right: 0;
        padding: 15px;
        border-top: 1px solid #eee;
        transition: all .5s ease;
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
        -ms-transition: all .5s ease;
        -o-transition: all .5s ease;
    }

    .primary-font {
        color: #3c8dbc;
    }

    a:hover, a:active, a:focus {
        text-decoration: none;
        outline: 0;
    }
</style>
</html>";
// Sending email

global $mail;

    $log->info('/-------------- mail ----------/');
    try {
        $log->info('/-------------- try ----------/');
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $from;                 // SMTP username
        $mail->Password = 'smartpronetwork2018AMOU';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($from, 'smart pro');
        $mail->addAddress( $to, $info[0]);     // Add a recipient




        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =$message;
        $mail->send();
        $log->info('Your mail has been sent successfully.');

    } catch (Exception $e) {

        $log->info('Unable to send email. Please try again.'.$mail->ErrorInfo);
    }
}

function get_user_email($user_id){
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "SELECT * FROM users where  id='$user_id'";



        if($result = mysqli_query($conn, $sql)){
            if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    return $row["email"];
                }
            }
        } else {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    return "";
}

function get_user_info($user_id){
    $conn = open_cnxn();
    global $log;
    $info=array();
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "SELECT * FROM users where   id='$user_id'";



        if($result = mysqli_query($conn, $sql)){
            if ($result->num_rows > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                            $array[0]=$row["user_name"];
                            $array[1]=$row["img"];
                           // $array[2]=$row["email"];

                    return $array;
                }
            }
        } else {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    return "";
}
