<?php
	session_start();
	include 'db_conn.php';
	if(isset($_POST['button'])){
		if(isset($_POST['usrnm'])){
			if(isset($_POST['pwd'])){
				DB::query('INSERT INTO test_table (username, pswrd) VALUES (:usrnm, :pwd)', array(':usrnm'=>$_POST['usrnm'], ':pwd'=>$_POST['pwd']));
			}else{
				echo 'Please enter a password.';
			}
		}else{
			echo 'Please enter a username.';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Make a new Account</title>
</head>
<body>
<form action="join.php" method="post">
	Username:  <input type="text" name="usrnm">
	<br>
	<br>
	Password:  <input type="password" name="pwd">
	<br>
	<br>

	<button type="submit" value = 'submit' name = 'button'>Submit</button>
</form>

</body>
</html>