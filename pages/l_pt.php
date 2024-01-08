<?php
$now = date('d M Y');
if (isset($_GET['print'])) {
	$print='t';
} else {
	$print='f';
}
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
?><center><h2>Laporan Data Perguruan Tinggi Swasta</h2></center>
<?php
if ($print=='f') {
	?><a href="pages/l_pt.php?print=true" target="_blank"><button class="btn btn-primary btn-sm">Print</button></a><br> <?php
}
$sql_pt = "select pt.*, nama_kategori from pt, kategori where pt.id_kategori=kategori.id_kategori order by nama_pt"; $rst_pt = mysqli_query($conn, $sql_pt);
if ($rst_pt->num_rows>0) {
	$no=0;
	?><table class="table table-condensed table-striped table-bordered">
		<tr class="info"><th>No</th><th>Kategori</th><th>Nama Perguruan Tinggi</th><th>Akreditasi</th><th>Alamat</th><th>date_pt</th><th>SKPT</th><th>Tanggal SKPT</th><th>Langitude</th><th>Longitude</th><th>Prodi & Akreditasi</th></tr>
		<?php
while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
	$no++;
	$id_pt=$row_pt['id_pt'];
	$nama_kategori=$row_pt['nama_kategori'];
	$nama_pt = $row_pt['nama_pt'];
	$akreditasi_pt = $row_pt['akreditasi_pt'];
	$alamat_pt = $row_pt['alamat_pt'];
	$date_pt = $row_pt['date_pt'];
	$skpt = $row_pt['skpt'];
	$tanggal_skpt = $row_pt['tanggal_skpt'];
	$x = $row_pt['x'];
	$y = $row_pt['y'];
	$sql_fk = "select nama_fakultas from fakultas where id_pt='$id_pt' order by nama_fakultas ";
	$rst_fk = mysqli_query($conn, $sql_fk);
	$fk='';
	while ($row_fk=mysqli_fetch_assoc($rst_fk)) {
		$nama_fakultas=$row_fk['nama_fakultas'];
		$fk .=$nama_fakultas.', ';
	}
	$sql_p = "select nama_prodi, nama_jenjang, akreditasi,status from prodi, jenjang where prodi.id_jenjang=jenjang.id_jenjang and id_pt='$id_pt' order by nama_prodi ";
	$rst_p = mysqli_query($conn, $sql_p);
	$p = '';
	while ($row_p=mysqli_fetch_assoc($rst_p)){
		$nama_prodi=$row_p['nama_prodi'];
		$nama_jenjang=$row_p['nama_jenjang'];
		$akreditasi=$row_p['akreditasi'];
		$status=$row_p['status'];
		$p .= $nama_prodi.' ('.$nama_jenjang.') - '.$akreditasi.', ';
	}
	$sql_fs = "select nama_fasilitas from fasilitas where id_pt='$id_pt' ";
	$rst_fs = mysqli_query($conn, $sql_fs);
	$fs ='';
	while ($row_fs=mysqli_fetch_assoc($rst_fs)) {
		$nama_fasilitas = $row_fs['nama_fasilitas'];
		$fs .= $nama_fasilitas.',';
	}
	?>
<tr><td><?=$no;?></td><td><?=$nama_kategori;?></td><td><strong><?=$nama_pt;?></strong></td><td><?=$akreditasi_pt;?></td><td><?=$alamat_pt;?></td><td><?=$date_pt;?></td><td><?=$skpt;?></td><td><?=$tanggal_skpt;?></td><td><?=$x;?></td><td><?=$y;?></td><td><?=$p;?></td><tr><?php
}
		?>
	<tr><td colspan="10" align="right"><?=$now;?></td></tr>
	</table> <?php
}
?>
<?php
if ($print=='t') {
	?></body>
</html><?php
}
?>