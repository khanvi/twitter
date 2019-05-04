<?php 
	$connect = mysqli_connect('127.0.0.1','root','','hv');
	mysqli_query($connect, "INSERT INTO tweet( title, text, logo, img) VALUES ('Mary Smith @Maryss','" . $_POST['post_text'] . "', 'images/avatar.jpg','images/avatar.jpg')");
	header('Location: http://HV/twitter/28/index.php');
 ?>