<?php
include '../db_config.php'; 
$id_pt=$_GET['id']; 
$nama_pt = $_POST['nama_pt']; $alamat_pt = $_POST['alamat_pt']; $kode_pos = $_POST['kode_pos'];$akreditasi_pt = $_POST['akreditasi_pt']; $telp = $_POST['telp']; $email = $_POST['email']; $website = $_POST['website']; $skpt = $_POST['skpt']; $tanggal_skpt = $_POST['tanggal_skpt']; $date_pt = $_POST['date_pt']; $id_kategori = $_POST['id_kategori']; $x = $_POST['x']; $y = $_POST['y']; 
	$sql = "update pt set nama_pt='$nama_pt',alamat_pt='$alamat_pt', kode_pos='$kode_pos', akreditasi_pt='$akreditasi_pt', telp='$telp', email='$email', website='$website', skpt='$skpt', tanggal_skpt='$tanggal_skpt', date_pt='$date_pt', id_kategori='$id_kategori', x='$x', y='$y' where id_pt='$id_pt' "; 
if (mysqli_query($conn, $sql)){ $info='s'; } else { $info='g'; } header('location: ../../index.php?pages=pt&info='.$info.''); ?>