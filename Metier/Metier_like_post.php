<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 21/04/2018
 * Time: 13:04
 */


require(dirname( __DIR__).'./Dao/Dao_like_post.php');

function Metier_like_post(){

    return Dao_like_post($_POST['id_user'],$_POST['id_post'],$_POST['number_of_like']);
}
Metier_like_post();

