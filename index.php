<?php

header("Content-type:text/html;charset=utf-8");

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//define('APP_STATUS','home');

define('DIR_SECURE_FILENAME', 'default.html');

//define('BIND_MODULE','Admin');

define('APP_DEBUG',true);
define('APP_PATH','./Application/');

require './ThinkPHP/ThinkPHP.php';