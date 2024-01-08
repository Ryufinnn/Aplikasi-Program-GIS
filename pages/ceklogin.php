<?php ob_start();?>
<?php session_start();?>

<?php
include '../admin/db_config.php';
$level=$_GET['level'];
if ($level=='loginadmin'){ $lvl='1'; } else { $lvl='2'; }
		$username = $_POST['username']; $password = md5($_POST['password']) ;
		$sql_c = "select * from account where username='$username' and password='$password' and level='$lvl' limit 1 ";
		$rst_c = mysqli_query($conn, $sql_c);
		if ($rst_c->num_rows==0){ header('location: ../index.php?pages='.$level.'&info=g');
		} else { $row_c = mysqli_fetch_assoc($rst_c); $username = $row_c['username']; $level = $row_c['level']; $_SESSION['s_username']=$username; $_SESSION['s_level']=$level; header('location: ../index.php'); //echo $_SESSION['s_level']; //echo $_SESSION['s_username'];
		} //echo "$sql_c"; ?>