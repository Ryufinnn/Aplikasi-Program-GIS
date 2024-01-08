<?php
if (!isset($_GET['idk'])) {
	?>
<div class="row">
	<div class="col-md-3"><strong>Pilih Kategori</strong></div>
	<div class="col-md-3">
		<?php
$sql_k = "select * from kategori order by nama_kategori ";
$rst_k = mysqli_query($conn, $sql_k);
		?><select name="id_kategori" onChange="document.location.href=this.options[this.selectedIndex].value; ">
		<option value='#'>Pilih</option>
	<?php
while ($row_k=mysqli_fetch_assoc($rst_k)) {
	$id_kategori1 = $row_k['id_kategori'];
	$nama_kategori = $row_k['nama_kategori'];
	?><option value="index.php?pages=l_kt&idk=<?=$id_kategori1;?>" ><?=$nama_kategori;?></option><?php
}
	?>
</select>
	</div>
</div>
	<?php
} else {
	if (isset($_GET['print'])) {
	$print='t';
	include '../admin/db_config.php';
} else {
	$print='f';
}
$idk=$_GET['idk'];
$sql_k1="select nama_kategori from kategori where id_kategori='$idk' ";
$rst_k1=mysqli_query($conn, $sql_k1);
$row_k1=mysqli_fetch_assoc($rst_k1);
$nama_kategori1=$row_k1['nama_kategori'];
$now = date('d M Y');

?>
<?php
if ($print=='t') {
	include '../admin/db_config.php';
	?><!DOCTYPE html>
<html>
<head>
	<title>GIS</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body onload="window.print()"><?php
}
?><center><h2>Laporan Perguruan Tinggi Kategori <?=$nama_kategori1;?></h2></center>
<?php
if ($print=='f') {
	?><a href="pages/l_kt.php?idk=<?=$idk;?>&print=true" target="_blank"><button class="btn btn-primary btn-sm">Print</button></a><br> <?php
}
$sql_kt = "select * from pt where id_kategori='$idk' order by nama_pt "; $rst_pt = mysqli_query($conn, $sql_kt);
if ($rst_pt->num_rows>0) {
	$no=0;
	?><table class="table table-condensed table-striped">
		<tr class="info"><th>No</th><th>Kategori</th><th>Nama Perguruan Tinggi</th><th>Akreditasi</th><th>Fakultas</th><th>Prodi</th><th>Fasilitas</th></tr>
		<?php
while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
	$no++;
	$id_pt=$row_pt['id_pt'];
	$nama_pt = $row_pt['nama_pt'];
	$akreditasi_pt = $row_pt['akreditasi_pt'];
	$fk='';
	$sql_fk = "select * from fakultas where id_pt='$id_pt' ";
	$rst_fk = mysqli_query($conn, $sql_fk);
	while ($row_fk = mysqli_fetch_assoc($rst_fk)) {
		$nama_fakultas=$row_fk['nama_fakultas'];
		$fk.=$nama_fakultas.', ';
	}
	$pr='';
	$sql_pr = "select nama_prodi, nama_jenjang from prodi, jenjang where prodi.id_jenjang=jenjang.id_jenjang and id_pt='$id_pt' ";
	$rst_pr = mysqli_query($conn, $sql_pr);
	while ($row_pr = mysqli_fetch_assoc($rst_pr)) {
		$nama_prodi=$row_pr['nama_prodi'];
		$nama_jenjang=$row_pr['nama_jenjang'];
		$pr.=$nama_prodi.' ('.$nama_jenjang.'), ';
	}
	$fs='';
	$sql_fs = "select nama_fasilitas from fasilitas where id_pt='$id_pt' ";
	$rst_fs = mysqli_query($conn, $sql_fs);
	while ($row_fs = mysqli_fetch_assoc($rst_fs)) {
		$nama_fasilitas=$row_fs['nama_fasilitas'];
		$fs=$fs.''.$nama_fasilitas.', ';
	}
	?>
<tr><td><?=$no;?></td><td><?=$nama_kategori1;?></td><td><strong><?=$nama_pt;?></strong></td><th><?=$akreditasi_pt;?></th><td><?=$fk;?></td><td><?=$pr;?></td><td><?=$fs;?></td><tr><?php
}
		?>
	<tr><td colspan="6" align="right"><?=$now;?></td></tr>
	</table> <?php
}
?>
<?php
if ($print=='t') {
	?></body>
</html><?php
}
	
}
?>