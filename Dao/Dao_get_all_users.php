<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 03/05/2018
 * Time: 09:23
 */



include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');

function Dao_get_all_users(){
    $conn = open_cnxn();
    global $log;
    $users = array();
    // Check connection

    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $sql = "SELECT * FROM users    ";
        if ($result = mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                $i = 0;

                while ($row = mysqli_fetch_assoc($result)) {
                    $users[$i] = array();
                    $users[$i][0] =$row["user_name"] ;
                    $users[$i][1] = $row["img"];
                    $users[$i][2] = $row["cv"];
                    $users[$i][3] = $row["category"];
                    $users[$i][4] = $row["tel"];
                    $users[$i][5] = $row["email"];
                    $users[$i][6] = $row["identification_N"];
                    $i++;
                }
                //----------------------------------//
                return $users;
            }
        }
    }

    return "";
}

