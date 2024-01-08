<h3>Kategori Perguruan Tinggi</h3>
<?php if ($s_level=='1') { ?><a href="index.php?pages=ackategori&ac=add"><button class="btn btn-success btn-sm">Tambah</button></a><?php } ?>
<table class="table table-condensed table-striped">
	<tr><th>No</th><th>Nama Kategori</th><?php if ($s_level=='1') { ?><th>Options</th><?php }?></tr>
	<?php
$sql_kategori = "select * from kategori order by nama_kategori ";
$rst_kategori = mysqli_query($conn, $sql_kategori);
$no=0;
while ($row_kategori=mysqli_fetch_assoc($rst_kategori)) {
	$no++;
	$id_kategori = $row_kategori['id_kategori'];
	$nama_kategori = $row_kategori['nama_kategori'];
	?><tr><td><?=$no;?></td><td><?=$nama_kategori;?></td><?php if ($s_level=='1') { ?><td><a href="index.php?pages=ackategori&ac=edit&id=<?=$id_kategori;?>"><button class="btn btn-success btn-xs">Edit</button></a> <a data-toggle='modal' data-target="#mod_remove_<?=$id_kategori;?>"><button class='btn btn-danger btn-xs'>Hapus</button></a> </td><?php }?></tr><?php if ($s_level=='1') { ?><div id="mod_remove_<?=$id_kategori;?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<strong>Hapus?? <?=$nama_kategori;?></strong> <a href="admin/dl/dlkategori.php?id=<?=$id_kategori;?>"><button class="btn btn-danger btn-sm">YES</button></a> <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">NO</button></div>
</div> </div> </div><?php } } ?>
</table>