<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 07/04/2018
 * Time: 10:00
 */
require(dirname( __DIR__).'./Dao/Dao_submit_post.php');

function Metier_submit_post(){
   global  $log ;

    $log->info("post : ".$_POST['post']);

    Dao_submit_post($_POST['post']) ;

}
Metier_submit_post();
