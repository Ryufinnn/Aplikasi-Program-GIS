<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from prodi where id_prodi='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=prodi&info='.$info.'');
?>