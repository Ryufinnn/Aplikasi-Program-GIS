<?php
$idpt='';
if ($s_level=='1'){
	if(isset($_REQUEST['idpt'])){ $idpt=$_REQUEST['idpt']; }  else { $idpt=''; }
	$sql_pt = "select * from pt order by nama_pt ";
	$rst_pt = mysqli_query($conn, $sql_pt);
	?><div class="row">
		<div class="col-md-3"><select onChange="document.location.href=this.options[this.selectedIndex].value; " class="form-control">
			<option value="#">Pilih Perguruan Tinggi</option>
			<?php
while ($row_pt = mysqli_fetch_assoc($rst_pt)) {
	$id_pt = $row_pt['id_pt'];
	$nama_pt = $row_pt['nama_pt'];
	?><option value="index.php?pages=fasilitas&idpt=<?=$id_pt;?>" <?php if ($id_pt==$idpt) { ?>selected<?php } ?>><?=$nama_pt;?></option><?php
}
			?>
		</select></div>
	</div><?php
} else {
	$sql_pt = "select id_pt from account where username='$s_username' ";
	$rst_pt = mysqli_query($conn, $sql_pt);
	$row_pt = mysqli_fetch_assoc($rst_pt);
	$idpt = $row_pt['id_pt'];
}
if ($idpt!=''){
	$sql_pt1 = "select nama_pt from pt where id_pt='$idpt' ";
	$rst_pt1 = mysqli_query($conn, $sql_pt1);
	$row_pt1 = mysqli_fetch_assoc($rst_pt1);
	$h3 = $row_pt1['nama_pt'];
	$sql_f = "select * from fasilitas where id_pt='$idpt' ";
	$rst_f = mysqli_query($conn, $sql_f);
	$no=0;
	?>
	<h3>Fasilitas <?=$h3;?></h3>
	<?php if ($acc=='t') { ?><a href="index.php?pages=acfasilitas&ac=add"><button class="btn btn-success btn-sm">Tambah Fasilitas</button></a><?php } ?> <button onclick="goBack()" class="btn btn-warning btn-sm">Kembali</button>
<table class="table table-condensed table-striped">
	<tr><th>No.</th><th>Nama Fasilitas</th><?php if ($acc=='t') { ?><th>Options</th><?php } ?></tr>
	<?php while ($row_f=mysqli_fetch_assoc($rst_f)) {
		$id_fasilitas = $row_f['id_fasilitas'];
		$nama_fasilitas = $row_f['nama_fasilitas'];
		$no++;
		?><tr><td><?=$no;?></td><td><?=$nama_fasilitas;?></td><?php if($acc=='t') { ?><td><a href="index.php?pages=acfasilitas&idpt=<?=$idpt;?>&ac=edit&id=<?=$id_fasilitas;?>"><button class='btn btn-success btn-xs'>Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_fasilitas;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a></td><?php } ?></tr> <?php
		if ($acc=='t') {
		?><div id="mod_remove_<?=$id_fasilitas;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_fasilitas;?></strong> <a href="admin/dl/dlfasilitas.php?id=<?=$id_fasilitas;?>&idpt=<?=$idpt;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php
	}
	} ?>
</table>
	<?php
}
?>