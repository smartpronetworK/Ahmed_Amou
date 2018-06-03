
<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 11:44
 */


include(dirname(__DIR__).'./Dao/logging.php');
require(dirname(__DIR__).'./Dao/cnxn.php');

function Dao_update_user_info($phone , $email , $cv){
    session_start();
    $conn = open_cnxn();
    global $log;
    $data= array();
    $data[0]=false ;
    $id=$_SESSION['id'];
    $fileName = $cv['file']['name'];
    $fileSize = $cv['file']['size'];
    $fileTmpName  = $cv['file']['tmp_name'];
    $fileType = $cv['file']['type'];
    $uploadDirectory = dirname( __DIR__).'./users/cv/'.$id.'/';
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
            $path='../../users/cv/'.$id.'/'. basename($fileName);
            $sql = "UPDATE users SET  tel='$phone' , email='$email' , cv='$path' WHERE id='$id' ";
            if ($result = mysqli_query($conn, $sql)) {
                $data[0]=true ;
                return json_encode($data) ;
            }
        }

    }

echo json_encode($data) ;

}

