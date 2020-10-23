<?php
error_reporting(0);
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-ppbd.xls");
include '../../koneksi.php';
?>

<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='12'><h3 style="margin-bottom: -15px;"><strong>PEMERINTAH PROVINSI SULAWESI BARAT</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='12'><h3 style="margin-bottom: -15px;"><strong>DINAS PENDIDIKAN DAN KEBUDAYAAN</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='12'><h3 style="margin-bottom: -15px;"><strong>SMK NEGERI 1 PAPALANG</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='12'><h3 style="margin-bottom: -15px;"><strong>PENERIMAAN PESERTA DIDIK BARU TAHUN 2019</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='12'><h5 style="margin-bottom: -15px;"><strong>Alamat : Jl. Poros Mamuju - Tarailu Km 75 Kecamatan Papalang, Kab. Mamuju</strong></h5></td>
	</tr>
	<p></p>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='11'>DAFTAR PESERTA YANG SUDAH REGISTRASI</td>
	</tr>
</table>
<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='text-align:center;background:#f0f0f0'><b>No.</b></td>
		<td style='background:#f0f0f0'><b>Tanggal</b></td>
		<td style='background:#f0f0f0'><b>Nama</b></td>
		<td style='background:#f0f0f0'><b>Tempat Lahir</b></td>
		<td style='background:#f0f0f0'><b>Tanggal Lahir</b></td>
		<td style='background:#f0f0f0'><b>Jenis Kelamin</b></td>
		<td style='background:#f0f0f0'><b>Sekolah Asal</b></td>
		<td style='background:#f0f0f0'><b>Pilihan 1</b></td>
		<td style='background:#f0f0f0'><b>Pilihan 2</b></td>
		<td style='background:#f0f0f0'><b>Jalur</b></td>
		<td style='background:#f0f0f0'><b>No Hp Siswa</b></td>
		<td style='background:#f0f0f0'><b>No Hp Orang Tua</b></td>
	</tr>
	<tr>
		<?php
		$result = $koneksi->query("SELECT * FROM peserta WHERE registrasi = 'selesai' ORDER BY nama_lengkap ASC");
		$data1 = mysqli_num_rows($result);
		$no=0; foreach ($result as $data): $no++
		?>
		<td><?php echo $no;?></td>
		<td><?php echo substr($data['waktu'],0,10);?></td>
		<td><?php echo $data['nama_lengkap']; ?></a></td>
		<td><?php echo $data['tempat_lahir']; ?></td>
		<td><?php echo $data['tanggal_lahir']; ?></a></td>
		<td><?php echo $data['jk']; ?></td>
		<td><?php echo $data['sekolah_asal'];?></td>
		<td><?php echo $data['pilihan_1']; ?></td>
		<td><?php echo $data['pilihan_2']; ?></td>
		<td><?php echo $data['jalur']; ?></td>
		<td><?php echo $data['no_hp']; ?></td>
		<td><?php echo $data['hp_ortu']; ?></td>
	</tr>
<?php endforeach; ?>
</table>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center;font-weight:bold' colspan='12'>Jumlah Peserta = <?php echo $data1 ?></td>
	</tr>
</table>

<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>