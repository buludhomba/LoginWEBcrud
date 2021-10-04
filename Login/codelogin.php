<?php
	include 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$getTable = mysqli_query($koneksi, "SELECT * FROM login");
	$getDataLogin = mysqli_fetch_array($getTable);
	if ($username == "" || $password == "") {
		echo "
			<script>
				alert('Tolong lengkapi username dan password untuk melanjutkan login!');
				document.location = 'HalamanSella.php';
			</script>
		";
	}
	else if ($username == $getDataLogin['username'] && $password == $getDataLogin['password']) {
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;

		echo "
			<script>
				alert('Selamat! Anda telah berhasil login.');
				document.location = 'home.php';
			</script>
		";
	}
	else {
		echo "
			<script>
				alert('username atau password yang Anda masukkan salah!');
				document.location = 'HalamanSella.php';
			</script>
		";
	}
?>