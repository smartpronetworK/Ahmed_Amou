<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 21/04/2018
 * Time: 17:52
 */

$currentDir = getcwd();
$uploadDirectory = dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/users/img/';
echo $uploadDirectory;
echo $currentDir;
$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileTmpName  = $_FILES['file']['tmp_name'];
$fileType = $_FILES['file']['type'];
//$fileExtension = strtolower(end(explode('.',$fileName)));

$uploadPath =$uploadDirectory . basename($fileName);

if (isset($_POST['submit'])) {


    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "An error occurred somewhere. Try again or contact the admin";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Upload a File:
    <input type="file" name="file" id="fileToUpload">
    <input type="submit" name="submit" value="Upload File Now" >
</form>
</body>
</html>
