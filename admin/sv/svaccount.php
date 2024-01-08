<?php
session_start();
include '../db_config.php';
$ac=$_GET['ac'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$nama = $_POST['nama'];
$id_pt = $_POST['id_pt'];
$level = $_POST['level'];
$sql_cek = "select * from account where username='$username' ";
$rst_cek = mysqli_query($conn, $sql_cek);
if ($rst_cek->num_rows>0){
	header('locaton: ../../index.php?pages=acaccount&info=d');
} else {
	if ($ac=='add') {
		$sql="insert into account (username, password, nama, id_pt, level) value ('$username', '$password', '$nama', '$id_pt', '$level') ";
	} else {
		$sql = "update account set username='$username', password='$password', nama='$nama', id_pt='$id_pt', level='$level' ";
	}
	if(mysqli_query($conn, $sql)){
		$info='s';
	} else {
		$info='g';
	}
	header('location: ../../index.php?pages=account&info='.$info.'');
}
?>