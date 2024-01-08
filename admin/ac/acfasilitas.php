<button onclick="goBack()">Kembali</button>
<?php
$idpt='';
$ac=$_GET['ac'];
if ($s_level=='1'){
	if(isset($_REQUEST['idpt'])){ $idpt=$_REQUEST['idpt']; }  else { $idpt=''; }
	$sql_pt = "select * from pt order by nama_pt ";
	$rst_pt = mysqli_querY($conn, $sql_pt);
	?><div class="row">
		<div class="col-md-2">
			<select onChange="document.location.href=this.options[this.selectedIndex].value; " class="form-control">
			<option value="#">Pilih Perguruan Tinggi</option>
			<?php
while ($row_pt = mysqli_fetch_assoc($rst_pt)) {
	$id_pt = $row_pt['id_pt'];
	$nama_pt = $row_pt['nama_pt'];
	?><option value="index.php?pages=acfasilitas&idpt=<?=$id_pt;?>&ac=add" <?php if ($id_pt==$idpt) { ?>selected<?php } ?>><?=$nama_pt;?></option><?php
}
			?>
			</select>
		</div>
	</div><?php
} else {
	$sql_pt = "select id_pt from account where username='$s_username' ";
	$rst_pt = mysqli_query($conn, $sql_pt);
	$row_pt = mysqli_fetch_assoc($rst_pt);
	$idpt = $row_pt['id_pt'];
}
if ($idpt!='') {
	if ($ac=='add') {
		$id_fasilitas=''; $nama_fasilitas='';
	} else {
		$id_fasilitas=$_GET['id'];
		$sql_f = "select * from fasilitas where id_fasilitas='$id_fasilitas' and id_pt='$idpt' ";
		$rst_f = mysqli_query($conn, $sql_f);
		$row_f = mysqli_fetch_assoc($rst_f);
		$nama_fasilitas=$row_f['nama_fasilitas'];
	}
	?><form method="post" action="admin/sv/svfasilitas.php?ac=<?=$ac;?>&idf=<?=$id_fasilitas;?>&idpt=<?=$idpt;?>"><div class="row">
		<div class="col-md-2"><strong>Nama Fasilitas</strong></div>
		<div class="col-md-3"><textarea class="form-control" name="nama_fasilitas" rows="3"><?=$nama_fasilitas;?></textarea></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3"><button type="submit" class="btn btn-primary btn-sm">Simpan</button></div>
	</div></form><?php
}
?>