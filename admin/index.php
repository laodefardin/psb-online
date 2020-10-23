<?php
include 'global_header.php'; 
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
            <a href="peserta" class="nav-link "><i class="fe fe-box"></i> Peserta</a>
          </li>
          <li class="nav-item">
            <a href="user" class="nav-link"><i class="fe fe-printer mr-2"></i> User</a>
          </li>
          <li class="nav-item">
            <a href="laporan" class="nav-link "><i class="fe fe-file"></i> Laporan</a>
          </li>
          <li class="nav-item">
            <a href="pengumuman" class="nav-link "><i class="fe fe-bell"></i> Pengumuman</a>
          </li>
          <li class="nav-item">
            <a href="peserta-pendaftaran-ulang" class="nav-link "><i class="fe fe-bell"></i> Peserta Pendaftaran Ulang</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="my-3 my-md-5">
  <div class="container">
    <!-- <div class="page-header">
      <h1 class="page-title">
       SELAMAT DATANG <?=$_SESSION["username"];?> DI SISTEM PPDB ONLINE SMK NEGERI 1 PAPALANG TAHUN AJARAN 2019
     </h1>
   </div> -->
   <div class="row row-cards">
    <div class="col-md-12">
      <div class="alert alert-primary"><a href="#" class="alert-link">Selamat Datang, <?=$_SESSION["username"];?></a> Di Sistem PPDB Online SMK Negeri 1 Papalang Tahun Ajaran 2019.</div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <span class="stamp stamp-md bg-blue mr-3">
            <i class="fa fa-user"></i>
          </span>
          <div>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE registrasi = 'selesai'");
            $data = mysqli_num_rows($result);
            ?>
            <h4 class="m-0"><a href="peserta"><?php echo $data; ?> <small>Peserta</small></a></h4>
            <small class="text-muted">Jumlah Peserta</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <span class="stamp stamp-md bg-green mr-3">
            <i class="fa fa-calendar"></i>
          </span>
          <div>
            <h4 class="m-0"><a href="jadwal">Jadwal</a></h4>
            <small class="text-muted">Jadwal Pendaftaran</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <span class="stamp stamp-md bg-red mr-3">
            <i class="fa fa-drivers-license-o"></i>
          </span>
          <div>
            <h4 class="m-0"><a href="alur-pendaftaran">Alur Pendaftaran</a></h4>
            <small class="text-muted">Proses Pendaftaran</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card p-3">
        <div class="d-flex align-items-center">
          <span class="stamp stamp-md bg-yellow mr-3">
            <i class="fa fa-list-alt"></i>
          </span>
          <div>
            <h4 class="m-0"><a href="formulir-pendaftaran"> Formulir Pendaftaran</a></h4>
            <small class="text-muted">Form Pendaftaran
            </small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-7 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pilihan Pertama</h4>
        </div>
        <table class="table card-table">
          <tbody><tr>
            <td width="1"></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknologi Pengolahan Hasil Pertanian'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknologi Pengolahan Hasil Pertanian (TPHP)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Komputer Dan Jaringan (TKJ)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Kendaraan Ringan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Kendaraan Ringan (TKR)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Bisnis Sepeda Motor (TBSM)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Pengelasan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Pengelasan (T Las)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Audio Vidio'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Audio Vidio (TAV)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
        </tbody></table>
      </div>
    </div>


    <div class="col-sm-7 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pilihan Kedua</h4>
        </div>
        <table class="table card-table">
          <tbody><tr>
            <td width="1"></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknologi Pengolahan Hasil Pertanian'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknologi Pengolahan Hasil Pertanian (TPHP)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknik Komputer Dan Jaringan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Komputer Dan Jaringan (TKJ)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknik Kendaraan Ringan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Kendaraan Ringan (TKR)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknik Bisnis Sepeda Motor'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Bisnis Sepeda Motor (TBSM)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknik Pengelasan'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Pengelasan (T Las)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
          <tr>
            <td></td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_2 = 'Teknik Audio Vidio'");
            $data = mysqli_num_rows($result);
            ?>
            <td>Teknik Audio Vidio (TAV)</td>
            <td class="text-right"><?php echo $data; ?></td>
          </tr>
        </tbody></table>
      </div>
    </div>



    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <table class="table card-table">
            <thead>
              <tr>
                <th>NO</th>
                <th>PILIHAN 1</th>
                <th>JUMLAH</th>
                <th>PILIHAN 2</th>
                <th>JUMLAH</th>
                <th>KUOTA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>TKJ</td>
                <?php 
                $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan'");
                $data = mysqli_num_rows($result);
                ?>
                <td><?php echo $data; ?></td>
                <td>TPHP</td>
                <?php 
                $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan' AND pilihan_2 = 'Teknologi Pengolahan Hasil Pertanian'");
                $data = mysqli_num_rows($result);
                ?>
                <td><?php echo $data; ?></td>
                <td>72</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>TAV</td> 
                <?php 
                $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan' AND pilihan_2 = 'Teknik Audio Vidio'");
                $data = mysqli_num_rows($result);
                ?>              
                <td><?php echo $data; ?></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>TKR</td>
                <?php 
                $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan' AND pilihan_2 = 'Teknik Kendaraan Ringan'");
                $data = mysqli_num_rows($result);
                ?>
                <td><?php echo $data; ?></td>
              </tr>
              <tr>
               <td></td>
               <td></td>
               <td></td>
               <td>TBSM</td>
               <?php 
               $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan' AND pilihan_2 = 'Teknik Bisnis Sepeda Motor'");
               $data = mysqli_num_rows($result);
               ?>
               <td><?php echo $data; ?></td>
             </tr>
             <tr>
               <td></td>
               <td></td>
               <td></td>
               <td>T LAS</td>
               <?php 
               $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Komputer Dan Jaringan' AND pilihan_2 = 'Teknik Pengelasan'");
               $data = mysqli_num_rows($result);
               ?>
               <td><?php echo $data; ?></td>
             </tr>
             <tr>
              <td>2</td>
              <td>TBSM</td>
              <?php 
              $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor'");
              $data = mysqli_num_rows($result);
              ?>
              <td><?php echo $data; ?></td>
              <td>TAV</td>
              <?php 
              $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor' AND pilihan_2 = 'Teknik Audio Vidio'");
              $data = mysqli_num_rows($result);
              ?>
              <td><?php echo $data; ?></td>
              <td>72</td>
            </tr>
            <tr>
             <td></td>
             <td></td>
             <td></td>
             <td>TKR</td>
             <?php 
             $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor' AND pilihan_2 = 'Teknik Kendaraan Ringan'");
             $data = mysqli_num_rows($result);
             ?>
             <td><?php echo $data; ?></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td>TKJ</td>
             <?php 
             $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor' AND pilihan_2 = 'Teknik Komputer Dan Jaringan'");
             $data = mysqli_num_rows($result);
             ?>
             <td><?php echo $data; ?></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
             <td></td>
             <td>T LAS</td>
             <?php 
             $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Bisnis Sepeda Motor' AND pilihan_2 = 'Teknik Pengelasan'");
             $data = mysqli_num_rows($result);
             ?>
             <td><?php echo $data; ?></td>
           </tr>
           <tr>
            <td>3</td>
            <td>TLAS</td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Pengelasan'");
            $data = mysqli_num_rows($result);
            ?>
            <td><?php echo $data; ?></td>
            <td>-</td>
            <td>-</td>
            <td>48</td>
          </tr>
          <tr>
            <td>4</td>
            <td>TPHP</td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknologi Pengolahan Hasil Pertanian'");
            $data = mysqli_num_rows($result);
            ?>
            <td><?php echo $data; ?></td>
            <td>-</td>
            <td>-</td>
            <td>96</td>
          </tr>
          <tr>
            <td>5</td>
            <td>TAV</td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Audio Vidio'");
            $data = mysqli_num_rows($result);
            ?>
            <td><?php echo $data; ?></td>
            <td>-</td>
            <td>-</td>
            <td>72</td>
          </tr>
          <tr>
            <td>6</td>
            <td>TKR</td>
            <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE pilihan_1 = 'Teknik Kendaraan Ringan'");
            $data = mysqli_num_rows($result);
            ?>
            <td><?php echo $data; ?></td>
            <td>-</td>
            <td>-</td>
            <td>72</td>
          </tr>
          <tr>
            <td></td>
            <td><b>TOTAL CPDB</b></td>
             <?php 
            $result = $koneksi->query("SELECT * FROM peserta WHERE registrasi = 'selesai'");
            $data = mysqli_num_rows($result);
            ?>
            <td><b><?php echo $data; ?></b></td>
            <td></td>
            <td></td>
            <td><b><?php 
            $a = 72+72+48+96+72+72;
            echo $a;
            ?></b></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--     <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="text-wrap p-lg-6">
            <h2 class="mt-0 mb-4">Persyaratan Pendaftaran Jalur Khusus </h2>
            <ol>
              <li>Prestasi Pada Bidang Akademik
                <ul>
                  <li>Meraih Prikat 3 besar mulai dari kelas VII sampai dengan Kelas IX Dibuktikan Dengan foto copy rapor dari kelas VII sampai dengan Kelas IX</li>
                </ul>
              </li>
              <li>Prestasi Pada Bidang Olahraga Dan Seni
                <ul>
                  <li>Memiliki Sertifikat Minimal Tingkat Provinsi Dibuktikan Dengan Foto copy sertifikat</li>
                </ul>
              </li>
              <li>Mengisi Formulir Yang Disediakan 
              </li>
            </ol>
            
            <h3 id="build-tabler-locally">Persyaratan Pendaftaran Jalur Umum </h3>
            <ol>
              <li>Foto Copy Ijazah/Surat Keterangan Lulus (SKL)
              </li>
              <li>Mengisi  formulir yang disediakan
              </li>
            </ol>
            
            <p>Untuk Mengisi Formulir Silahkan Klik Disini <a href="#">Formulir Pendaftaran</a>.</p>

          </div>
        </div>
      </div>
    </div> -->


  </div>

</div>
</div>
</div>

<?php 
include 'global_footer.php'; ?>