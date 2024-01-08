<?php
if (isset($_POST['sv'])){
	if ($ac=='edit') { $file = 'images/pt/'.$gambar.''; }
	$err = 'false'; $pesan =''; $folder = 'images/pt/';
	$file_type = array('jpg','jpeg','png','gif','bmp'); $max_size = 1024000; //1 MB
	$file_name = $_FILES['file_upload']['name'];
	$file_size = $_FILES['file_upload']['size'];
	$explode = explode('.', $file_name);
	$extensi = $explode[count($explode)-1];
	if (!in_array($extensi, $file_type)){ $err = 'true'; $pesan .= '- Type File Tidak Sesuai <br>'; }
	if ($file_size > $max_size) { $err = 'true'; $pesan .= '- Ukuran File Melebihi Batas Maximum <br>'; }
	if ($err=='true'){ ?><div class='alert alert-warning'>
  <a href="#" class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong><?=$pesan;?></strong>
</div><?php } else { if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $folder.$file_name)){
			if ($ac=='edit') { unlink($file);
				$update = "update pt set gambar='".$file_name."' where id_pt='$id_pt' ";
				mysqli_query($conn, $update); header('location: index.php?pages=pt&ac=edit&id='.$id_pt.''); //echo "$file";
			}
			else { $id_pt = $_POST['id_pt']; $nama_pt = $_POST['nama_pt']; $alamat_pt = $_POST['alamat_pt']; $kode_pos = $_POST['kode_pos']; $akreditasi_pt = $_POST['akreditasi_pt']; $telp = $_POST['telp']; $email = $_POST['email']; $website = $_POST['website']; $skpt = $_POST['skpt']; $tanggal_skpt = $_POST['tanggal_skpt']; $date_pt = $_POST['date_pt']; $id_kategori = $_POST['id_kategori']; $x = $_POST['x']; $y = $_POST['y']; $insert = "insert into pt (id_pt, nama_pt, alamat_pt, kode_pos, akreditasi_pt, telp, email, website, skpt, tanggal_skpt, date_pt, id_kategori, x, y, gambar) values ('$id_pt', '$nama_pt', '$alamat_pt', '$kode_pos','$akreditasi_pt', '$telp', '$email', '$website', '$skpt', '$tanggal_skpt', '$date_pt', '$id_kategori', '$x', '$y', '$file_name') ";
				if (mysqli_query($conn, $insert)){ $info='s'; } else { $info='g'; } ?>
				<!--<script type="text/javascript">window.location="index.php?pages=pt&info=<?=$info;?>"</script>-->
				<?php
				echo "$insert";
				 } } } } ?>