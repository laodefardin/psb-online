<title>Bukti Registrasi </title>
<body onload="window.print()">

	<?php
	error_reporting(0);
	session_start();
	include '../../koneksi.php';
	$user = $_SESSION['username'];
	?>

	<table width="98%" border="0" cellpadding="0" cellspacing="0" style='border-collapse:collapse;margin:0 auto'>
		<tbody>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td width="13%" rowspan="6" valign="top"><div align="center"><img style="width:100px;" src="logo.gif"></div></td>
				<td width="1%" rowspan="6">&nbsp;</td>
				<td align="center" width="86%"><h3 style="margin:0;"><strong>BUKTI REGISTRASI AKUN</strong></h3></td>
			</tr>
			<tr>
				<td align="center"><h3 style="margin:0;"><strong>SISTEM PENERIMAAN PESERTA DIDIK BARU (PPDB)</strong></h3></td>
			</tr>
			<tr>
				<td align="center"><h3 style="margin:0;">SMK NEGERI 1 PAPALANG</h3></td>
			</tr>
			<tr>
				<td align="center"><h3 style="margin:0;">TAHUN AJARAN 2019</h3></td>
			</tr>
			<tr>
				<td align="center"></td>
			</tr>
		</tbody></table>
	</table>

	<table width="98%">
		<tr><td><hr style='border:1px solid #000'></tr>
		</table>

		<table width="98%" border="0" align="center" cellpadding="5" cellspacing=0 style='border-collapse:collapse;margin:0 auto'>
			<?php 
			$result = $koneksi->query("SELECT * FROM peserta WHERE username = '$_SESSION[username]'");
			foreach ($result as $data) {
			?>
			<tr>
				<th width="250px"></th>
				<th width="50px"></th>
				<th width="25px"></th>
			</tr>
			<tr>
				<td style='border:hidden' colspan='14'></td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td width="250px">Nama</td>
				<td>:</td>
				<td><?php echo $data['nama_lengkap'];?></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $data['tempat_lahir'];?> / <?php echo $data['tanggal_lahir'];?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $data['jk'];?></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><?php echo $data['sekolah_asal'];?></td>
			</tr>
			<tr>
				<td>Tahun Lulus</td>
				<td>:</td>
				<td><?php echo $data['tahun_lulus'];?></td>
			</tr>
			<tr>
				<td>Jalur Pendaftaran</td>
				<td>:</td>
				<td><?php echo $data['jalur'];?></td>
			</tr>
			<tr>
				<td><b>Paket Program Keahlian yang dipilih</b></td>
			</tr>
			<tr>
				<td>Pilihan Pertama</td>
				<td>:</td>
				<td><?php echo $data['pilihan_1'];?></td>
			</tr>
			<tr>
				<td>Pilihan Kedua</td>
				<td>:</td>
				<td><?php echo $data['pilihan_2'];?></td>
			</tr>
			<tr>
				<td>Waktu Registrasi</td>
				<td>:</td>
				<td><?php echo $data['waktu'];?></td>
			</tr>
			<tr>
				<td style='border:hidden' colspan='14'></td>
			</tr>
			<tr>
				<td style='border:hidden' colspan='14'>Selamat Anda telah berhasil registrasi tahap awal pada portal Sistem Penerimaan Peserta Didik SMK Negeri 1 PAPALANG Tahun Ajaran 2019</td>
			</tr>
			<td style='text-align:center;' colspan='14'>Demikian data pribadi ini saya buat dengan sebenarnya dan bila ternyata isian yang dibuat tidak benar saya bersedia  di nyatakan gugur</td>
			<tr>
				<td style='border:hidden' colspan='14'>Silahkan membawa bukti registrasi ini saat pengambilan Kartu Ujian</td>
			</tr>
			<tr>
			</tr>
		<?php } ?>
		</table>

	</body>