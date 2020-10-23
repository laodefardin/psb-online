<?php
include '../koneksi.php';
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['terbit'];

$ubah = "UPDATE pengumuman set status = 'Terbit' WHERE id_pengumuman = '$id'";

$proses = $koneksi->query($ubah);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di Terbitkan';
}
echo "<script> document.location.href='./pengumuman';</script>";
?>