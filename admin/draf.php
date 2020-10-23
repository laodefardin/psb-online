<?php
include '../koneksi.php';
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['draf'];

$ubah = "UPDATE pengumuman set status = 'Draf' WHERE id_pengumuman = '$id'";

$proses = $koneksi->query($ubah);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di Draf';
}
echo "<script> document.location.href='./pengumuman';</script>";
?>