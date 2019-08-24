<!DOCTYPE html>
<?php
	session_start();
	include_once('db_conn.php');
?>
<html>

<head>
	<title>FamDat Login</title>
</head>

<body>
	<form action = "home_page.php" method="post">
		Username: <input type="text" name="username" class="usrnm">
		<br>

		Password:  <input type="password" name="password" class="pswrd">
		<br>
		
		<button type="submit" value="submit" name="button">Submit</button>
		<br>

		<p><a href="email.php">Forgot your password?</a></p>
		<p><a href="join.php">Make a new Account!</a></p>
	</form>

	<?php
		if (isset($_POST['button']) ){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql_esc_usr = mysqli_escape_string($db->login_conn(), $username);
			$sql_esc_pwd = mysqli_escape_string($db->login_conn(), $password);
			$row = DB::query('SELECT username, pswrd FROM test_table WHERE username=usrnm AND pswrd=pwd', array('usrnm'=>$sql_esc_usr, 'pwd'=>$sql_esc_pwd));
			echo var_dump($row);

			
		}
		


	?>
f
</body>

</html>