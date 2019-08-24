<!DOCTYPE html>
<?php
	session_start();
	include_once('db_conn.php');
?>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>
<form action="email.php" method="post">
	Username: <input type="text" name="username">
	<br>
	<br>
	New Password: <input type="password" name="nueva" onkeypress="update()">
	<br>
	<br>

	<button type="submit" value = 'submit' name = 'button'>Submit</button>
</form>
<?php

	if (isset($_POST['button'] ) ){
		$username = $_POST['username'];
		$password = $_POST['nueva'];
		
		if (isset($username)){
			if (isset($password)){
				DB::query('UPDATE test_table SET pswrd=pwd WHERE username=usrnm', array('pwd'=>$password, 'usrnm'=>$username));
				header('Location: home_page.php');
			} else{
				echo 'You must enter a new password';
			}
		} else{
			echo 'You must enter your username';
		}
	
}
?>
</body>
</html>