<?php
include 'global_header.php'; 
?>
<?php
$namaBulan = array(
  1 => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$hariIni = time(); // menyimpan tanggal hari ini
$f_hari = date("M-d-Y", $hariIni); // format tanggal hari ini
$tahun = date("Y", $hariIni); // ambil tahun dari hari ini

$usernamed    =   $_SESSION["username"];

// include '../koneksi.php';
// if ($koneksi->connect_error) {
//   die("Connection failed: " . $koneksi->connect_error);
// }

if (isset($_POST['submit'])) {
  $username   =   $_SESSION["username"];
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
  $waktu = gmdate('d-m-Y H:i:s', time()+60*60*8);

  $sql = $koneksi->query('UPDATE `peserta` SET 
    `nama_lengkap`  = "'.$nama_lengkap.'",
    `alamat`    = "'.$alamat.'",
    `tempat_lahir`  = "'.$tempat_lahir.'",
    `tanggal_lahir` = "'.$tanggal_lahir.'",
    `jk`      = "'.$jk.'",
    `agama`     = "'.$agama.'",
    `no_hp`     = "'.$no_hp.'",
    `sekolah_asal`  = "'.$sekolah_asal.'",
    `tahun_lulus` = "'.$tahun_lulus.'",
    `nama_ayah`   = "'.$nama_ayah.'",
    `pk_ayah`   = "'.$pk_ayah.'",
    `nama_ibu`    = "'.$nama_ibu.'",
    `pk_ibu`    = "'.$pk_ibu.'",
    `alamat_ortu` = "'.$alamat_ortu.'",
    `hp_ortu`   = "'.$hp_ortu.'",
    `pilihan_1`   = "'.$pilihan_1.'",
    `pilihan_2`   = "'.$pilihan_2.'", 
    `jalur`     = "'.$jalur.'",
    `registrasi`     = "selesai",
    `waktu`     = "'.$waktu.'"
    WHERE `username` = "'.$username.'"');

  $_SESSION['pesan'] = 'Data Berhasil disimpan';
  echo "<script> document.location.href='./index'; </script>";
}

?>

<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="index" class="nav-link active"><i class="fe fe-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="aturan" class="nav-link"><i class="fe fe-box"></i> Syarat & Ketentuan</a>
          </li>
          <li class="nav-item">
            <a href="jadwal" class="nav-link "><i class="fe fe-calendar"></i> Jadwal</a>
          </li>
          <li class="nav-item">
            <a href="alur-pendaftaran" class="nav-link "><i class="fe fe-file"></i> Alur Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a href="pengumuman" class="nav-link "><i class="fe fe-bell"></i> Pengumuman</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="my-3 my-md-5">
  <div class="container">
    <div class="page-header">
      <h1 class="page-title">
        SELAMAT DATANG <?=$_SESSION["username"];?> DI SISTEM PPDB ONLINE SMK NEGERI 1 PAPALANG TAHUN AJARAN 2019
      </h1>
    </div>
    <div class="row row-cards">
      <div class="col-md-12">
        <div class="alert alert-warning"><a href="#" class="alert-link">Perhatian</a> Silahkan Isi Formulir dibawah sesuai dengan data Asli anda, jika tidak sesuai dengan data asli maka peserta di nyatakan gugur</div>

        <div class="row">
          <?php 
          $query = $koneksi->query("SELECT * FROM peserta WHERE username = '$_SESSION[username]'");
          foreach ($query as $data) {
            ?>
            <div class="col-lg-12">
              <form action="" method="post" class="card">
                <div class="card-header">
                  <h3 class="card-title">Identitas Calon Peserta Didik Baru</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Nama calon peserta didik </label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Sesuai Ijasah" value="<?php echo $data['nama_lengkap'];?>" required> 
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $data['alamat'];?>">
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="text" placeholder="Contoh 14-07-1996" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jk" class="form-control custom-select">
                         <option value="<?php echo $data['jk'];?>"><?php echo $data['jk'];?></option>
                         <option value="">Jenis Kelamin</option>
                         <option value="Laki-Laki">Laki-Laki</option>
                         <option value="Perempuan">Perempuan</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Agama</label>
                      <select name="agama" class="form-control custom-select" required>
                        <option value="<?php echo $data['agama'];?>"><?php echo $data['agama'];?></option>
                        <option value="Islam" >Islam</option>
                        <option value="Kristen" >Kristen</option>
                        <option value="Katolik" >Katolik</option>
                        <option value="Hindu" >Hindu</option>
                        <option value="Buddha" >Buddha</option>
                        <option value="Konghucu" >Konghucu</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">No. Handphone</label>
                      <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No Hp" value="<?php echo $data['no_hp'];?>">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Sekolah Asal</label>
                      <input type="text" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal" value="<?php echo $data['sekolah_asal'];?>" required>
                    </div>
                  </div>
                 <!--  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">NO. Peserta UN Sekolah Asal</label>
                      <input type="text" name="nomor_un" class="form-control" placeholder="masukkan nomor peserta UN" value="<?php echo $data['nomor_un'];?>" required>
                    </div>
                  </div> -->
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Tahun Lulus</label>
                      <select name="tahun_lulus" class="form-control custom-select" required>
                        <option value="<?php echo $data['tahun_lulus'];?>"><?php echo $data['tahun_lulus'];?></option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-header">
                <h3 class="card-title">Identitas Orang Tua/Wali</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Nama Ayah</label>
                      <input type="text" name="nama_ayah" class="form-control" value="<?php echo $data['nama_ayah'];?>" required>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Pekerjaan Ayah</label>
                      <input type="text" name="pk_ayah" class="form-control" value="<?php echo $data['pk_ayah'];?>">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Nama Ibu</label>
                      <input type="text" name="nama_ibu" class="form-control" value="<?php echo $data['nama_ibu'];?>" required>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Pekerjaan Ibu</label>
                      <input type="text" name="pk_ibu" class="form-control" value="<?php echo $data['pk_ibu'];?>">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Alamat Orang Tua</label>
                      <input type="text" name="alamat_ortu" class="form-control" value="<?php echo $data['alamat_ortu'];?>" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Telp/Hp Orang Tua</label>
                      <input type="text" name="hp_ortu" class="form-control" value="<?php echo $data['hp_ortu'];?>" required>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-header">
                <h3 class="card-title">Paket Program Keahlian yang dipilih</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Pilihan 1</label>
                      <select name="pilihan_1" class="form-control custom-select" required>
                        <option value="<?php echo $data['pilihan_1'];?>"><?php echo $data['pilihan_1'];?></option>
                        <option value="Teknologi Pengolahan Hasil Pertanian">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
                        <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan (TKJ)</option>
                        <option value="Teknik Audio Vidio">Teknik Audio Vidio (TAV)</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan (TKR)</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor (TBSM)</option>
                        <option value="Teknik Pengelasan">Teknik Pengelasan (T Las)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Pilihan 2</label>
                      <select name="pilihan_2" class="form-control custom-select" required>
                        <option value="<?php echo $data['pilihan_2'];?>"><?php echo $data['pilihan_2'];?></option>
                        <option value="Teknologi Pengolahan Hasil Pertanian">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
                        <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan (TKJ)</option>
                        <option value="Teknik Audio Vidio">Teknik Audio Vidio (TAV)</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan (TKR)</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor (TBSM)</option>
                        <option value="Teknik Pengelasan">Teknik Pengelasan (T Las)</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Jalur Yang Dipilih</label>
                      <select name="jalur" class="form-control custom-select" required>
                        <option value="<?php echo $data['jalur'];?>"><?php echo $data['jalur'];?></option>
                        <option value="Khusus">Khusus</option>
                        <option value="Umum">Umum</option>
                      </select>
                    </div>
                  </div>

                </div>
              </div>

              <div class="card-footer text-right">
                <div class="d-flex">
                  <button type="submit" name="submit" class="btn btn-primary ml-auto"><i class="fe fe-save"></i> Simpan</button>
                </div>
              </div>
            </form>
          <?php } ?>

        </div>
      </div>
    </div>

  </div>


</div>
</div>
</div>

<?php 
include 'global_footer.php'; 
?>