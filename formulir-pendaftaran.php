<?php 
include 'global_header.php'; 
?>

<?php
include 'koneksi.php';
session_start();

if ($koneksi->connect_error){
  die("Connection failed " . $koneksi->connect_error);
}

if (isset($_POST['submit'])){
  $username = htmlentities(strip_tags(trim($_POST['username'])));
  $password = htmlentities(strip_tags(trim($_POST['password'])));
  $konfirmasi_password = htmlentities(strip_tags(trim($_POST['konfirmasi_password'])));

  $username = $koneksi->escape_string($username);
  $password = $koneksi->escape_string($password);
  $konfirmasi_password = $koneksi->escape_string($konfirmasi_password);

  if(strlen($password) >= 8){

    if ($password == $konfirmasi_password) {
      $password_sha1 = sha1($password);

      // $user_check = mysqli_num_rows($koneksi, "SELECT * FROM user WHERE username = '$username'");

      $query = "SELECT * FROM peserta WHERE username = '$username'";
      $result = $koneksi->query($query);
      $user_check = $result->num_rows;

      if ($user_check > 0){
        $_SESSION['pesan'] = 'Maaf Username sudah ada yang pakai. Ulangi lagi';
      }else{
        $query = $koneksi->query('INSERT INTO peserta (username, password, level) VALUES ("'.$username.'","'.$password_sha1.'","Peserta")');

        // $sql = $koneksi->query('INSERT INTO peserta (
        //   nama_lengkap, alamat, tempat_lahir, tanggal_lahir, jk, agama, no_hp, sekolah_asal, tahun_lulus, nama_ayah, pk_ayah, nama_ibu, pk_ibu, alamat_ortu, hp_ortu, pilihan_1, pilihan_2, pilihan_3, jalur) VALUES (
        //   "","","","","","","","","","","","","","","","","","","")');

        if($query){
          echo "<script>alert('Berhasil, Sekarang anda akan di arahkan ke Halaman Login, dan Mengisi Formulir pendaftaran');window.location='login'</script>";
        }else{
          $_SESSION['pesan'] = 'Gagal Menyimpan';
        }
      }
    }else{
      $_SESSION['pesan'] = 'Password dan Konfirmasi Password tidak sama, masukkan kembali';
    }
  }else{
    $_SESSION['pesan'] = 'Minimal Password yang di masukkan 8 Karakter, Ulangi Lagi';
  }
}
?>

<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item">
            <a href="index" class="nav-link"><i class="fe fe-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="aturan" class="nav-link "><i class="fe fe-box"></i> Syarat & Ketentuan</a>
          </li>
          <li class="nav-item">
            <a href="jadwal" class="nav-link "><i class="fe fe-calendar"></i> Jadwal</a>
          </li>
          <li class="nav-item">
            <a href="alur-pendaftaran" class="nav-link "><i class="fe fe-file"></i> Alur Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a href="peserta" class="nav-link "><i class="fe fe-calendar"></i> Peserta</a>
          </li>
          <li class="nav-item">
            <a href="kontak" class="nav-link "><i class="fe fe-image"></i> Kontak</a>
          </li>
          <li class="nav-item">
            <a href="formulir-pendaftaran" class="nav-link active"><i class="fe fe-file-text"></i> Daftar</a>
          </li>
          <li class="nav-item dropdown">
            <a href="login" class="nav-link "><i class="fa fa-user"></i> Masuk</a>
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
     <!-- <h1>Formulir Akan Terbuka Tanggal 15 Besok</h1> -->
     <div class="container">
      <div class="row">
        <div class="col col-login mx-auto">
         

           <!--  <?php 
    // tampilkan pesan jika ada
            if (isset($_SESSION['notif']) && $_SESSION['notif'] <> '') {
              echo '<div id="notif"><div class="alert alert-warning">  <strong>Warning! </strong>'.$_SESSION['notif'].'</div></div>';

            }
    // tampilkan pesan error jika ada
            $_SESSION['notif'] = '';
            ?> -->

            <form class="card" action="" method="post">
              <div class="card-body p-6">

                <?php 
    // tampilkan pesan jika ada
                if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                  echo '<div class="pesan">
                  <div class="alert alert-warning">  <strong>Warning! </strong>'.$_SESSION['pesan'].'</div></div>';
                }
    // tampilkan pesan error jika ada
                $_SESSION['pesan'] = '';
                ?>

                <div class="card-title">Buat Akun Baru</div>
                <div class="form-group">
                  <label class="form-label">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Masukkan nama username">
                </div>
                <div class="form-group">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label class="form-label">Ulangi Password</label>
                  <input type="password" name="konfirmasi_password" class="form-control" placeholder="Ulangi Password yang sama">
                </div>
                
                <div class="form-footer">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Daftar</button>
                </div>
              </div>
            </form>
          </div>
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

