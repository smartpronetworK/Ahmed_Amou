<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 08/04/2018
 * Time: 06:22
 */



function Dao_add_notification($post_owner,$id_comment){

     session_start();
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $log->info("before insert notif /********************************/");
        $sql = "INSERT INTO notification(id_owner_post, id_comment, status) VALUES ('$post_owner','$id_comment','unread')";

        if (mysqli_query($conn, $sql))
        {
//send email
            //check if usr
           echo  get_all_notifcation($_SESSION['id']);
        } else
        {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }

}




function get_all_notifcation($id_owner_post){
    $conn = open_cnxn();
    global $log;
    $notifcation = array();
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        $sql = "SELECT * FROM notification where   id_owner_post='$id_owner_post'";
        if ($result = mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                $i = 0;
               // $log->info("insode notificiton");
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_com = $row["id_comment"];
                    $statuts = $row["status"];
                    //------------------------------------//
                    $sql1 = "SELECT * FROM comment where   id_comment='$id_com'";
                    if ($result1 = mysqli_query($conn, $sql1)) {
                        if ($result1->num_rows > 0) {
                            //$log->info("insode comment");
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
                                     //   $log->info("insode users");
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                            $notifcation[$i][3] = $row["img"];
                                            $notifcation[$i][4] = $row["user_name"];
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