<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from jalur where id_jalur='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=dbjalur&info='.$info.'');
?>