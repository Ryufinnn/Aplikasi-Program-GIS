<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from fasilitas where id_fasilitas='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=fasilitas&info='.$info.'');
?>