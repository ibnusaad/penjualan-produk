<?php
if(!defined("INDEX")) die ("---");

if(isset($_GET['tampil'])) $tampil =  $_GET['tampil'];
else $tampil = "home";
?>

<div class='box'>
<?php
if($tampil=="home") include ("konten/home.php");

elseif($tampil=="halaman") include ("konten/halaman.php");
elseif($tampil=="galeri") include ("konten/galeri.php");
elseif($tampil=="artikel_detail") include ("konten/artikel_detail.php");
elseif($tampil=="kontak") include ("konten/kontak.php");
elseif($tampil=="kontak_proses") include ("konten/kontak_proses.php");
elseif($tampil=="pencarian") include ("konten/pencarian.php");
elseif($tampil=="komentar_proses") include ("konten/komentar_proses.php");
elseif($tampil=="bagan") include ("konten/bagan.html");
elseif($tampil=="maps") include ("konten/maps.php");
elseif($tampil=="info_detail") include ("konten/info_detail.php");
elseif($tampil=="ilmu_detail") include ("konten/ilmu_detail.php");
elseif($tampil=="islam_detail") include ("konten/islam_detail.php");
elseif($tampil=="islam") include ("konten/islam.php");
elseif($tampil=="download") include ("konten/download.php");
elseif( $tampil == "simpan" )	include("konten/simpan.php");




else echo"halaman tidak ditemukan";
?>
</div>