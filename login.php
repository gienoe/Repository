<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

echo "your username is: " . $user;
echo "your password is: " . $pass;
?>

<html>

	<head>
	
	</head>
	
	<body>
	
	<form action="login.php" method="post">
	
		
	
		<b>Username</b><br/>
		<input type="username" name="user" /><br/>
		<b>Password</b><br/>
		<input type="password" name="pass" />
		<input type="submit" value="Login"/>
	
		
	</form>
	
	
	</body>
	
</html>

<?php
if ($user = "admin" && $pass = "1234"){
	echo "Success";
}
else{
	echo "fail to login";
}

?>