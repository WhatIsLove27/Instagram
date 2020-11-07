<?php  
	$connect= mysqli_connect("127.0.0.1","root","","instagram");
	$text_zaprosa_vstavit = "INSERT INTO posts (user, img, texts) 
							 VALUES ('".$_GET['user']."','".$_GET['img']."','".$_GET['texts']."')"; 
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: http://urok25/index.php');
	exit();
?>