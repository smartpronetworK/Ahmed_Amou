<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 21/04/2018
 * Time: 13:06
 */



include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');


function Dao_like_post($id_user,$id_post,$number_of_like){


    $conn = open_cnxn();
    global $log;
    $status = array();
    // Check connection

    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {
        echo("before slect");
        $sql = "SELECT * FROM liked_post WHERE  id_post='$id_post' AND id_user='$id_user'";
        if ($result = mysqli_query($conn, $sql)) {
            echo("result    ------> ".$result->num_rows );
            if ($result->num_rows == 0) {
                $sql1="INSERT INTO liked_post (id_user, id_post) VALUES ('$id_user','$id_post')";
                if ($result1 = mysqli_query($conn, $sql1)) {

                    $incriment_like= ((int) $number_of_like + 1);
                    $sql2 ="UPDATE posts SET  likes='$incriment_like'  WHERE id_post='$id_post'";

                    if ($result2 = mysqli_query($conn, $sql2)) {

                        return "".$incriment_like ;

                    }

                }
            }

        }
        if ($result->num_rows > 0){


            return "already";
        }
    }



return "";
}

