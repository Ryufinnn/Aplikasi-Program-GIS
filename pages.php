<?php
if (isset($_REQUEST['pages'])){
  $pages=$_REQUEST['pages'];
} else {
  $pages='home';
}
switch ($pages) {
  case ($pages=='loginadmin' or $pages=='loginpt'): include 'pages/login.php'; break;
  case 'pt': include 'pages/pt.php'; break;
  case 'view': include 'pages/view.php'; break;
  case 'fakultas': include 'pages/fakultas.php'; break;
  case 'prodi': include 'pages/prodi.php'; break;
  case 'fasilitas': include 'pages/fasilitas.php'; break;
  case 'jenjang': include 'pages/jenjang.php'; break;
  case 'kategori': include 'pages/kategori.php'; break;
  case 'account': include 'pages/account.php'; break;
  case 'jalur': include 'pages/jalur.php'; break;
  case 'dbjalur': include 'pages/dbjalur.php'; break;
  case 'acpt': include 'admin/ac/acpt.php'; break;
  case 'acaccount': include 'admin/ac/acaccount.php'; break;
  case 'acfakultas': include 'admin/ac/acfakultas.php'; break;
  case 'acprodi': include 'admin/ac/acprodi.php'; break;
  case 'acfasilitas': include 'admin/ac/acfasilitas.php'; break;
  case 'acjenjang': include 'admin/ac/acjenjang.php'; break;
  case 'ackategori': include 'admin/ac/ackategori.php'; break;
  case 'acjalur': include 'admin/ac/acjalur.php'; break;
  case 'l_pt': include 'pages/l_pt.php'; break;
  case 'l_kt': include 'pages/l_kt.php'; break;
  case 'l_ko': include 'pages/l_ko.php'; break;
   case 'l_account': include 'pages/l_account.php'; break;
  
  case 'search': include 'pages/search.php'; break;
  default: include ('pages/home.php'); break;
} ?>