<?php
include '../db_config.php';
$ac=$_GET['ac'];
$nama_kategori=$_POST['nama_kategori'];
if ($ac=='add') {
	$sql = "insert into kategori (nama_kategori) values ('$nama_kategori') ";
} else {
	$id_kategori=$_GET['id'];
	$sql = "update kategori set nama_kategori='$nama_kategori' where id_kategori='$id_kategori' ";
}
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info='g';
}
//echo "$sql";
header('location: ../../index.php?pages=kategori&info='.$info.'');
?>