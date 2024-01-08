<?php
if ($s_level=='1') {
	if (isset($_GET['idpt'])) {
		$idpt=$_GET['idpt'];
		$sql_p = "select nama_pt from pt where id_pt='$idpt' ";
		$rst_p = mysqli_query($conn, $sql_p);
		$row_p = mysqli_fetch_assoc($rst_p);
		$nama_pt0 = $row_p['nama_pt'];
	} else {
		$idpt='';
		$nama_pt0='';
	}
	?><div class="row">
		<div class="col-md-3"><select onChange="document.location.href=this.options[this.selectedIndex].value; " class="form-control">
			<option value="#">Pilih Perguruan Tinggi</option>
			<?php $sql_pt = "select * from pt order by nama_pt "; $rst_pt = mysqli_query($conn, $sql_pt);
			while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
			 	$id_pt0=$row_pt['id_pt'];
			 	$nama_pt=$row_pt['nama_pt'];
			 	?><option value="index.php?pages=prodi&idpt=<?=$id_pt0;?>" <?php if ($id_pt0==$idpt) { ?>selected<?php } ?>><?=$nama_pt;?></option><?php
			 } ?>
		</select></div>
	</div> <?php
} else {
	$sql_p = "select account.id_pt, nama_pt from account, pt where account.id_pt=pt.id_pt and username='$s_username' ";
	$rst_p = mysqli_query($conn, $sql_p);
	$row_p = mysqli_fetch_assoc($rst_p);
	$idpt = $row_p['id_pt'];
	$nama_pt0 = $row_p['nama_pt'];
}
$sql_p = "select * from pt, prodi, jenjang where prodi.id_jenjang=jenjang.id_jenjang and prodi.id_pt=pt.id_pt and pt.id_pt='$idpt' order by nama_prodi ";
$rst_p = mysqli_query($conn, $sql_p);
$no=0;
?>
<h3><?=$nama_pt0;?></h3>
<?php if($acc=='t') { ?><a href="index.php?pages=acprodi&idpt=<?=$idpt;?>&ac=add"><button class='btn btn-primary btn-sm'>Tambah prodi</button></a> <?php } ?>
<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>
<div class="row">
	<div class="col-md-10">
<table class="table table-striped table-condensed">
<tr> <th>No</th><th>Nama Prodi</th><th>Akreditasi</th><th>Status</th><th>Jenjang</th><?php if($acc=='t') { ?><th>Options</th><?php } ?></tr>
	<?php
	//echo "$sql_prodi";
while ($row_prodi=mysqli_fetch_assoc($rst_p)) {
	$no++;
	$id_prodi = $row_prodi['id_prodi'];
	$nama_prodi = $row_prodi['nama_prodi'];
	$akreditasi = $row_prodi['akreditasi'];
	$status = $row_prodi['status'];
	if ($status=='1') { $status='Aktif'; } else { $status='Tidak Aktif'; } $nama_jenjang = $row_prodi['nama_jenjang'];
	?><tr><td><?=$no;?></td><td><?=$nama_prodi;?></td><td><?=$akreditasi;?></td><td><?=$status;?></td><td><?=$nama_jenjang;?></td> <?php if ($acc=='t') { ?><td><a href="index.php?pages=acprodi&ac=edit&idpt=<?=$idpt;?>&id=<?=$id_prodi;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_prodi;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a></td><?php } ?> </tr> <?php if($acc=='t') { ?><?php } ?><div id="mod_remove_<?=$id_prodi;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_prodi;?></strong> <a href="admin/dl/dlprodi.php?id=<?=$id_prodi;?>&idpt=<?=$idpt;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php
}
	?>
</table></div>
</div>