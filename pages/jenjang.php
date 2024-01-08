<h3>Jenjang Pendidikan</h3>
<?php if ($s_level=='1') { ?><a href="index.php?pages=acjenjang&ac=add"><button class="btn btn-success btn-sm">Tambah</button></a><?php } ?>
<table class="table table-condensed table-striped">
	<tr><th>No</th><th>Nama Jenjang Pendidikan</th><?php if ($s_level=='1') { ?><th>Options</th><?php }?></tr>
	<?php
$sql_jenjang = "select * from jenjang order by nama_jenjang ";
$rst_jenjang = mysqli_query($conn, $sql_jenjang);
$no=0;
while ($row_jenjang=mysqli_fetch_assoc($rst_jenjang)) {
	$no++;
	$id_jenjang = $row_jenjang['id_jenjang'];
	$nama_jenjang = $row_jenjang['nama_jenjang'];
	?><tr><td><?=$no;?></td><td><?=$nama_jenjang;?></td><?php if ($s_level=='1') { ?><td><a href="index.php?pages=acjenjang&ac=edit&id=<?=$id_jenjang;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_jenjang;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a> </td><?php }?></tr><?php if ($s_level=='1') { ?><div id="mod_remove_<?=$id_jenjang;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_jenjang;?></strong> <a href="admin/dl/dljenjang.php?id=<?=$id_jenjang;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php } } ?>
</table>