<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "instagram");

	$text = "DELETE FROM posts WHERE id = '".$_GET['id']."' ";
	

	$zapros_vstavit = mysqli_query($connect, $text);
	header('Location: http://urok25/index.php');
	exit();
?>