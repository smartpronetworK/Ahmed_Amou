<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 14/11/17
 * Time: 13:58
 */


include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');



function Dao_login($user , $pass){
    session_start();
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());


    }
    if ($conn) {
        $sql =" SELECT  * FROM users WHERE user_name='$user' AND pass='$pass'";
        if ($result= mysqli_query($conn, $sql)) {
            $log->info("result");
            $role= array();
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['user'] = $row["user_name"];
                $_SESSION['role'] = $row["role"];
                $_SESSION['category'] = $row["category"];
                $_SESSION['img'] = $row["img"];
                $_SESSION['cv'] = $row["cv"];
                $_SESSION['tel'] = $row["tel"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['id'] = $row["id"];
                $_SESSION['identification_N'] = $row["identification_N"];
                $role[0] = array();
                $role[0][0] = $row["role"];
               $done= update_statuts();

            }


          //  print_r($_SESSION);
           echo json_encode($role);
        }else{
            $log->error("Error while login "  . $sql . "\n" . mysqli_error($conn));

        }
    }


    return "";


}
 //echo Dao_login('user' , '123');

function update_statuts(){



    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());


    }
    $id=$_SESSION['id'];
    if ($conn) {
        $sql ="UPDATE users SET  status='online'  WHERE id='$id'  ";

        if ($result= mysqli_query($conn, $sql)) {


        }else{
            $log->error("Error while login "  . $sql . "\n" . mysqli_error($conn));

        }
    }


return"";
}