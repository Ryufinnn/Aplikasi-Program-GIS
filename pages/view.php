<?php
$id_pt = $_GET['id']; $sql_pt = "select * from pt where id_pt='$id_pt' "; $rst_pt = mysqli_query($conn, $sql_pt); $row_pt = mysqli_fetch_assoc($rst_pt); $nama_pt = $row_pt['nama_pt']; $alamat_pt = $row_pt['alamat_pt']; $kode_pos = $row_pt['kode_pos']; $akreditasi_pt = $row_pt['akreditasi_pt'];$telp = $row_pt['telp']; $email = $row_pt['email']; $website = $row_pt['website']; $x = $row_pt['x']; $y = $row_pt['y']; $gambar = $row_pt['gambar']; $sql_fakultas = "select * from fakultas where id_pt='$id_pt' order by nama_fakultas "; $rst_fakultas = mysqli_query($conn, $sql_fakultas); $sql_prodi = "select nama_prodi, nama_jenjang, akreditasi from prodi, jenjang where prodi.id_jenjang=jenjang.id_jenjang and id_pt='$id_pt' order by nama_prodi "; $rst_prodi = mysqli_query($conn, $sql_prodi); $no=0;
?>
<h3><?=$nama_pt;?></h3>
<div class="row">
	<div class="col-md-6"><img src="images/pt/<?=$gambar;?>" class="img-rounded" width="500">
	<table class="table">
		<tr><th>Alamat</th><td><?=$alamat_pt;?>, Kode Pos : <?=$kode_pos;?>. Telp. : <?=$telp;?></td></tr>
		<tr><th>Website</th><td><a href="http://<?=$website;?>" target="_blank"><?=$website;?></a></td></tr>
		<tr><th>Email</th><td><?=$email;?></td></tr>
		<tr><th>Akreditasi</th><td><?=$akreditasi_pt;?></td></tr>
	</table>
	<hr>
<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>
<table class="table table-condensed table-striped table-bordered">
	<tr><th>Fakultas</th><td colspan="2"><?php
while ($row_f=mysqli_fetch_assoc($rst_fakultas)) {
	$nama_fakultas=$row_f['nama_fakultas'];
	?><?=$nama_fakultas;?>, <?php
}
	 ?></td></tr>
	 <tr><th>Prodi</th><th>Jenjang</th><th>Akreditasi</th><td><?php
while ($row_p=mysqli_fetch_assoc($rst_prodi)) {
	$nama_prodi=$row_p['nama_prodi'];
	$akreditasi=$row_p['akreditasi'];
	$nama_jenjang=$row_p['nama_jenjang'];
	?><tr><td><?=$nama_prodi;?></td><td><?=$nama_jenjang;?></td><td><?=$akreditasi;?></td></tr><?php
}
	 ?></td></tr>
</table>
</table class =" table table-condensed table -stred table-bordered">
     <tr><th>Fasilitas</th>
<?php
$sql_f = "select * from fasilitas where id_pt='$id_pt' ";
$rst_f = mysqli_query($conn, $sql_f);
$col_f = mysqli_fetch_assoc($rst_f);
$nama_fasilitas=$col_f['nama_fasilitas'];
?><td><?=$nama_fasilitas;?></td>
</tr>
</table>
	</div>
	<div class="col-md-6">
	
	<div id="map_canvas3" style="float:left;width:500px;height:500px"></div>
	<div><h4>Informasi Jalur</h4> 
	<strong>Titik A : Pusat Kota Padang</strong><br>
	<strong>Titik B : <?=$nama_pt;?></strong>
	<p><button id="undo" style="display:block;margin:auto" onclick="undo()">Undo </button></p> 
	<div id="directions_panel" style="color:#fff" ></div></div>
	
	</div>
</div>