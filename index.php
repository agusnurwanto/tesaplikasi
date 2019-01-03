<?php
include 'functions.php';

if(empty($_SESSION['login'])){
	redirect(array('url' => '/login.php'));
}else{
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda Tes Kominfo</title>
	<style type="text/css">
		body {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Berhasil login</h1>
	<h2>Selamat datang <?php echo $_SESSION['fullname']; ?></h2>
	<a href="<?php echo $site_url; ?>/?logout=1">Logout</a>
</body>
</html>
	<?php
}