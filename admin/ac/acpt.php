<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>
<?php
$ac=$_GET['ac'];
if ($ac=='add'){
	$id_pt=''; $nama_pt=''; $alamat_pt=''; $kode_pos=''; $akreditasi_pt=''; $telp='';$email='';$website=''; $skpt=''; $tanggal_skpt=''; $date_pt=''; $id_kategori=''; $x='';$y=''; $d=''; $action=''; $h3='Tambah Perguruan Tinggi';
} else {
	$id_pt=$_GET['id'];
	$sql_pt = "select * from pt where id_pt='$id_pt' ";
	$rst_pt = mysqli_query($conn, $sql_pt);
	$row_pt = mysqli_fetch_assoc($rst_pt);
	$nama_pt = $row_pt['nama_pt'];
	$alamat_pt = $row_pt['alamat_pt'];
	$kode_pos = $row_pt['kode_pos'];
	$akreditasi_pt = $row_pt['akreditasi_pt'];
	$telp = $row_pt['telp'];
	$email = $row_pt['email'];
	$website = $row_pt['website'];
	$skpt = $row_pt['skpt'];
	$tanggal_skpt = $row_pt['tanggal_skpt'];
	$date_pt = $row_pt['date_pt'];
	$id_kategori = $row_pt['id_kategori'];
	$x = $row_pt['x'];
	$y = $row_pt['y'];
	$gambar = $row_pt['gambar'];
	$d='disabled';
	$action='admin/sv/svpt.php?id='.$id_pt.'&ac=edit';
	$h3='Edit '.$nama_pt; } ?>
<h3><?=$h3;?></h3>
<?php if ($ac=='edit') {
	if ($gambar!='') { ?><img src="images/pt/<?=$gambar;?>" class="img-rounded" width="200"> <?php } ?>
	<form method="POST" enctype="multipart/form-data" action="">
		Upload Foto : <input type="file" required="required" name="file_upload"> <button class="btn btn-primary btn-sm" type="submit" name="sv">Upload</button>
	</form><?php include 'admin/sv/svgambar.php'; } ?>
<form method='post' enctype="multipart/form-data" action='<?=$action;?>'>
<div class='row'>
<div class='col-md-3'>Kode Perguruan Tinggi</div>
<div class='col-md-5'><input type='text' name='id_pt' value='<?=$id_pt;?>' <?=$d;?> class="" maxlength="5" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Nama Perguruan Tinggi</div>
<div class='col-md-5'><input type='text' name='nama_pt' value='<?=$nama_pt;?>' class="" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>date_pt</div>
<div class='col-md-5'><input type='date' name='date_pt' value='<?=$date_pt;?>' class="" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>SKPT</div>
<div class='col-md-5'><input type="text" name="skpt" value="<?=$skpt;?>"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Tanggal SKPT</div>
<div class='col-md-5'><input type="date" name="tanggal_skpt" value="<?=$tanggal_skpt;?>"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Alamat</div>
<div class='col-md-5'><textarea rows='3' name='alamat_pt' class=""><?=$alamat_pt;?></textarea></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Akreditasi</div>
<div class='col-md-5'><select name="akreditasi_pt">
	<option value="A" <?php if ($akreditasi_pt=='A') { ?>selected<?php } ?>>A</option>
	<option value="B" <?php if ($akreditasi_pt=='B') { ?>selected<?php } ?>>B</option>
	<option value="C" <?php if ($akreditasi_pt=='C') { ?>selected<?php } ?>>C</option>
	<option value="TERAKREDITASI" <?php if ($akreditasi_pt=='TERAKREDITASI') { ?>selected<?php } ?>>TERAKREDITASI</option>
</select></div>
</div><br>
<?php
$sql_k = "select * from kategori order by nama_kategori ";
$rst_k = mysqli_query($conn, $sql_k);
?>
<div class='row'>
<div class='col-md-3'>Kategori</div>
<div class='col-md-5'><select name="id_kategori">
	<?php
while ($row_k=mysqli_fetch_assoc($rst_k)) {
	$id_kategori1 = $row_k['id_kategori'];
	$nama_kategori = $row_k['nama_kategori'];
	?><option value="<?=$id_kategori1;?>" <?php if ($id_kategori1==$id_kategori) { ?>selected<?php } ?> ><?=$nama_kategori;?></option><?php
}
	?>
</select></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Kode Pos</div>
<div class='col-md-5'><input type="number" name="kode_pos" min="0" max="99999" value="<?=$kode_pos;?>" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Telp</div>
<div class='col-md-5'><input type="text" name="telp" value="<?=$telp;?>"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Email</div>
<div class='col-md-5'><input type="email" name="email" value="<?=$email;?>"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Website</div>
<div class='col-md-5'><input type="text" name="website" value="<?=$website;?>"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Langitude</div>
<div class='col-md-5'><input type="text" name="x" value="<?=$x;?>" required="required"></div>
</div><br><div class='row'>
<div class='col-md-3'>Longitude</div>
<div class='col-md-5'><input type="text" name="y" value="<?=$y;?>" required="required"></div>
</div><br>
<?php
if ($ac=='add') { ?><div class='row'>
<div class='col-md-3'>Gambar</div>
<div class='col-md-5'><input type='file' name='file_upload'></div>
</div><br><?php } ?>
<div class='row'>
<div class='col-md-3'></div>
<div class='col-md-5'><button type='submit' name="sv" class='btn btn-primary btn-sm'>Simpan</button></div>
</div>
</form>
<?php if ($ac=='add'){ include 'admin/sv/svgambar.php'; } ?>