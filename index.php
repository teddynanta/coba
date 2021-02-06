<?php 
	session_start();
	if (empty($_SESSION['logged_in'])) {
		header('Location : login.php?action=not_yet_logged_in');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Berhasil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		$action=$_GET['action'];
		if ($action=='logout') {
			session_destroy();
			header('Location:login.php');
		}
		elseif ($action=='already_logged_in') {
			echo "<div id ='infoMessage'>Anda Sudah Login.</div>";
		}
	?>
	<div id="successMessage">Anda Berhasil Login.</div>
	<div id="actions"><a href="index.php?action=logout">Logout?</a>|<a href="login.php">Pergi ke Halaman Login</a></div>
</body>
</html>