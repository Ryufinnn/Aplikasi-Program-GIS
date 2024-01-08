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
?><center><h2>Laporan Data Pencarian Lokasi Perguruan Tinggi Swasta</h2></center>
<?php
if ($print=='f') {
	?><a href="pages/l_co.php?print=true" target="_blank"><button class="btn btn-primary btn-sm">Print</button></a><br> <?php
}
$sql_co = "select * from pt order by nama_pt "; $rst_pt = mysqli_query($conn, $sql_co);
if ($rst_pt->num_rows>0) {
	$no=0;
	?><table class="table table-condensed table-striped">
		<tr class="info"><th>No</th><th>Nama Perguruan Tinggi</th><th>Alamat</th><th>Kode Pos</th><th>Langitude</th><th>Longitude</th></tr>
		<?php
while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
	$no++;
	$id_pt=$row_pt['id_pt'];
	$nama_pt = $row_pt['nama_pt'];
	$alamat_pt = $row_pt['alamat_pt'];
	$kode_pos = $row_pt['kode_pos'];
	$x = $row_pt['x'];
	$y = $row_pt['y'];
	?>
<tr><td><?=$no;?></td><td><a href="index.php?pages=view&id=<?=$id_pt;?>"><strong><?=$nama_pt;?></strong></a></td><td><?=$alamat_pt;?></td><td><?=$kode_pos;?></td><td><?=$x;?></td><td><?=$y;?></td><tr><?php
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
?>