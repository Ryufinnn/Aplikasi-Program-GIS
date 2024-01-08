<button class='btn btn-warning btn-sm' onclick="goBack()">Kembali</button>
<?php
$ac=$_GET['ac'];
if ($ac=='add') {
	$username=''; $nama=''; $id_pt=''; $level=''; $h3='Tambah Account';
} else {
	$sql_a = "select * from account, pt where account.id_pt=pt.id_pt ";
if ($acc=='2'){
	$sql_a .= "and username='$s_username' ";
}
$rst_a = mysqli_query($conn, $sql_a);
$row_a = mysqli_fetch_assoc($rst_a);
$username=$row_a['username'];
$nama=$row_a['nama'];
$id_pt=$row_a['id_pt'];
$level=$row_a['level'];
$h3='Edit '.$nama;
}
?>
<h3><?=$h3;?></h3>
<form method="post" action="admin/sv/svaccount.php?ac=<?=$ac;?>">
<div class="row">
	<div class="col-md-2"><strong>Username</strong></div>
	<div class="col-md-3"><input type="text" name="username" value="<?=$username;?>" class="form-control" required="required"></div>
</div>
<div class="row">
	<div class="col-md-2"><strong>Password</strong></div>
	<div class="col-md-3"><input type="password" name="password" class="form-control" required="required"></div>
</div>
<div class="row">
	<div class="col-md-2"><strong>Nama</strong></div>
	<div class="col-md-3"><input type="text" name="nama" value="<?=$nama;?>" class="form-control" required="required"></div>
</div>
<?php
$sql_pt = "select * from pt ";
if ($s_level=='2'){
	$sql_pt .="where id_pt='$id_pt' ";
}
$sql_pt .= "order by nama_pt ";
$rst_pt = mysqli_query($conn, $sql_pt);
?>
<div class="row">
	<div class="col-md-2"><strong>Perguruan Tinggi</strong></div>
	<div class="col-md-2"><select name="id_pt" class="form-control">
		<?php while ($row_pt=mysqli_fetch_assoc($rst_pt)) {
			$id_pt0=$row_pt['id_pt'];
			$nama_pt=$row_pt['nama_pt'];
			?><option value="<?=$id_pt0;?>" <?php if($id_pt0=='$id_pt') { ?>selected<?php } ?>><?=$nama_pt;?></option> <?php
		} ?>
	</select></div>
</div>
<div class="row">
	<div class="col-md-2"><strong>Level</strong></div>
	<div class="col-md-2"><select name="level" class="form-control"><option value="2">Perguruan Tinggi</option><?php if ($s_level=='1'){ ?><option value="1">Administrator</option> <?php } ?></select></div>
</div>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-2"><button type="submit" class="btn btn-sm btn-primary">Simpan</button></div>
</div>
</form>
