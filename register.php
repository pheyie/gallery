<?php
include 'dbconnect.php';

try {
	$sql='INSERT INTO users
		(firstname,lastname,username,password,gender,location) 
	   Values(:firstname,:lastname,:username,:password,:gender,:location)';
		
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname,'username'=>$username,'password'=>$password,'gender'=>$gender,'location'=>$location]);
			echo "added";
                 
} catch (Exception $e) {
	$e->getMessage();

}


