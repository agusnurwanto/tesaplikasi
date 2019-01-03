<?php
include 'functions.php';

$msg = array();
if(!empty($_POST)){
	if(empty($_POST['username'])){
		$msg[] = 'Username belum diisi';
	}
	if(empty($_POST['password'])){
		$msg[] = 'Password belum diisi';
	}
	if(empty($msg)){
		$pass = md5($_POST['password']);
		$db = connect();
		$result = pg_query($db, "SELECT * FROM kom_user where username='".pg_escape_string($_POST['username'])."' and password='".pg_escape_string($pass)."'");
		while ($data = pg_fetch_array($result)) {
			if(!empty($data)){
				$_SESSION['id'] = $data['id'];
				$_SESSION['fullname'] = $data['fullname'];
				$_SESSION['username'] = $data['username'];
				$_SESSION['login'] = 1;
				redirect(array('url' => '/index.php'));
			}
		}	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login tes kominfo</title>
	<style type="text/css">
		body {
			text-align: center;
		}
		.msg {
			color: red;
			margin: 10px;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<?php
	if(!empty($msg)){
		echo '<div class="msg">'.implode('<br>', $msg).'</div>';
	}
	?>
	<form action="" method="post" autocomplete="off">
		<input type="text" name="username" placeholder="username" autocomplete="off">
		<br>
		<br>
		<input type="password" name="password" placeholder="password" autocomplete="off">
		<br>
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>