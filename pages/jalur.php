<?php
if (isset($_GET['from']) and isset($_GET['to'])) {
	$from=$_GET['from'];
	$to=$_GET['to'];
} else {
	$from='';
	$to='';
}
$sql_jalur="select * from jalur order by nama_asal ";
$rst_jalur=mysqli_query($conn, $sql_jalur);
$sql_pt="select * from pt order by nama_pt ";
$rst_pt=mysqli_query($conn, $sql_pt);
//echo "$sql_pt";
?>
<h3>Pencarian Jalur</h3>
<form method="POST" action="r3.php">
<div class="row">
	<div class="col-md-1">Asal</div>
	<div class="col-md-2"><select name="id_jalur" class="form-control">
		<?php
while ($row_jalur=mysqli_fetch_assoc($rst_jalur)){
	$id_jalur=$row_jalur['id_jalur'];
	$nama_asal=$row_jalur['nama_asal'];
	?><option value='<?=$id_jalur;?>' <?php if($id_jalur==$from) { ?>selected<?php } ?>><?=$nama_asal;?></option> <?php
}
		?>
	</select></div>
	<div class="col-md-1">Ke</div>
	<div class="col-md-2"><select name="id_pt" class="form-control">
		<?php
while ($row_pt=mysqli_fetch_assoc($rst_pt)){
	$id_pt=$row_pt['id_pt'];
	$nama_pt=$row_pt['nama_pt'];
	?><option value='<?=$id_pt;?>' <?php if($id_pt==$to) { ?>selected<?php } ?>><?=$nama_pt;?></option> <?php
}
		?>
	</select></div>
	<div class="col-md-1"><button type="submit" class="btn btn-success btn-md">Cari</button></div>
</div>
</form>
<hr noshade="">
<?php
if ($from!='' and $to!='') {
	$sql_jalur1="select * from jalur where id_jalur='$from' ";
	$rst_jalur1=mysqli_query($conn, $sql_jalur1);
	$row_jalur1=mysqli_fetch_assoc($rst_jalur1);
	$nama_asal1=$row_jalur1['nama_asal'];
	$x1=$row_jalur1['x'];
	$y1=$row_jalur1['y'];
	$sql_pt1="select * from pt where id_pt='$to' ";
	$rst_pt1=mysqli_query($conn, $sql_pt1);
	$row_pt1=mysqli_fetch_assoc($rst_pt1);
	$nama_pt1 = $row_pt1['nama_pt'];
	$x2 = $row_pt1['x'];
	$y2 = $row_pt1['y'];
	//echo "$x2";
	include 'road_script.php';
	?><div id="map_canvas3" style="float:left;width:100%;height:1024px"></div>
	<div><h4>Informasi Jalur</h4> 
	<strong>Titik A : <?=$nama_asal1;?></strong><br>
	<strong>Titik B : <?=$nama_pt1;?></strong>
	<p><button id="undo" style="display:block;margin:auto" onclick="undo()">Undo </button></p> 
	<div id="directions_panel" style="color:#fff" ></div></div><?php
}
?>