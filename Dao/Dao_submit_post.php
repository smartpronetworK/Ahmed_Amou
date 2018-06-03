<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 07/04/2018
 * Time: 11:34
 */


include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');


function Dao_submit_post($msg){
    session_start();
    $conn = open_cnxn();
    global $log;

    date_default_timezone_set('Africa/Nouakchott');
    $date =date("d/m/y h:i:s");
    $id=  $_SESSION['id'];

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

    if ($conn) {

        $sql = "INSERT INTO posts (id_user,msg,time,likes) VALUES ('$id','$msg','$date','0')";

        if (mysqli_query($conn, $sql))
            {

            } else
            {

                $log->error("Error " . $sql . "\n" . mysqli_error($conn));
            }

        }




}
