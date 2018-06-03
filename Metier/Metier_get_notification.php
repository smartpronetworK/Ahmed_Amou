<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 09/04/2018
 * Time: 12:01
 */


require(dirname( __DIR__).'./Dao/Dao_get_All_notification.php');
function Metier_get_notification(){
    session_start();
    global  $log ;

    $log->info("call get_all_notifcation  id user ".$_SESSION['id']);
    echo  Dao_get_user_notification($_SESSION['id']);
}
Metier_get_notification();