<?php

//konštanta
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'projekt_final',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('classes/Menu.php');
require_once('classes/Page.php');
require_once('classes/Database.php');
require_once('classes/Contact.php');
require_once('classes/Portfolio.php');
require_once('classes/User.php');

session_start();
?>