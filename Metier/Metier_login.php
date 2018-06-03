<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 14/11/17
 * Time: 13:58
 */

require(dirname( __DIR__).'./Dao/Dao_login.php');

function Metier_login(){
global  $log ;

    $log->info("name  : ".$_POST['user']);
    $log->info("pass  : ".$_POST['pass']);



    echo Dao_login($_POST['user'], $_POST['pass']) ;
   // echo Dao_login('user', '123') ;
}

Metier_login();