<?php session_start(); if (isset($_SESSION['s_username'])) { $acc = 't'; $s_level=$_SESSION['s_level']; $s_username=$_SESSION['s_username']; } else { $acc = 'f'; $s_level=''; } ?> <?php include('admin/db_config.php'); ?>
<?php if (isset($_GET['pages'])){ $pgs = $_GET['pages']; } else { $pgs = 'home'; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GIS</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php if ($pgs=='home') { include 'key.php'; } ?>
</head>
<body <?php if ($pgs=='home') { ?>onload="load()"<?php } ?> class="bg-info">
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10"><img src="images/l2.jpg" width="100%"></div>
</div>
<hr class="btn-primary">
<div class="container">
<?php include 'nav.php'; ?>
<?php if (isset($_GET['info'])) { $info=$_GET['info']; if ($info=='s') { $a1 = 'success'; $a2='Tersimpan'; } elseif ($info=='d') { $a1 = 'warning'; $a2='Sudah Ada'; } else { $a1 = 'danger'; $a2='GAGAL'; } ?>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<div class='alert alert-<?=$a1;?>'>
  <a href="#" class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong><?=$a2;?> !!</strong>
</div></div>
  </div>
<?php } ?>
  <?php include 'pages.php'; ?>
  <hr>
</div>
<div class="row"><div class="text-center col-md-6 col-md-offset-3"><p>Copyright &copy; 2016 &middot;</p></div></div>
<!-- jQuery (necessary for Bootstrap"s JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<?php if ($pgs=="home"){ ?> <script> $(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip(); }); </script> <?php } ?>
<script> function goBack(){ window.history.back(); } </script>
 </body> </html>