<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])){
	$pilihan = $_POST['pilihan'];
	$sekolah_asal = $_POST['sekolah_asal'];
	$tahun_lulus = $_POST['tahun_lulus'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$jk = $_POST['jk'];
	$nisn = $_POST['nisn'];
	$nik = $_POST['nik'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$no_akta = $_POST['no_akta'];
	$agama = $_POST['agama'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$kbh_khusus = $_POST['kbh_khusus'];
	$alamat = $_POST['alamat'];
	$rtrw = $_POST['rtrw'];
	$dusun = $_POST['dusun'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kode_pos = $_POST['kode_pos'];
	$lintang = $_POST['lintang'];
	$bujur = $_POST['bujur'];
	$tempat_tinggal = $_POST['tempat_tinggal'];
	$moda_transpor = $_POST['moda_transpor'];
	$no_kks = $_POST['no_kks'];
	$anak_ke = $_POST['anak_ke'];
	$kps = $_POST['kps'];
	$no_kps = $_POST['no_kps'];
	$layak_pip = $_POST['layak_pip'];
	$kip = $_POST['kip'];
	$no_kip = $_POST['no_kip'];
	$nama_kip = $_POST['nama_kip'];
	$fisik_kip = $_POST['fisik_kip'];
	$alasan_layak_pip = $_POST['alasan_layak_pip'];
	$bank = $_POST['bank'];
	$no_rek = $_POST['no_rek'];
	$rek_nama = $_POST['rek_nama'];

	$nama_ayah = $_POST['nama_ayah'];
	$nik_ayah = $_POST['nik_ayah'];
	$thn_lahir_ayah = $_POST['thn_lahir_ayah'];
	$pendidikan_ayah = $_POST['pendidikan_ayah'];
	$pk_ayah = $_POST['pk_ayah'];
	$hasil_ayah = $_POST['hasil_ayah'];
	$hp_ayah = $_POST['hp_ayah'];
	$khusus_ayah = $_POST['khusus_ayah'];

	$nama_ibu = $_POST['nama_ibu'];
	$nik_ibu = $_POST['nik_ibu'];
	$thn_lahir_ibu = $_POST['thn_lahir_ibu'];
	$pendidikan_ibu =$_POST['pendidikan_ibu'];
	$pk_ibu = $_POST['pk_ibu'];
	$hasil_ibu = $_POST['hasil_ibu'];
	$hp_ibu = $_POST['hp_ibu'];
	$khusus_ibu = $_POST['khusus_ibu'];

	$nama_wali = $_POST['nama_wali'];
	$nik_wali = $_POST['nik_wali'];
	$pendidikan_wali = $_POST['pendidikan_wali'];
	$pk_wali = $_POST['pk_wali'];
	$hasil_wali = $_POST['hasil_wali'];
	$hp_wali = $_POST['hp_wali'];

	$no_hp = $_POST['no_hp'];
	$email = $_POST['email'];

	$tinggi_bdn = $_POST['tinggi_bdn'];
	$berat_badan = $_POST['berat_badan'];
	$jml_saudara = $_POST['jml_saudara'];
	$wkt_tempuh = $_POST['wkt_tempuh'];
	$jarak_tmpt = $_POST['jarak_tmpt'];

	$jenis_prestasi = $_POST['jenis_prestasi'];
	$tngkt_prestasi = $_POST['tngkt_prestasi'];
	$nama_prestasi = $_POST['nama_prestasi'];
	$thn_prestasi = $_POST['thn_prestasi'];
	$penyelenggara = $_POST['penyelenggara'];
	$pringkat = $_POST['pringkat'];
}
?>

<?php 
$sql = $koneksi->query('INSERT INTO peserta2 (pilihan,sekolah_asal,tahun_lulus,nama_lengkap,jk,nisn,nik,tempat_lahir,tanggal_lahir,no_akta,agama,kewarganegaraan,kbh_khusus,alamat,rtrw,dusun,kelurahan,kecamatan,kode_pos,lintang,bujur,tempat_tinggal,moda_transpor,no_kks,anak_ke,kps,no_kps,layak_pip,kip,no_kip,nama_kip,fisik_kip,alasan_layak_pip,bank,no_rek,rek_nama,nama_ayah,nik_ayah,thn_lahir_ayah,pendidikan_ayah,pk_ayah,hasil_ayah,hp_ayah,khusus_ayah,nama_ibu,nik_ibu,thn_lahir_ibu,pendidikan_ibu,pk_ibu,hasil_ibu,hp_ibu,khusus_ibu,nama_wali,nik_wali,pendidikan_wali,pk_wali,hasil_wali,hp_wali,no_hp,email,tinggi_bdn,berat_badan,jml_saudara,wkt_tempuh,jarak_tmpt,jenis_prestasi,tngkt_prestasi,nama_prestasi,thn_prestasi,penyelenggara,pringkat) VALUES (
"'.$pilihan.'","'.$sekolah_asal.'","'.$tahun_lulus.'","'.$nama_lengkap.'","'.$jk.'","'.$nisn.'","'.$nik.'","'.$tempat_lahir.'","'.$tanggal_lahir.'","'.$no_akta.'","'.$agama.'","'.$kewarganegaraan.'","'.$kbh_khusus.'","'.$alamat.'","'.$rtrw.'","'.$dusun.'","'.$kelurahan.'","'.$kecamatan.'","'.$kode_pos.'","'.$lintang.'","'.$bujur.'","'.$tempat_tinggal.'","'.$moda_transpor.'","'.$no_kks.'","'.$anak_ke.'","'.$kps.'","'.$no_kps.'","'.$layak_pip.'","'.$kip.'","'.$no_kip.'","'.$nama_kip.'","'.$fisik_kip.'","'.$alasan_layak_pip.'","'.$bank.'","'.$no_rek.'","'.$rek_nama.'","'.$nama_ayah.'","'.$nik_ayah.'","'.$thn_lahir_ayah.'","'.$pendidikan_ayah.'","'.$pk_ayah.'","'.$hasil_ayah.'","'.$hp_ayah.'","'.$khusus_ayah.'","'.$nama_ibu.'","'.$nik_ibu.'","'.$thn_lahir_ibu.'","'.$pendidikan_ibu.'","'.$pk_ibu.'","'.$hasil_ibu.'","'.$hp_ibu.'","'.$khusus_ibu.'","'.$nama_wali.'","'.$nik_wali.'","'.$pendidikan_wali.'","'.$pk_wali.'","'.$hasil_wali.'","'.$hp_wali.'","'.$no_hp.'","'.$email.'","'.$tinggi_bdn.'","'.$berat_badan.'","'.$jml_saudara.'","'.$wkt_tempuh.'","'.$jarak_tmpt.'","'.$jenis_prestasi.'","'.$tngkt_prestasi.'","'.$nama_prestasi.'","'.$thn_prestasi.'","'.$penyelenggara.'","'.$pringkat.'")');
$_SESSION['pesan'] = 'DATA ANDA BERHASIL DI SIMPAN';
echo "<script> document.location.href='./proses-berhasil'; </script>";
?>