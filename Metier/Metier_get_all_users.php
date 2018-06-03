<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 03/05/2018
 * Time: 09:29
 */

require(dirname( __DIR__).'./Dao/Dao_get_all_users.php');
function Metier_get_all_users(){

    global  $log ;

    return  Dao_get_all_users();
}
Metier_get_all_users();