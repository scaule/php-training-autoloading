<?php

define('ROOT', __DIR__ . DIRECTORY_SEPARATOR);
define('VENDOR', ROOT . 'vendor' . DIRECTORY_SEPARATOR);
 
require VENDOR . 'autoload.php';

use Model\User;
 
$user = new User();
