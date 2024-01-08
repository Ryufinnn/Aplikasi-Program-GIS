<?php
include '../db_config.php';
$ac=$_GET['ac'];
$nama_jenjang=$_POST['nama_jenjang'];
if ($ac=='add') {
	$sql = "insert into jenjang (nama_jenjang) values ('$nama_jenjang') ";
} else {
	$id_jenjang=$_GET['id'];
	$sql = "update jenjang set nama_jenjang='$nama_jenjang' where id_jenjang='$id_jenjang' ";
}
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info='g';
}
//echo "$sql";
header('location: ../../index.php?pages=jenjang&info='.$info.'');
?>