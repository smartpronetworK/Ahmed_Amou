<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 10:26
 */
require(dirname( __DIR__).'./Dao/Dao_update_user_info.php');

function Metier_update_user_info(){

    echo Dao_update_user_info($_POST['tel'],$_POST['email'],$_FILES);

}
Metier_update_user_info();