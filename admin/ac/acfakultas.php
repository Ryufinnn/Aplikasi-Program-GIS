<?php
$ac=$_GET['ac'];
$idpt = $_GET['idpt'];
if ($ac=='add'){
	$id_fakultas=''; $nama_fakultas=''; $h3='Tambah Fakultas';
} else {
	$id_fakultas=$_GET['id'];
	$sql_pt = "select * from fakultas where id_fakultas='$id_fakultas' ";
	$rst_pt = mysqli_query($conn, $sql_pt);
	$row_pt = mysqli_fetch_assoc($rst_pt);
	$nama_fakultas = $row_pt['nama_fakultas'];
	$action='';
	$h3='Edit '.$nama_fakultas; } ?>
<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>

<h3><?=$h3;?></h3>
<form method='post' action='admin/sv/svview.php?idpt=<?=$idpt;?>&id=<?=$id_fakultas;?>&ac=<?=$ac;?>'>
<div class='row'>
<div class='col-md-3'>Kode Fakultas</div>
<div class='col-md-5'><input type='text' name='id_fakultas' value='<?=$id_fakultas;?>' class="" maxlength="5" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Nama Fakultas</div>
<div class='col-md-5'><input type='text' name='nama_fakultas' value='<?=$nama_fakultas;?>' class="" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'></div>
<div class='col-md-5'><button type='submit' class='btn btn-primary btn-sm'>Simpan</button></div>
</div>
</form>