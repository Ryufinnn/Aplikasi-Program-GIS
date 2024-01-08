<h3>Account</h3>
<?php if ($s_level=='1'){
	?><a href="index.php?pages=acaccount&ac=add"><button class="btn btn-success btn-sm">Tambah</button></a> <?php
	} ?>
<table class="table table-striped table-bordered table-condensed">
<tr><th>No.</th><th>Username</th><th>Nama Account</th><th>Perguruan Tinggi</th><th>Options</th></tr>
	<?php
$sql_a = "select * from account, pt where account.id_pt=pt.id_pt ";
if ($s_level=='2'){
	$sql_a .= "and username='$s_username' ";
}
$sql_a .= "order by nama ";
$rst_a = mysqli_query($conn, $sql_a);
$no=0;
while ($row_a=mysqli_fetch_assoc($rst_a)){
	$no++;
	$username=$row_a['username'];
	$nama=$row_a['nama'];
	$nama_pt=$row_a['nama_pt'];
	?><tr><td><?=$no;?></td><td><?=$username;?></td><td><?=$nama;?></td><td><?=$nama_pt;?></td><td><a href="index.php?pages=acaccount&ac=edit&id=<?=$username;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$username;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a></td></tr>
	<div id="mod_remove_<?=$username;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama;?></strong> <a href="admin/dl/dlaccount.php?id=<?=$username;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div> <?php
} ?>
</table>