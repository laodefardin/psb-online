<?php 
include '../koneksi.php';
session_start();
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['hapus'];

$hapus = "DELETE FROM peserta WHERE id = '$id'";
$proses = $koneksi->query($hapus);
if ($proses) {
	$_SESSION['pesan'] = 'Data Berhasil dihapus';
}
echo "<script> document.location.href='peserta';</script>";
die();
?>