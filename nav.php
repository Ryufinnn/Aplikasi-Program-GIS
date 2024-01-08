<style type="text/css">
    .navbar-inverse {
    background-color: #2da2d1;
    font-size:18px;
    }
</style>
    <font color="black"><marquee direction="right" scrollamount="7" bgcolor="white">Selamat Datang di Webgis Pencarian PTS Kota Padang</font></marquee>
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php?pages=home" class="navbar-brand">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php
if ($acc=='t') { ?><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">DATABASE PTS <span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="index.php?pages=pt">Perguruan Tinggi</a></li>
  <li><a href="index.php?pages=fakultas">Fakultas</a></li>
  <li><a href="index.php?pages=prodi">Program Studi</a></li>
  <li><a href="index.php?pages=fasilitas">Fasilitas</a></li>
  <?php
if ($s_level=='1') {
  ?><li><a href="index.php?pages=jenjang">Jenjang Pendidikan</a></li>
  <li><a href="index.php?pages=kategori">Kategori</a></li>
  <li><a href="index.php?pages=dbjalur">Jalur</a></li>
  <li><a href="index.php?pages=account">Account</a></li><?php
}
  ?>
  
</ul>
  </li>
  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">LAPORAN <span class="caret"></span></a>
<ul class="dropdown-menu">
  <li><a href="index.php?pages=l_kt">Kategori</a></li>
  <li><a href="index.php?pages=l_ko">Pencarian Lokasi</a></li>
  <li><a href="index.php?pages=l_pt">Perguruan Tinggi</a></li>
  
</ul>
  </li> <?php } else { ?><li class=""><a href="index.php?pages=pt">PERGURUAN TINGGI</a></li>
        <li class=""><a href="index.php?pages=search">CARI</a></li>
        <li class=""><a href="index.php?pages=jalur">Pencarian Jalur</a></li><?php
}
        ?>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
<?php
if ($acc=="t"){ ?><li><a href="pages/profil.php"><span class="glyphicon glyphicon-user"></span></a></li><li><a href="pages/logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li><?php } else {
  ?><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"> </span> LOGIN <span class="caret"></span></a><ul class="dropdown-menu">
<li><a href="index.php?pages=loginadmin">ADMIN</a></li>
<li><a href="index.php?pages=loginpt">Perguruan Tinggi</a></li>
</ul></li><?php } ?>        
      </ul>
    </div>
  </div>
</div>