<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 21/04/2018
 * Time: 12:20
 */



require(dirname( __DIR__).'./Dao/Dao_logout.php');
function Metier_logout(){
    global  $log ;

    $log->info("id user  : ".$_POST['id_user']);
    Dao_logout($_POST['id_user']);
}
Metier_logout();