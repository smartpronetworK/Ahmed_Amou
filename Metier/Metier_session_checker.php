<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 07/04/2018
 * Time: 09:16
 */

session_start();
if(empty($_SESSION))
{
    header("Location: ../Web/views/index.php");
}
//require('../Web/views/index.php');