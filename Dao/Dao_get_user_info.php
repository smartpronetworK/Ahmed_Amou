<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 05:25
 */



function Dao_get_user_info(){
   // session_start();
    $conn = open_cnxn();
    global $log;
    $user_info = array();
    $id=$_SESSION['id'];
    // Check connection

    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $sql = "SELECT * FROM users  WHERE   id='$id'";
        if ($result = mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {


                while ($row = mysqli_fetch_assoc($result)) {
                    $user_info[0] = array();
                    $user_info[0][0] =$row["user_name"] ;
                    $user_info[0][1] = $row["img"];
                    $user_info[0][2] = $row["email"];
                    $user_info[0][3] = $row["cv"];
                    $user_info[0][4] = $row["tel"];

                }
                //----------------------------------//
                return $user_info;
            }
        }
    }

    return "";


}