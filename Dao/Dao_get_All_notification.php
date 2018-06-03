<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 08/04/2018
 * Time: 06:23
 */
include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');



function Dao_get_user_notification($id_owner_post){
    $conn = open_cnxn();
    global $log;
    $notifcation = array();
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $sql = "SELECT * FROM notification where   id_owner_post='$id_owner_post' ";
        if ($result = mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                $i = 0;
              //  $log->info("insode notificiton");
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_com = $row["id_comment"];
                    $id_notif = $row["id_notification"];
                    $statuts = $row["status"];
                    //------------------------------------//
                    $sql1 = "SELECT * FROM comment where   id_comment='$id_com'";
                    if ($result1 = mysqli_query($conn, $sql1)) {
                        if ($result1->num_rows > 0) {
                           // $log->info("insode comment");
                            while($row = mysqli_fetch_assoc($result1)) {
                                $notifcation[$i] = array();
                                $notifcation[$i][0] = $statuts;
                                $notifcation[$i][1] = $row["msg"];
                                $notifcation[$i][2] = $row["time"];
                                $id_user= $row["id_user"];
                                //------------------------------------------------//

                                $sql2 = "SELECT * FROM users where  id='$id_user'";
                                if ($result2 = mysqli_query($conn, $sql2)) {
                                    if ($result2->num_rows > 0) {
                                      //  $log->info("insode users");
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                            $notifcation[$i][3] = $row["img"];
                                            $notifcation[$i][4] = $row["user_name"];
                                            $notifcation[$i][5] = $id_notif;
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $i++;
                }
                //----------------------------------//
                echo json_encode($notifcation);
            }
        }
    }

    echo "";
}
