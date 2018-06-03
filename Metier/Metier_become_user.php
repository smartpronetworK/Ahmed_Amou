<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/05/2018
 * Time: 18:20
 */

require(dirname( __DIR__).'./Dao/Dao_become_user.php');


function Metier_become_user(){

      Dao_become_user($_POST['name'],$_POST['email'],$_POST['tel'],$_FILES,$_POST['account_type']);


}
Metier_become_user();