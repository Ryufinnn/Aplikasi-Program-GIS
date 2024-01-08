<?php
include '../db_config.php';
$ac=$_GET['ac'];
$nama_asal=$_POST['nama_asal'];
$x=$_POST['x'];
$y=$_POST['y'];
if ($ac=='add') {
	$sql = "insert into jalur (nama_asal, x, y) values ('$nama_asal','$x','$y') ";
} else {
	$id_jalur=$_GET['id'];
	$sql = "update jalur set nama_asal='$nama_asal', x='$x',y='$y' where id_jalur='$id_jalur' ";
}
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info='g';
}
//echo "$sql";
header('location: ../../index.php?pages=dbjalur&info='.$info.'');
?>