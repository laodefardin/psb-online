<?php 
include '../koneksi.php';
// $username   =   $_SESSION["username"];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat     = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$jk       = $_POST['jk'];
$agama      = $_POST['agama'];
$no_hp      = $_POST['no_hp'];
$sekolah_asal   =   $_POST['sekolah_asal'];
$tahun_lulus  = $_POST['tahun_lulus'];
$nama_ayah    = $_POST['nama_ayah'];
$pk_ayah    = $_POST['pk_ayah'];
$nama_ibu   = $_POST['nama_ibu'];
$pk_ibu     = $_POST['pk_ibu'];
$alamat_ortu  = $_POST['alamat_ortu'];
$hp_ortu    = $_POST['hp_ortu'];
$pilihan_1    = $_POST['pilihan_1'];
$pilihan_2    = $_POST['pilihan_2'];
$jalur      = $_POST['jalur'];

echo $sql = $koneksi->query('UPDATE peserta SET 
  nama_lengkap  = "$nama_lengkap",
  alamat    = "$alamat",
  tempat_lahir  = "$tempat_lahir",
  tanggal_lahir = "$tanggal_lahir",
  jk      = "$jk",
  agama     = "$agama",
  no_hp     = "$no_hp",
  sekolah_asal  = "$sekolah_asal",
  tahun_lulus = "$tahun_lulus",
  nama_ayah   = "$nama_ayah",
  pk_ayah   = "$pk_ayah",
  nama_ibu    = "$nama_ibu",
  pk_ibu    = "$pk_ibu",
  alamat_ortu = "$alamat_ortu",
  hp_ortu   = "$hp_ortu",
  pilihan_1   = "$pilihan_1",
  pilihan_2   = "$pilihan_2", 
  jalur     = "$jalur"
  WHERE `id` = "$id_peserta"');

$_SESSION['pesan'] = 'Data Berhasil disimpan';
  // echo "<script> document.location.href='./peserta'; </script>";
?>