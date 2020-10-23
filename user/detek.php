<?php 
session_start();
include '../koneksi.php';

$user = $_SESSION['username'];
$registrasi = $_SESSION['registrasi'];

$query = $koneksi->query("SELECT * FROM peserta WHERE username = '$user'");

$result = $query->fetch_array();

if ($registrasi === 'selesai'){
   // $_SESSION['pesan'] = 'Data ada ke halaman index';
  echo "<script> document.location.href='./index'; </script>";
}else{
   // $_SESSION['pesan'] = 'data tidak ada ke halaman formulir';
  echo "<script> document.location.href='./formulir'; </script>";
}
?>