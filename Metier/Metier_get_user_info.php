<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 05:37
 */


require(dirname( __DIR__).'./Dao/Dao_get_user_info.php');

function Metier_get_user_info(){

    return  Dao_get_user_info();
}
