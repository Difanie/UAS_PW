<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
	header("location:home.php");
?>


