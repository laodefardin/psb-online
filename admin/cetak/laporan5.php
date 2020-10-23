<?php
error_reporting(0);
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-pendaftaranulang.xls");
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
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='11'>DAFTAR PESERTA PENDAFTARAN ULANG</td>
	</tr>
</table>
<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='text-align:center;background:#f0f0f0'><b>No.</b></td>
		<td style='background:#f0f0f0'><b>Nama</b></td>
		<td style='background:#f0f0f0'><b>Jurusan</b></td>
		<td style='background:#f0f0f0'><b>Sekolah Asal</b></td>
		<td style='background:#f0f0f0'><b>Tahun Lulus</b></td>
		<td style='background:#f0f0f0'><b>Jenis Kelamin</b></td>
		<td style='background:#f0f0f0'><b>NISN</b></td>
		<td style='background:#f0f0f0'><b>NIK/No. KITAS</b></td>
		<td style='background:#f0f0f0'><b>Tempat Lahir</b></td>
		<td style='background:#f0f0f0'><b>Tanggal Lahir</b></td>
		<td style='background:#f0f0f0'><b>No. Registasi Akta Lahir</b></td>
		<td style='background:#f0f0f0'><b>Agama</b></td>
		<td style='background:#f0f0f0'><b>Kewarganegaraan</b></td>
		<td style='background:#f0f0f0'><b>Berkebutuhan Khusus</b></td>
		<td style='background:#f0f0f0'><b>Alamat Jalan</b></td>
		<td style='background:#f0f0f0'><b>RT / RW</b></td>
		<td style='background:#f0f0f0'><b>Nama Dusun</b></td>
		<td style='background:#f0f0f0'><b>Nama Kelurahan / Desa</b></td>
		<td style='background:#f0f0f0'><b>Kecamatan</b></td>
		<td style='background:#f0f0f0'><b>Kode Pos</b></td>
		<td style='background:#f0f0f0'><b>Lintang</b></td>
		<td style='background:#f0f0f0'><b>Bujur</b></td>
		<td style='background:#f0f0f0'><b>Tempat Tinggal</b></td>
		<td style='background:#f0f0f0'><b>Moda Transportasi</b></td>
		<td style='background:#f0f0f0'><b>Nomor KKS</b></td>
		<td style='background:#f0f0f0'><b>Anak Keberapa</b></td>
		<td style='background:#f0f0f0'><b>Penerima KPS/PKH</b></td>
		<td style='background:#f0f0f0'><b>No KPS/PKH</b></td>
		<td style='background:#f0f0f0'><b>Usulan Dari Sekolah (Layak PIP)</b></td>
		<td style='background:#f0f0f0'><b>Penerimaan KIP (Kartu Indonesia Pintar)</b></td>
		<td style='background:#f0f0f0'><b>Nomor KIP</b></td>
		<td style='background:#f0f0f0'><b>Nama Tertera di KIP</b></td>
		<td style='background:#f0f0f0'><b>Terima fisik Kartu (KIP)</b></td>
		<td style='background:#f0f0f0'><b>Alasan Layak PIP</b></td>
		<td style='background:#f0f0f0'><b>Bank</b></td>
		<td style='background:#f0f0f0'><b>No Rekening bank</b></td>
		<td style='background:#f0f0f0'><b>Rekening Atas Nama</b></td>
		<td style='background:#f0f0f0'><b>Nama Ayah</b></td>
		<td style='background:#f0f0f0'><b>NIK Ayah</b></td>
		<td style='background:#f0f0f0'><b>Tahun Lahir</b></td>
		<td style='background:#f0f0f0'><b>Pendidikan</b></td>
		<td style='background:#f0f0f0'><b>Pekerjaan</b></td>
		<td style='background:#f0f0f0'><b>Penghasilan Bulanan Ayah</b></td>
		<td style='background:#f0f0f0'><b>No Hp Ayah</b></td>
		<td style='background:#f0f0f0'><b>Berkebutuhan Khusus (Ayah)</b></td>
		<td style='background:#f0f0f0'><b>Nama Ibu</b></td>
		<td style='background:#f0f0f0'><b>NIK Ibu</b></td>
		<td style='background:#f0f0f0'><b>Tahun Lahir</b></td>
		<td style='background:#f0f0f0'><b>Pendidikan</b></td>
		<td style='background:#f0f0f0'><b>Pekerjaan</b></td>
		<td style='background:#f0f0f0'><b>Penghasilan Bulanan Ibu</b></td>
		<td style='background:#f0f0f0'><b>No Hp Ibu</b></td>
		<td style='background:#f0f0f0'><b>Berkebutuhan Khusus (Ibu)</b></td>
		<td style='background:#f0f0f0'><b>Nama Wali</b></td>
		<td style='background:#f0f0f0'><b>NIK Wali</b></td>
		<td style='background:#f0f0f0'><b>Pendidikan</b></td>
		<td style='background:#f0f0f0'><b>Pekerjaan</b></td>
		<td style='background:#f0f0f0'><b>Penghasilan Bulanan Wali</b></td>
		<td style='background:#f0f0f0'><b>No Hp Wali</b></td>
		<td style='background:#f0f0f0'><b>Nomor HP Peserta</b></td>
		<td style='background:#f0f0f0'><b>Email</b></td>
		<td style='background:#f0f0f0'><b>Tinggi Badan</b></td>
		<td style='background:#f0f0f0'><b>Berat Badan</b></td>
		<td style='background:#f0f0f0'><b>Jumlah Saudara Kandung</b></td>
		<td style='background:#f0f0f0'><b>Waktu Tempuh Ke sekolah (Jam/Menit)</b></td>
		<td style='background:#f0f0f0'><b>Jarak Tempat Tinggal Ke sekolah</b></td>
		<td style='background:#f0f0f0'><b>Jenis Prestasi</b></td>
		<td style='background:#f0f0f0'><b>Tingkat Prestasi</b></td>
		<td style='background:#f0f0f0'><b>Nama Prestasi</b></td>
		<td style='background:#f0f0f0'><b>Tahun Prestasi</b></td>
		<td style='background:#f0f0f0'><b>Penyelenggara</b></td>
		<td style='background:#f0f0f0'><b>Pringkat</b></td>
	</tr>
	<tr>
		<?php
		$result = $koneksi->query("SELECT * FROM peserta2 ORDER BY pilihan ASC");
		$data1 = mysqli_num_rows($result);
		$no=0; foreach ($result as $data): $no++
		?>
		<td><?php echo $no;?></td>
		<td><?php echo $data['nama_lengkap']; ?></a></td>
		<td><?php echo $data['pilihan']; ?></td>
		<td><?php echo $data['sekolah_asal']; ?></a></td>
		<td><?php echo $data['tahun_lulus']; ?></td>
		<td><?php echo $data['jk'];?></td>
		<td><?php echo $data['nisn']; ?></td>
		<td><?php echo $data['nik']; ?></td>
		<td><?php echo $data['tempat_lahir']; ?></td>
		<td><?php echo $data['tanggal_lahir']; ?></td>
		<td><?php echo $data['no_akta']; ?></td>
		<td><?php echo $data['agama']; ?></td>
		<td><?php echo $data['kewarganegaraan']; ?></td>
		<td><?php echo $data['kbh_khusus']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['rtrw']; ?></td>
		<td><?php echo $data['dusun']; ?></td>
		<td><?php echo $data['kelurahan']; ?></td>
		<td><?php echo $data['kecamatan']; ?></td>
		<td><?php echo $data['kode_pos']; ?></td>
		<td><?php echo $data['lintang']; ?></td>
		<td><?php echo $data['bujur']; ?></td>
		<td><?php echo $data['tempat_tinggal']; ?></td>
		<td><?php echo $data['moda_transpor']; ?></td>
		<td><?php echo $data['no_kks']; ?></td>
		<td><?php echo $data['anak_ke']; ?></td>
		<td><?php echo $data['kps']; ?></td>
		<td><?php echo $data['no_kps']; ?></td>
		<td><?php echo $data['layak_pip']; ?></td>
		<td><?php echo $data['kip']; ?></td>
		<td><?php echo $data['no_kip']; ?></td>
		<td><?php echo $data['nama_kip']; ?></td>
		<td><?php echo $data['fisik_kip']; ?></td>
		<td><?php echo $data['alasan_layak_pip']; ?></td>
		<td><?php echo $data['bank']; ?></td>
		<td><?php echo $data['no_rek']; ?></td>
		<td><?php echo $data['rek_nama']; ?></td>
		<td><?php echo $data['nama_ayah']; ?></td>
		<td><?php echo $data['nik_ayah']; ?></td>
		<td><?php echo $data['thn_lahir_ayah']; ?></td>
		<td><?php echo $data['pendidikan_ayah']; ?></td>
		<td><?php echo $data['pk_ayah']; ?></td>
		<td><?php echo $data['hasil_ayah']; ?></td>
		<td><?php echo $data['hp_ayah']; ?></td>
		<td><?php echo $data['khusus_ayah']; ?></td>
		<td><?php echo $data['nama_ibu']; ?></td>
		<td><?php echo $data['nik_ibu']; ?></td>
		<td><?php echo $data['thn_lahir_ibu']; ?></td>
		<td><?php echo $data['pendidikan_ibu']; ?></td>
		<td><?php echo $data['pk_ibu']; ?></td>
		<td><?php echo $data['hasil_ibu']; ?></td>
		<td><?php echo $data['hp_ibu']; ?></td>
		<td><?php echo $data['khusus_ibu']; ?></td>
		<td><?php echo $data['nama_wali']; ?></td>
		<td><?php echo $data['nik_wali']; ?></td>
		<td><?php echo $data['pendidikan_wali']; ?></td>
		<td><?php echo $data['pk_wali']; ?></td>
		<td><?php echo $data['hasil_wali']; ?></td>
		<td><?php echo $data['hp_wali']; ?></td>
		<td><?php echo $data['no_hp']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['tinggi_bdn']; ?></td>
		<td><?php echo $data['berat_badan']; ?></td>
		<td><?php echo $data['jml_saudara']; ?></td>
		<td><?php echo $data['wkt_tempuh']; ?></td>
		<td><?php echo $data['jarak_tmpt']; ?></td>
		<td><?php echo $data['jenis_prestasi']; ?></td>
		<td><?php echo $data['tngkt_prestasi']; ?></td>
		<td><?php echo $data['nama_prestasi']; ?></td>
		<td><?php echo $data['thn_prestasi']; ?></td>
		<td><?php echo $data['penyelenggara']; ?></td>
		<td><?php echo $data['pringkat']; ?></td>
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