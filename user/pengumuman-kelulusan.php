<?php 
include 'global_header.php'; 
?>

<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="index" class="nav-link "><i class="fe fe-home"></i> Home</a>
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
            <a href="pengumuman" class="nav-link active"><i class="fe fe-bell"></i> Pengumuman</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="my-3 my-md-5">
  <div class="container">

   <div class="row row-cards">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="text-wrap p-lg-6">
            <?php 
            $user = $_SESSION['username'];
            $query = $koneksi->query("SELECT * FROM peserta WHERE username = '$user'");
            foreach ($query as $data){
              $status = $data['status'];

              if ($status === 'Lulus'){?>
                <div class="alert alert-primary alert-dismissible">
                  <center>
                    <h4><strong><?php echo $data['nama_lengkap']; ?></strong></h4>
                    
                    Selamat! <br>
                    Kamu Lolos sobat!<br>
                    <p>
                      Selamat ya.. Kamu berhasil lolos di Tahapan Ujian Seleksi Penerimaan Peserta Didik Baru SMK Negeri 1 Papalang.<br></p>
                      <p>
                        Jurusan yang anda lulusi adalah <strong>Nama Jurusan </strong></p>
                        <p>
                          Tahap selanjutnya adalah Pendaftaran Ulang bagi peserta yang lulus tes.<br>
                        
                        Silahkan klik link berikut untuk melakukan pendaftaran ulang</p>
                        Pendaftaran Ulang akan dibuka pada tanggal 03 sampai 06 Juli 2019.
                        <p>
                        <br>Goodluck sobat <br>
                        Salam sukses!</p>
                      </center>
                    </div>
                  <?php } else {?>
                   <div class="alert alert-primary alert-dismissible">
                    <center>
                      <h2><strong>Semangat pageee <?php echo $data['nama_lengkap']; ?></strong></h2>
                      <p>
                        PPBD SMK Negeri 1 Papalang kembali menyapa <br>
                        Kamu belum berhasil lulus di Jurusan yang kamu pilih  <br>
                     namun kamu masih bisa memilih jurusan lain yang kouta-nya belum terpenuhi</p>

                     untuk lebih jelasnya dapat menghubungi Panita PPDB di Sekretariat bersama orang tua.
                     <br>
                      <p>Terima kasih,<br>
                      Panitia Program Penerimaan Peserta Didik Baru</p>
                    </div>
                  </center>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div> 

    </div>

  </div>
</div>
</div>

<?php 
include 'global_footer.php'; ?>