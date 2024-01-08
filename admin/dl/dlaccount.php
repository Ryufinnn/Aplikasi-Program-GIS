<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from account where username='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=account&info='.$info.'');
?>