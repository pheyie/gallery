<?php
include 'control.php';

$host ='localhost';
$user = 'root';
$db_password ='';
$dbname = 'users';

try {
	$dsn ='mysql:host='.$host.';dbname='.$dbname;
$pdo= new PDO($dsn,$user,$db_password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
} catch (Exception $e) {
	$e->getMessage();
	
}


	
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            