<button onclick="goBack()">Kembali</button>
<?php
$ac=$_GET['ac'];
	if ($ac=='add') {
		$id_jalur=''; $nama_asal=''; $x=''; $y='';
	} else {
		$id_jalur=$_GET['id'];
		$sql_f = "select * from jalur where id_jalur='$id_jalur' ";
		$rst_f = mysqli_query($conn, $sql_f);
		$row_f = mysqli_fetch_assoc($rst_f);
		$nama_asal=$row_f['nama_asal'];
		$x=$row_f['x'];
		$y=$row_f['y'];
	}
	?><form method="post" action="admin/sv/svjalur.php?ac=<?=$ac;?>&id=<?=$id_jalur;?>">
	<div class="row">
		<div class="col-md-2"><strong>Asal</strong></div>
		<div class="col-md-3"><input type="text" name="nama_asal" value="<?=$nama_asal;?>" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><strong>X</strong></div>
		<div class="col-md-3"><input type="text" name="x" value="<?=$x;?>" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-md-2"><strong>Y</strong></div>
		<div class="col-md-3"><input type="text" name="y" value="<?=$y;?>" class="form-control"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3"><button type="submit" class="btn btn-primary btn-sm">Simpan</button></div>
	</div></form><?php
?>
