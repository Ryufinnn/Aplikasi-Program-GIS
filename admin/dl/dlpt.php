<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from pt where id_pt='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=pt&info='.$info.'');
?>