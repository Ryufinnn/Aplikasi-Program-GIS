<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from kategori where id_kategori='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=kategori&info='.$info.'');
?>