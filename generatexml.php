<?php
if (isset($_GET['search'])){
	$search=$_GET['search'];
} else {
	$search='';
}
if ($search!='') {
	$sql="where (nama_pt like '%$search%' or alamat_pt like '%$search%') ";
} else {
	$sql='';
}
	include('admin/db_config.php');
	function parseToXML($htmlStr) { $xmlStr=str_replace('<','&lt;',$htmlStr); $xmlStr=str_replace('>','&gt;',$xmlStr); $xmlStr=str_replace('"','&quot;',$xmlStr); $xmlStr=str_replace("'",'&#39;',$xmlStr); $xmlStr=str_replace("&",'&amp;',$xmlStr); return $xmlStr; }
	$q = "select * from pt ".$sql."order by nama_pt "; $rs = mysqli_query($conn, $q); if (!$rs) { die('Invalid Query:'.mysqli_error() ); } header('Content-type: text/xml'); ?>
<markers>
	<?php
	while ($rw = mysqli_fetch_assoc($rs) )
	{ $id_pt = parseToXML($rw['id_pt']); $nama_pt = parseToXML($rw['nama_pt']); $id_pt0=$rw['id_pt']; $gambar = $rw['gambar']; $x = $rw['x']; $y = $rw['y'];
$sql_fakultas = "select * from fakultas where id_pt='$id_pt0' order by nama_fakultas ";
$rst_fakultas = mysqli_query($conn, $sql_fakultas);
$info='';
while ($row_fakultas=mysqli_fetch_assoc($rst_fakultas)) {
	$nama_fakultas=$row_fakultas['nama_fakultas'];
	$info .=$nama_fakultas;
	$info .=', ';
}
	 ?>
		<marker id_pt='<?=$id_pt;?>' nama_pt="<?=$nama_pt;?>" lat='<?=$x;?>' lng='<?=$y;?>' gb='<?=$gambar;?>' info='<?=$info;?>' />
			<?php } ?> </markers>
