<?php
if (isset($_GET['search'])){
	$search=$_GET['search'];
} else {
	$search='';
}
?>
<div class="row"> <div class="col-md-9"><h2>Home</h2> <div id='map' style='width: 100%; height: 500px'></div> </div>
	<div class="col-md-3">
	<form method="POST" action="r1.php">
		<input type="text" name="search" class="form-control" minlength="5" required="required" value="<?=$search;?>"><br>
		<button class="btn btn-success btn-nd" type="submit">Cari</button>
	</form>
</div>
</div>