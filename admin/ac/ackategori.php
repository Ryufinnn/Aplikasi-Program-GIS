<button onclick="goBack()">Kembali</button>
<?php
$ac=$_GET['ac'];
	if ($ac=='add') {
		$id_kategori=''; $nama_kategori='';
	} else {
		$id_kategori=$_GET['id'];
		$sql_f = "select * from kategori where id_kategori='$id_kategori' ";
		$rst_f = mysqli_query($conn, $sql_f);
		$row_f = mysqli_fetch_assoc($rst_f);
		$nama_kategori=$row_f['nama_kategori'];
	}
	?><form method="post" action="admin/sv/svkategori.php?ac=<?=$ac;?>&id=<?=$id_kategori;?>"><div class="row">
		<div class="col-md-3"><strong>Nama kategori</strong></div>
		<div class="col-md-4"><input type="text" name="nama_kategori" value="<?=$nama_kategori;?>" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-4"><button type="submit" class="btn btn-primary btn-sm">Simpan</button></div>
	</div></form><?php
?>
