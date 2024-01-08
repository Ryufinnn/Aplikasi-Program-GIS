<h3>Jalur Asal</h3>
<?php if ($s_level=='1') { ?><a href="index.php?pages=acjalur&ac=add"><button class="btn btn-success btn-sm">Tambah</button></a><?php } ?>
<table class="table table-condensed table-striped">
	<tr><th>No</th><th>Nama Lokasi</th><th>Langitude</th><th>Longitude</th><?php if ($s_level=='1') { ?><th>Options</th><?php }?></tr>
	<?php
$sql_jalur = "select * from jalur order by nama_asal ";
$rst_jalur = mysqli_query($conn, $sql_jalur);
$no=0;
while ($row_jalur=mysqli_fetch_assoc($rst_jalur)) {
	$no++;
	$id_jalur = $row_jalur['id_jalur'];
	$nama_asal = $row_jalur['nama_asal'];
	$x = $row_jalur['x'];
	$y = $row_jalur['y'];
	?><tr><td><?=$no;?></td><td><?=$nama_asal;?></td><td><?=$x;?></td><td><?=$y;?></td><?php if ($s_level=='1') { ?><td><a href="index.php?pages=acjalur&ac=edit&id=<?=$id_jalur;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_jalur;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a> </td><?php }?></tr><?php if ($s_level=='1') { ?><div id="mod_remove_<?=$id_jalur;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_asal;?></strong> <a href="admin/dl/dljalur.php?id=<?=$id_jalur;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php } } ?>
</table>