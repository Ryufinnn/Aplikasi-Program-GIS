<?php if (isset($_GET['txt'])){ $txt=$_GET['txt']; } else { $txt=''; } if (isset($_GET['search'])){ $search=$_GET['search']; } else { $search=''; } if (isset($_GET['j'])){ $j=$_GET['j']; } else { $j=''; } ?>
<h3>Pencarian</h3>
<form method="POST" action="r0.php">
	<div class="row">
		<div class="col-md-3"><input type="text" name="txt" class="form-control" minlength="5" required="required" value="<?=$txt;?>"></div>
		<div class="col-md-3"><select name="search" class="form-control">
			<option value="pt" <?php if($search=='pt') { ?>selected<?php } ?>>Perguruan Tinggi</option>
			<option value="al" <?php if($search=='al') { ?>selected<?php } ?>>Alamat</option>
			<option value="fk" <?php if($search=='fk') { ?>selected<?php } ?>>Fakultas</option>
			<option value="pr" <?php if($search=='pr') { ?>selected<?php } ?>>Prodi</option>
			<option value="fs" <?php if($search=='fs') { ?>selected<?php } ?>>Fasilitas</option>
		</select></div>
		<div class="col-md-3"><select name="id_jenjang" class="form-control">
			<option value="">Semua Jenjang Pendidikan</option>
			<?php
$sql_j = "select * from jenjang order by nama_jenjang ";
$rst_j = mysqli_query($conn, $sql_j);
while ($row_j=mysqli_fetch_assoc($rst_j)) {
	$id_jenjang=$row_j['id_jenjang'];
	$nama_jenjang=$row_j['nama_jenjang'];
	?><option value="<?=$id_jenjang;?>" <?php if ($id_jenjang==$j){ ?>selected<?php } ?>><?=$nama_jenjang;?></option> <?php
}
			?>
		</select></div>
		<div class="col-md-1"><button type="submit" class="btn btn-success btn-md">Cari</button></div>
	</div>
</form>
<hr>
<?php
if ($search!='' and $txt!='' ) {
	?><table class="table table-striped table-condensed">
		<?php
		$no=0;
		$sql = "select distinct pt.* from pt ";
switch ($search) {
	case 'pt': ?><tr><th>No</th><th>Nama Perguruan Tinggi</th><th>Alamat</th></tr><?php
	$sql .= "where nama_pt like '%$txt%' ";
	if ($j!=''){
		$sql .= "and id_pt in (select distinct pt.id_pt from pt, fakultas, prodi where fakultas.id_pt=pt.id_pt and id_jenjang='$j' ) ";
	}
	$sql .= "order by nama_pt limit 20 ";
	//echo "$sql";
	$rst = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($rst)) {
		$no++;
		$id_pt=$row['id_pt'];
		$nama_pt=$row['nama_pt'];
		$alamat_pt=$row['alamat_pt'];
		?><tr><th><?=$no;?></th><th><a href="index.php?pages=view&id=<?=$id_pt;?>"><?=$nama_pt;?></a></th><th><?=$alamat_pt;?></th></tr> <?php
	}
		break;
	case 'al': ?><tr><th>No</th><th>Nama Perguruan Tinggi</th><th>Alamat</th></tr><?php
	$sql .= "where alamat_pt like '%$txt%' ";
	if ($j!=''){
		$sql .= "and id_pt in (select distinct pt.id_pt from pt, fakultas, prodi where fakultas.id_pt=pt.id_pt and prodi.id_fakultas=fakultas.id_fakultas and id_jenjang='$j' ) ";
	}
	$sql .= "order by nama_pt limit 20 ";
	//echo "$sql";
	$rst = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($rst)) {
		$no++;
		$id_pt=$row['id_pt'];
		$nama_pt=$row['nama_pt'];
		$alamat_pt=$row['alamat_pt'];
		?><tr><th><?=$no;?></th><th><a href="index.php?pages=view&id=<?=$id_pt;?>"><?=$nama_pt;?></a></th><th><?=$alamat_pt;?></th></tr> <?php
	}
		break;
	case 'fk': ?><tr><th>No</th><th>Nama Perguruan Tinggi</th><th>Alamat</th><th>Fakultas</th></tr><?php
	$sql .= ", fakultas where fakultas.id_pt=pt.id_pt and nama_fakultas like '%$txt%' ";
	if ($j!=''){
		$sql .= "and pt.id_pt in (select distinct pt.id_pt from pt, prodi, jenjang, fakultas WHERE fakultas.id_pt=pt.id_pt and fakultas.nama_fakultas LIKE '%$txt%' and prodi.id_pt=pt.id_pt and prodi.id_jenjang=jenjang.id_jenjang and prodi.id_jenjang='$j' ) ";
	}
	$sql .= "order by nama_pt limit 20 ";
	//echo "$sql";
	$rst = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($rst)) {
		$no++;
		$id_pt=$row['id_pt'];
		$nama_pt=$row['nama_pt'];
		$alamat_pt=$row['alamat_pt'];
		$sql_fk = "select nama_fakultas from fakultas where id_pt='$id_pt' order by nama_fakultas ";
		$rst_fk = mysqli_query($conn, $sql_fk);
		$fk='';
		//echo " FK $sql_fk";
	while ($row_fk=mysqli_fetch_assoc($rst_fk)) {
		$nama_fakultas=$row_fk['nama_fakultas'];
		$fk .=$nama_fakultas.', ';
	}
		?><tr><th><?=$no;?></th><th><a href="index.php?pages=view&id=<?=$id_pt;?>"><?=$nama_pt;?></a></th><th><?=$alamat_pt;?></th><th><?=$fk;?></th></tr> <?php
	}
		break;
	case 'pr': ?><tr><th>No</th><th>Nama Perguruan Tinggi</th><th width='30%'>Alamat</th><th width='40%'>Prodi</th></tr><?php
	$sql .= ", prodi where prodi.id_pt=pt.id_pt and nama_prodi like '%$txt%' ";
	if ($j!=''){
		$sql .= "and pt.id_pt in (select distinct pt.id_pt from pt, prodi, jenjang WHERE prodi.nama_prodi LIKE '%$txt%' and prodi.id_pt=pt.id_pt and prodi.id_jenjang=jenjang.id_jenjang and prodi.id_jenjang='$j' ) ";
	} else {
		//$sql .= "and pt.id_pt in (select distinct pt.id_pt from pt, prodi WHERE prodi.nama_prodi LIKE '%$txt%' and prodi.id_pt=pt.id_pt ) ";
	}
	$sql .= "order by nama_pt limit 20 ";
	//echo "$sql";
	$rst = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($rst)) {
		$no++;
		$id_pt=$row['id_pt'];
		$nama_pt=$row['nama_pt'];
		$alamat_pt=$row['alamat_pt'];
		if ($j!='') {
			$sql_p0 = "and nama_prodi like '%$txt%' and prodi.id_jenjang='$j' ";
		} else {
			$sql_p0 = "and nama_prodi like '%$txt%'";
		}
		$sql_p = "select nama_prodi, nama_jenjang from pt, prodi, jenjang where prodi.id_jenjang=jenjang.id_jenjang and prodi.id_pt=pt.id_pt and prodi.id_pt='$id_pt'".$sql_p0." order by nama_prodi ";
		//echo "$sql_p";
	$rst_p = mysqli_query($conn, $sql_p);
	$p = '';
	while ($row_p=mysqli_fetch_assoc($rst_p)){
		$nama_prodi=$row_p['nama_prodi'];
		$nama_jenjang=$row_p['nama_jenjang'];
		$p .= $nama_prodi.' ('.$nama_jenjang.'), ';
	}
		?><tr><th><?=$no;?></th><th><a href="index.php?pages=view&id=<?=$id_pt;?>"><?=$nama_pt;?></a></th><th><?=$alamat_pt;?></th><th><?=$p;?></th></tr> <?php
	}
		break;
	case 'fs': ?><tr><th>No</th><th>Nama Perguruan Tinggi</th><th>Alamat</th><th>Fasilitas</th></tr><?php
	$sql .= ", fasilitas where fasilitas.id_pt=pt.id_pt and nama_fasilitas like '%$txt%' ";
	if ($j!=''){
		$sql .= "and pt.id_pt in (select distinct pt.id_pt from pt, prodi, jenjang, fasilitas WHERE fasilitas.id_pt=pt.id_pt and fasilitas.nama_fasilitas LIKE '%$txt%' and prodi.id_pt=pt.id_pt and prodi.id_jenjang=jenjang.id_jenjang and prodi.id_jenjang='$j' ) ";
	}
	$sql .= "order by nama_pt limit 20 ";
	//echo "$sql";
	$rst = mysqli_query($conn, $sql);
	while ($row=mysqli_fetch_assoc($rst)) {
		$no++;
		$id_pt=$row['id_pt'];
		$nama_pt=$row['nama_pt'];
		$alamat_pt=$row['alamat_pt'];
		$sql_fs = "select nama_fasilitas from fasilitas where id_pt='$id_pt' and nama_fasilitas like '%$txt%' ";
	$rst_fs = mysqli_query($conn, $sql_fs);
	$fs ='';
	while ($row_fs=mysqli_fetch_assoc($rst_fs)) {
		$nama_fasilitas = $row_fs['nama_fasilitas'];
		$fs .= $nama_fasilitas.',';
	}
		?><tr><th><?=$no;?></th><th><a href="index.php?pages=view&id=<?=$id_pt;?>"><?=$nama_pt;?></a></th><th><?=$alamat_pt;?></th><th><?=$fs;?></th></tr> <?php
	}
		break;
	default:
		# code...
		break;
}
		?>
	</table> <?php

}
?>