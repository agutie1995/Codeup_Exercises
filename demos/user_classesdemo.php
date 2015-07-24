<?php

class User
{
	public $username;
	public $password;
	public $isAdministrator;

	public function tryLogin()
	{

	}

	public function logout()
	{

	}
	
}

if (!empty($_POST)){
	if(isset($_POST['username']) && isset($_POST['password'])){
		$someUser = new User();
		$someUser->username = $_POST['username'];
		$someUser->username = $_POST['password'];
		$someUser->tryLogin();
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="#" method="POST">
		<input type="text" name="username" autofocus>
		<input type="password" name="password">
	</form>

</body>
</html>