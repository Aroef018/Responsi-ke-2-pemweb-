<?php
	include("koneksi.php");
	session_start();

	$username_musuh=$_GET['musuh'];
	$sql="SELECT * FROM users WHERE username='$username_musuh'";
	$result=mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$serang_musuh=$row['serang'];
	
	$serang_musuh++;

	$sql="UPDATE users SET serang='$serang_musuh' WHERE username='$username_musuh'";
	$result=mysqli_query($conn, $sql);

	header("location: admin-serang.php?musuh=$username_musuh");
?>