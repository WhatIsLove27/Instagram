<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagram');
	$UPDATE = mysqli_query($connect , "UPDATE posts SET texts = '". $_GET['texts'] ."',
	 img = '". $_GET['img'] ."'    WHERE id = '".$_GET['id']."' ");
	header('Location: http://urok25/index.php');
	exit();
?>