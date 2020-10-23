<?php
include 'global_header.php'; 
?>
<?php
$namaBulan = array(
  1 => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$hariIni = time(); // menyimpan tanggal hari ini
$f_hari = date("M-d-Y", $hariIni); // format tanggal hari ini
$tahun = date("Y", $hariIni); // ambil tahun dari hari ini

$username    =   $_SESSION["username"];
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
        <div class="alert alert-primary"><a href="#" class="alert-link">Perhatian</a> Periksa Kembali Data Anda, jika sudah benar silakan Klik tombol Cetak disamping kanan untuk mencetak bukti registrasi</div>
        <?php 
    // tampilkan pesan jika ada
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
          echo '<div class="pesan">
          <div class="alert alert-warning">  <strong>Selamat </strong>'.$_SESSION['pesan'].'</div></div>';
        }
    // tampilkan pesan error jika ada
        $_SESSION['pesan'] = '';
        ?>

        <div class="row">
          <div class="col-lg-3 order-lg-1 mb-4">
            <form class="form-horizontal" method="POST" target="_blank" action="cetak/bukti-registrasi">
              <button type="submit" class="btn btn-block btn-danger mb-6"><i class="fe fe-printer mr-2"></i>Cetak Bukti Registrasi</button>
            </form>
            <!-- Getting started -->
          <!--   <div class="list-group list-group-transparent mb-0">
              <a href="../docs/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Introduction</a>
            </div> -->
            <!-- Components -->
    <!--         <div class="list-group list-group-transparent mb-0">
              <a href="../docs/alerts.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Alerts</a>
              <a href="../docs/avatars.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Avatars</a>
              <a href="../docs/buttons.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-plus-square"></i></span>Buttons</a>
              <a href="../docs/colors.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-feather"></i></span>Colors</a>
              <a href="../docs/cards.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-image"></i></span>Cards</a>
              <a href="../docs/charts.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-pie-chart"></i></span>Charts</a>
              <a href="../docs/form-components.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-check-square"></i></span>Form components</a>
              <a href="../docs/tags.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags</a>
              <a href="../docs/typography.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-type"></i></span>Typography</a>
            </div> -->
          </div>
          <?php 
          $query = $koneksi->query("SELECT * FROM peserta WHERE username = '$_SESSION[username]'");
          foreach ($query as $data) {
            ?>
            <div class="col-lg-9">
              <form action="insert.php" method="post" class="card">
                <div class="card-header">
                  <h3 class="card-title">Identitas Calon Peserta Didik Baru</h3>
                  <a href="formulir" class="btn btn-primary ml-auto">Edit Bioadata</a>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Nama calon peserta didik </label>
                        <div class="form-control-plaintext">
                          <?php echo $data['nama_lengkap'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <div class="form-control-plaintext">
                          <?php echo $data['alamat'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Tempat Lahir</label>
                        <div class="form-control-plaintext">
                          <?php echo $data['tempat_lahir'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">Tanggal Lahir</label>
                        <div class="form-control-plaintext">
                          <?php echo $data['tanggal_lahir'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-control-plaintext">
                          <?php echo $data['jk'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                      <div class="form-group">
                        <label class="form-label">Agama</label>
                        <div class="form-control-plaintext">
                          <?php echo $data['agama'];?>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <label class="form-label">No. Handphone</label>
                        <div class="form-control-plaintext">
                         <?php echo $data['no_hp'];?>
                       </div>
                     </div>
                   </div>
                   <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Sekolah Asal</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['sekolah_asal'];?>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">NO. Peserta UN Sekolah Asal</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['nomor_un'];?>
                      </div>
                    </div>
                  </div> -->
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Tahun Lulus</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['tahun_lulus'];?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-header">
                <h3 class="card-title">Identitas Orang Tua/Wali</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Nama Ayah</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['nama_ayah'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Pekerjaan Ayah</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['pk_ayah'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Nama Ibu</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['nama_ibu'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Pekerjaan Ibu</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['pk_ibu'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Alamat Orang Tua</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['alamat_ortu'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Telp/Hp Orang Tua</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['hp_ortu'];?>
                      </div>
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
                      <div class="form-control-plaintext">
                        <?php echo $data['pilihan_1'];?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Pilihan 2</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['pilihan_2'];?>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Jalur Yang Dipilih</label>
                      <div class="form-control-plaintext">
                        <?php echo $data['jalur'];?>
                      </div>
                    </div>
                  </div>

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