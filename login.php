<?php 
	session_start();
	if ($_SESSION['logged_in']==true){
		header('Location : index.php?action=already_logged_in');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Script Login PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="loginForm">
		<?php 
			if ($_GET['action']=='not_yet_logged_in') {
				echo "<div id='infoMessage'>Anda Belum Login.</div>";
			}
			if ($_POST) {
				$username='admin';
				$password='admin';

				if ($_POST['username']==$username && $_POST['password']==$password) {
					$_SESSION['logged_in']=true;
					header('Location : index.php');
				}
				else{
					echo "<div id='failedMessage'>Akses Ditolak.</div>";
				}
			}
		?>

	<form action="login.php" method="post">
		<div id="formHeader">Login
			<div id="formBody">
				<div class="formField">
					<input type="text" name="username" placeholder="username">
				</div>
				<div class="formField">
					<input type="password" name="password" placeholder="password">
				</div>
				<div>
					<input type="submit" value="Login" class="customButton">
				</div>
			</div>
			<div id="userNotes">
				<div>Username : admin</div>
				<div>Password : admin</div>
				<div><a href="index.php">Pergi ke Halaman Utama</a></div>
			</div>
		</div>

	</form>
	</div>
</body>
</html>