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
			 	?><option value="index.php?pages=fakultas&idpt=<?=$id_pt0;?>" <?php if ($id_pt0==$idpt) { ?>selected<?php } ?>><?=$nama_pt;?></option><?php
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
$sql_f = "select fakultas.* from pt, fakultas where fakultas.id_pt=pt.id_pt and pt.id_pt='$idpt' order by nama_fakultas ";
$rst_f = mysqli_query($conn, $sql_f);
$no=0;
?><h3><?=$nama_pt0;?></h3>
<?php if($acc=='t') { ?><a href="index.php?pages=acfakultas&idpt=<?=$idpt;?>&ac=add"><button class='btn btn-primary btn-sm'>Tambah fakultas</button></a> <?php } ?>
<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>
<table class="table table-condensed table-striped">
	<tr><th>No.</th><th>Nama Fakultas</th><?php if ($acc=='t') { ?><th>Options</th><?php } ?></tr>
	<?php
while ($row_f=mysqli_fetch_assoc($rst_f)) {
	$no++;
	$id_fakultas=$row_f['id_fakultas'];
	$nama_fakultas=$row_f['nama_fakultas'];
	?><tr><td><?=$no;?></td><td><?=$nama_fakultas;?></td><td><?php if($acc=='t') { ?><a href="index.php?pages=acfakultas&idpt=<?=$idpt;?>&ac=edit&id=<?=$id_fakultas;?>"><button class='btn btn-success btn-xs'>Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_fakultas;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a><?php } ?></td>
	</tr><?php
	if ($acc=='t') {
		?><div id="mod_remove_<?=$id_fakultas;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_fakultas;?></strong> <a href="admin/dl/dlfakultas.php?id=<?=$id_fakultas;?>&idpt=<?=$idpt;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php
	}
}
	?>
</table>