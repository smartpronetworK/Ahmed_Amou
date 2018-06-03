<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 25/10/17
 * Time: 19:05
 */



/* logging */

require(dirname(__DIR__).'./logging/log4php/Logger.php');
Logger::configure(dirname(__DIR__).'./config.properties');
$log = Logger::getLogger('myLogger');





