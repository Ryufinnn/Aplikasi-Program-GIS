<?php
include '../db_config.php';
$ac=$_GET['ac'];
$nama_fasilitas=$_POST['nama_fasilitas'];
$idpt=$_GET['idpt'];
if ($ac=='add') {
	$sql = "insert into fasilitas (id_pt, nama_fasilitas) values ('$idpt', '$nama_fasilitas') ";
} else {
	$idf=$_GET['idf'];
	$sql = "update fasilitas set nama_fasilitas='$nama_fasilitas' where id_fasilitas='$idf' ";
}
if (mysqli_query($conn, $sql)){
	$info='s';
} else {
	$info='g';
}
//echo "$sql";
header('location: ../../index.php?pages=fasilitas&info='.$info.'');
?>