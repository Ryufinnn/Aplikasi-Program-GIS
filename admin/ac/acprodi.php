<?php
$ac=$_GET['ac'];
$idpt = $_GET['idpt'];
if ($ac=='add'){
	$id_prodi=''; $nama_prodi=''; $akreditasi=''; $status=''; $id_jenjang0=''; $h3='Tambah prodi';
} else {
	$id_prodi=$_GET['id'];
	$sql_prodi = "select * from prodi where id_prodi='$id_prodi' ";
	$rst_prodi = mysqli_query($conn, $sql_prodi);
	$row_prodi = mysqli_fetch_assoc($rst_prodi);
	$nama_prodi = $row_prodi['nama_prodi'];
	$akreditasi = $row_prodi['akreditasi'];
	$status = $row_prodi['status'];
	$id_jenjang0 = $row_prodi['id_jenjang'];
	$h3='Edit '.$nama_prodi; }
$sql_jenjang = "select * from jenjang order by id_jenjang ";
$rst_jenjang = mysqli_query($conn, $sql_jenjang);
	 ?>
<h3><?=$h3;?></h3>
<button onclick="goBack()" class="btn btn-warning btn-sm">Kembali</button>
<form method='post' action='admin/sv/svprodi.php?idpt=<?=$idpt;?>&id=<?=$id_prodi;?>&ac=<?=$ac;?>'>
<div class='row'>
<div class='col-md-3'>Kode prodi</div>
<div class='col-md-5'><input type='text' name='id_prodi' value='<?=$id_prodi;?>' class="" maxlength="5" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Nama prodi</div>
<div class='col-md-5'><input type='text' name='nama_prodi' value='<?=$nama_prodi;?>' class="" required="required"></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Akreditasi</div>
<div class='col-md-5'><select name="akreditasi">
<option value="A" <?php if($akreditasi=='A') { ?>selected<?php } ?>>A</option>
<option value="B" <?php if($akreditasi=='B') { ?>selected<?php } ?>>B</option>
<option value="C" <?php if($akreditasi=='C') { ?>selected<?php } ?>>C</option>
<option value="Terakreditasi-A" <?php if($akreditasi=='Terakreditasi-A') { ?>selected<?php } ?>>Terakreditasi-A</option>
<option value="Terakreditasi-B" <?php if($akreditasi=='Terakreditasi-B') { ?>selected<?php } ?>>Terakreditasi-B</option>
<option value="Terakreditasi-C" <?php if($akreditasi=='Terakreditasi-C') { ?>selected<?php } ?>>Terakreditasi-C</option>
<option value="Tutup" <?php if($akreditasi=='Tutup') { ?>selected<?php } ?>>Tutup</option>
</select></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Status</div>
<div class='col-md-5'><select name="status">
<option value="1" <?php if($status=='1') { ?>selected<?php } ?>>Aktif</option>
<option value="0" <?php if($status=='0') { ?>selected<?php } ?>>Tutup</option>
</select></div>
</div><br>
<div class='row'>
<div class='col-md-3'>Jenjang</div>
<div class='col-md-5'><select name="id_jenjang">
<?php
while ($row_jenjang=mysqli_fetch_assoc($rst_jenjang)) {
	$id_jenjang=$row_jenjang['id_jenjang'];
	$nama_jenjang=$row_jenjang['nama_jenjang'];
	?><option value="<?=$id_jenjang;?>"<?php if ($id_jenjang==$id_jenjang0) { ?> selected<?php } ?>><?=$nama_jenjang;?></option> <?php
}
?>
</select></div>
</div><br>
<div class='row'>
<div class='col-md-3'></div>
<div class='col-md-5'><button type='submit' class='btn btn-primary btn-sm'>Simpan</button></div>
</div>
</form>