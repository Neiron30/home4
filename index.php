<?php
require_once 'myHandler.php';
ini_set('session.serialize_handler', 'php_serialize');
$mySession = new myHandler();
$maxlifetim = ini_get("session.gc_maxlifetime");

session_set_save_handler($mySession, true);
session_start();



$_SESSION['name'] = 'Borya';
$_SESSION['age'] = 25;


session_write_close();

echo 12;

// В своем примере я не использовал функцию  gc, так как в своем примере я изпользовал изменение в файле php.ini
// так я поставил 86400
// если мы выведем при помощи echo , то оно покажет количество времени