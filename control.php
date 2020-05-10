<?php
	#collecting data from form
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$username= $_POST['username'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$gender= $_POST['gender'];
$location= $_POST['location'];

echo $location;
echo $firstname;

	
// 	#making sure all fields are filled
// function check_fields(){
// 	if(isset($_POST['submit']) && !empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($password2) && !empty($gender) && !empty($location) ){
// 		return true;

// 		}
// 		else{
// 			return false;
// 		}
// }


// 	#check if password and password2 rae d same
// function does_password_match($password,$password2){
// 	if ($password === $password2) {
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }



?>