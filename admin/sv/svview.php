<?php
include '../db_config.php';
$ac=$_GET['ac']; $idpt=$_GET['idpt'];
$id_fakultas = $_POST['id_fakultas']; $nama_fakultas = $_POST['nama_fakultas'];
if ($ac=='add') {
	$sql="insert into fakultas (id_fakultas, nama_fakultas, id_pt) values ('$id_fakultas', '$nama_fakultas', '$idpt') ";
} else {
	$id=$_GET['id'];
	$sql = "update fakultas set id_fakultas='$id_fakultas', nama_fakultas='$nama_fakultas' ";
}
if (mysqli_query($conn, $sql)) {
	$info='s';
} else{
	$info='g';
}
header('location: ../../index.php?pages=view&id='.$idpt.'&info='.$info.'');
?>