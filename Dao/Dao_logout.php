<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 21/04/2018
 * Time: 12:22
 */


include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');


function Dao_logout($id){

    session_start();
    update_statuts($id);


}
function update_statuts($id){



    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());


    }

    if ($conn) {
        $sql ="UPDATE users SET  status='offline'  WHERE id='$id'  ";

        if ($result= mysqli_query($conn, $sql)) {


        }else{
            $log->error("Error while login "  . $sql . "\n" . mysqli_error($conn));

        }
    }


    return"";
}

