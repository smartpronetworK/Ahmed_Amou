<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 07/04/2018
 * Time: 12:11
 */

include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');


function Dao_get_All_post(){

  //  session_start();
    $conn = open_cnxn();
    global $log;
    $posts = array();
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

    if ($conn) {
        $sql ="SELECT * FROM posts   ";
        if($result = mysqli_query($conn, $sql)){
            if ($result->num_rows > 0) {
                $i=0;
                $log->info("insode post");
                while ($row = mysqli_fetch_assoc($result)) {
                    $posts[$i] = array();
                    $id_p = $row["id_post"];
                    $posts[$i][0] = $row["msg"];
                    $posts[$i][1] = $row["time"];
                    $posts[$i][2] = $row["likes"];
                    $id = $row["id_user"];

                    $sql1 ="SELECT * FROM users where   id='$id' ";
                    if($result1 = mysqli_query($conn, $sql1)){
                        if ($result1->num_rows > 0) {
                            $log->info("insode user post");
                            while ($row = mysqli_fetch_assoc($result1)) {
                                $posts[$i][3] = $row["user_name"];
                                $posts[$i][4] = $row["img"];
                                $posts[$i][5] = $id_p;
                                $posts[$i][6] = $row["category"];
                            }
                        }
                    }else{
                        $log->error("Error  " . $sql1 . "\n" . mysqli_error($conn));

                    }

                    $log->info("id post  ".$id_p);
                    $sql2 ="SELECT * FROM comment where  id_post='$id_p' ";
                    if($result2 = mysqli_query($conn, $sql2)){
                        if ($result2->num_rows > 0) {
                            $log->info("insode comments");

                            $y=7;
                           while ($row = mysqli_fetch_assoc($result2)) {
                                $posts[$i][$y] = array();
                                $posts[$i][$y][0]=$row["msg"];
                               $log->info("msg  ".$row["msg"]);
                                $posts[$i][$y][1]=$row["time"];
                               $log->info("time  ".$row["time"]);
                               $id_c = $row["id_user"];
                                $sql3 ="SELECT * FROM users where  id='$id_c' ";
                                if($result3 = mysqli_query($conn, $sql3)){
                                    if ($result3->num_rows > 0) {
                                        $log->info("insode user  comments");
                                        while ($row = mysqli_fetch_assoc($result3)) {
                                            $posts[$i][$y][2] = $row["user_name"];
                                            $log->info("user  ".$row["user_name"]);
                                            $posts[$i][$y][3] = $row["img"];
                                            $log->info("img  ".$row["img"]);
                                        }
                                    }
                                }else{
                                    $log->error("Error  " . $sql3 . "\n" . mysqli_error($conn));

                                }

$y++;
                            }
                        }
                    }else{
                        $log->error("Error  " . $sql2 . "\n" . mysqli_error($conn));

                    }
                    $i++;

                }

                 return $posts ;
            }

        }else{
            $log->error("Error  " . $sql . "\n" . mysqli_error($conn));

        }
    }
return "";
}
//print_r(Dao_get_All_post());
