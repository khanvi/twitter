<?php 
	$connect = mysqli_connect('127.0.0.1','root','','hv');
	$delete = "DELETE FROM tweet WHERE id = '". $_POST['id'] ."'";
	$result = mysqli_query($connect, $delete);
	header('Location: http://HV/twitter/28/index.php');
?>