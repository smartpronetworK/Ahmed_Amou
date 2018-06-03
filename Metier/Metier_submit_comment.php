<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 08/04/2018
 * Time: 06:04
 */




require(dirname( __DIR__).'./Dao/Dao_submit_comment.php');
function Metier_submit_comment(){
    global  $log ;

   $log->info("comment : ".$_POST['comment']);
    $log->info("id_post : ".$_POST['id_post']);
    $log->info("iduser : ".$_POST['iduser']);

   echo Dao_submit_comment($_POST['comment'],$_POST['id_post'],$_POST['iduser']) ;

}
Metier_submit_comment();