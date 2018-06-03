<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 09/04/2018
 * Time: 14:18
 */

include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');
function Dao_update_notification_statuts($id){


    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());


    }
    if ($conn) {
        $sql =" UPDATE notification SET  status='read' WHERE id_notification='$id' ";
        if ($result= mysqli_query($conn, $sql)) {



        }else{
            $log->error("Error while  "  . $sql . "\n" . mysqli_error($conn));

        }
    }




}