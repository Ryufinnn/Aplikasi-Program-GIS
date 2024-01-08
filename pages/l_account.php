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
?><center><h2>Laporan Account</h2></center>
<?php
if ($print=='f') {
	?><a href="pages/l_account.php?print=true" target="_blank"><button class="btn btn-primary btn-sm">Print</button></a><br> <?php
}
$sql_k = "select * from account, pt where account.id_pt=pt.id_pt order by username ";
$rst_k = mysqli_query($conn, $sql_k);
if ($rst_k->num_rows>0) {
	$no=0;
	?><table class="table table-condensed table-striped">
		<tr class="info"><th>No.</th><th>Username</th><th>Nama account</th><th>Perguruan Tinggi</th></tr>
		<?php
while ($row_k=mysqli_fetch_assoc($rst_k)) {
	$no++;
	$username=$row_k['username'];
	$nama=$row_k['nama'];
	$nama_pt=$row_k['nama_pt'];
	?><tr><td><?=$no;?></td><td><?=$username;?></td><td><?=$nama;?></td><td><?=$nama_pt;?></td></tr><?php
}
		?>
	<tr><td colspan="5" align="right"><?=$now;?></td></tr>
	</table> <?php
}
?>
<?php
if ($print=='t') {
	?></body>
</html><?php
}
?>