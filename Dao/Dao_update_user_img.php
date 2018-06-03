<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 14:06
 */

include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');







 function Dao_update_user_img($img){


     session_start();
     $conn = open_cnxn();
     global $log;
     $data= array();
     $data[0]=false ;
     $id=$_SESSION['id'];
     $fileName = $img['file']['name'];
     $fileSize = $img['file']['size'];
     $fileTmpName  = $img['file']['tmp_name'];
     $fileType = $img['file']['type'];
     $uploadDirectory = dirname(__DIR__).'./users/img/'.$id.'/';
     $uploadPath =$uploadDirectory . basename($fileName);
     // Check connection
     foreach(glob($uploadDirectory.'*.*') as $v){
         unlink($v);
     }
     if (!$conn)
     {

         $log->error("Connection failed: " . mysqli_connect_error());

     }
     if ($conn) {
         $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
         if($didUpload) {
             $path='../../users/img/'.$id.'/'. basename($fileName);
             $sql = "UPDATE users SET  img='$path' WHERE id='$id' ";
             if ($result = mysqli_query($conn, $sql)) {
                 $data[0]=true ;
                 return json_encode($data) ;
             }
         }

     }

     echo json_encode($data) ;

}