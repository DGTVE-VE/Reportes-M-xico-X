<?php
session_start();
require_once './constantes.php';
require_once './autoload.php';
$_SESSION[CONFIG] = parse_ini_file("config.ini", true);
$controller = new SimpleFrontController();
print 'index';
//$controller->run();
