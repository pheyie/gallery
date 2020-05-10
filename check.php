<?php
include 'dbconnect.php';


$username="adesho";
try {
	$check = 'SELECT * FROM users Where username =:username';
	$stmt =$pdo->prepare($check);
	$stmt->execute(['username'=>$username]);
	$results= $stmt->fetchAll();

		foreach ($results as $results) {
			echo $results->username.'<br>';
			# code...
		}

	
} catch (Exception $e) {
		$e->getMessage();

}