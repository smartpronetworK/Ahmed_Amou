<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 14/04/2018
 * Time: 12:00
 */

include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');

function Dao_get_status_users(){
    $conn = open_cnxn();
    global $log;
    $status = array();
    // Check connection

    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $sql = "SELECT * FROM users  ";
        if ($result = mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                $i = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $status[$i] = array();
                    $status[$i][0] =$row["user_name"] ;
                    $status[$i][1] = $row["img"];
                    $status[$i][2] = $row["status"];
                    $status[$i][3] = $row["category"];
                    $i++;
                }
                //----------------------------------//
                echo json_encode($status);
            }
        }
    }

    echo "";
}
