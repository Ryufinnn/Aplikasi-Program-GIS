<button onclick="goBack()">Kembali</button>
<?php
$ac=$_GET['ac'];
	if ($ac=='add') {
		$id_jenjang=''; $nama_jenjang='';
	} else {
		$id_jenjang=$_GET['id'];
		$sql_f = "select * from jenjang where id_jenjang='$id_jenjang' ";
		$rst_f = mysqli_query($conn, $sql_f);
		$row_f = mysqli_fetch_assoc($rst_f);
		$nama_jenjang=$row_f['nama_jenjang'];
	}
	?><form method="post" action="admin/sv/svjenjang.php?ac=<?=$ac;?>&id=<?=$id_jenjang;?>"><div class="row">
		<div class="col-md-3"><strong>Nama Jenjang Pendidikan</strong></div>
		<div class="col-md-4"><input type="text" name="nama_jenjang" value="<?=$nama_jenjang;?>" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-4"><button type="submit" class="btn btn-primary btn-sm">Simpan</button></div>
	</div></form><?php
?>