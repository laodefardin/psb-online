<?php 
include '../koneksi.php';
session_start();
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['hapus'];

$hapus = "DELETE FROM pengumuman WHERE id_pengumuman = '$id'";
$proses = $koneksi->query($hapus);
if ($proses) {
	$_SESSION['pesan'] = 'Data Berhasil dihapus';
}
echo "<script> document.location.href='pengumuman';</script>";
die();
?>