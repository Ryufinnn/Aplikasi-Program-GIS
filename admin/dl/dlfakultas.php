<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from fakultas where id_fakultas='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=fakultas&info='.$info.'');
?>