<h3>Perguruan Tinggi</h3>
<?php
if ($s_level=='1') { ?><a href="index.php?pages=acpt&ac=add"><button class="btn btn-success btn-sm">Tambah</button></a><?php } ?>
<?php
if ($s_level=='2') {
	$sql0="select id_pt from account where username='$s_username' ";
	$rst0=mysqli_query($conn, $sql0);
	$row0=mysqli_fetch_assoc($rst0);
	$id_pt0=$row0['id_pt'];
	$sql01= "where id_pt='".$id_pt0."' ";
}
else {
	$sql01='';
}
$sql_pt = "select * from pt ".$sql01."order by nama_pt"; $rst_pt = mysqli_query($conn, $sql_pt);
	if ($rst_pt->num_rows==0) {
		?><div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-4">
		<div class='alert alert-warning'>
  <a href="#" class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Tidak Ada Data</strong>
</div>
	</div>
</div><?php
	} else {
		$no=0;
		?>
<table class="table table-striped table-condensed">
	<tr>
	<th>No</th><th>Nama Perguruan Tinggi</th><th>Photo</th><?php if ($acc=='t') { ?><th>Actions</th><?php } ?> </tr>
	<?php
while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
	$no++;
	$id_pt=$row_pt['id_pt'];
	$nama_pt = $row_pt['nama_pt'];
	//$alamat_pt = $row_pt['alamat_pt'];
	$gambar = $row_pt['gambar'];
	/*$sql_fk = "select nama_fakultas from fakultas where id_pt='$id_pt' order by nama_fakultas ";
	$rst_fk = mysqli_query($conn, $sql_fk);
	$fk='';
	while ($row_fk=mysqli_fetch_assoc($rst_fk)) {
		$nama_fakultas=$row_fk['nama_fakultas'];
		$fk .=$nama_fakultas.', ';
	}
	$sql_p = "select nama_prodi, nama_jenjang from prodi, jenjang where id_pt='$id_pt' order by nama_prodi ";
	$rst_p = mysqli_query($conn, $sql_p);
	$p = '';
	while ($row_p=mysqli_fetch_assoc($rst_p)){
		$nama_prodi=$row_p['nama_prodi'];
		$nama_jenjang=$row_p['nama_jenjang'];
		$p .= $nama_prodi.' ('.$nama_jenjang.'), ';
	}
	$sql_fs = "select nama_fasilitas from fasilitas where id_pt='$id_pt' ";
	$rst_fs = mysqli_query($conn, $sql_fs);
	$fs ='';
	while ($row_fs=mysqli_fetch_assoc($rst_fs)) {
		$nama_fasilitas = $row_fs['nama_fasilitas'];
		$fs .= $nama_fasilitas.',';
	} */
	?>
<tr><td><?=$no;?></td><td><a href="index.php?pages=view&id=<?=$id_pt;?>"><strong><?=$nama_pt;?></strong></a></td><td><img src="images/pt/<?=$gambar;?>" width="200" class="img-rounded"></td><?php if ($acc=='t') { ?><td><a href="index.php?pages=view&id=<?=$id_pt;?>"><button class='btn btn-primary btn-xs'>Lihat Detail</button></a> <a href="index.php?pages=acpt&ac=edit&id=<?=$id_pt;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_pt;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a> </td><?php } ?></tr> <?php if ($acc=='t') { ?><div id="mod_remove_<?=$id_pt;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_pt;?></strong> <a href="admin/dl/dlpt.php?id=<?=$id_pt;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php } ?> <?php } ?>
</table>
		<?php
	}
	?>