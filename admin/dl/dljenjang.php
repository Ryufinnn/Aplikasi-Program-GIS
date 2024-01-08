<?php
include '../db_config.php';
$id=$_GET['id'];
$sql = "delete from jenjang where id_jenjang='$id' ";
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info ='g';
}
header('location: ../../index.php?pages=jenjang&info='.$info.'');
?>