<?php
include '../db_config.php';
$ac=$_GET['ac']; $idpt=$_GET['idpt'];
$id_prodi = $_POST['id_prodi']; $nama_prodi = $_POST['nama_prodi']; $akreditasi = $_POST['akreditasi']; $status = $_POST['status']; $id_jenjang = $_POST['id_jenjang'];
if ($ac=='add') {
	$sql="insert into prodi (id_prodi, nama_prodi, akreditasi, status, id_jenjang, id_pt) values ('$id_prodi', '$nama_prodi', '$akreditasi', '$status', '$id_jenjang', '$idpt') ";
} else {
	$id=$_GET['id'];
	$sql = "update prodi set id_prodi='$id_prodi', nama_prodi='$nama_prodi', akreditasi='$akreditasi', status='$status', id_jenjang='$id_jenjang' where id_prodi='$id' ";
}
if (mysqli_query($conn, $sql)) {
	$info='s'; } else { $info='g'; }
header('location: ../../index.php?pages=prodi&idpt='.$idpt.'&info='.$info.'');
?>