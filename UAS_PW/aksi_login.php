<?php
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' and password = '$password'");
	
	$cek = mysqli_num_rows($query);
	
	if($cek == TRUE){
		$_SESSION['username'] = $username;
		header ("location:home.php");
	}
	else {
		echo "<script>alert('password atau username salah');history.go(-1);</script>";
	}

?>