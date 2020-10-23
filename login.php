<?php 
include 'global_header.php'; 
?>

<?php
//buat koneksi ke mysql dari file config.php
if (isset($_POST["submit"])) {
  // form telah disubmit, proses data
  // ambil nilai form
  $username = htmlentities(strip_tags(trim($_POST["username"])));
  $password = htmlentities(strip_tags(trim($_POST["password"])));

  // siapkan variabel untuk menampung pesan error
  // $pesan_error = "";

  // //cek apakah username sudah diisi atau tidak
  // if (empty($username)) {
  //   $pesan_error .= "Username belum diisi <br>";
  // }

  // //cek apakah password sudah diisi atau tidak
  // if (empty($password)) {
  //   $pesan_error .= "Password belum diisi <br>";
  // }
  include("koneksi.php");
  session_start();
//filter dengan mysqli_real_escape_string
  $username = $koneksi->escape_string($username);
  $password = $koneksi->escape_string($password);

//generate hashing
  $password_sha1 = sha1($password);
  
// cek apakah username dan password ada di tabel 
  $query = "SELECT * FROM peserta WHERE username = '$username' AND password = '$password_sha1'";
  $result = $koneksi->query($query);
  $row = $result->num_rows;
  $sql = $koneksi->query("SELECT * FROM peserta WHERE username = '$username'");
  $akun = $sql->fetch_assoc();

  if ($row > 0 ){ // jika data ada
    $akun = $result->fetch_assoc();
     // bebaskan memory 
    mysqli_free_result($result);
    
      // tutup koneksi dengan database MySQL
    mysqli_close($koneksi);
    $_SESSION["username"] = $akun["username"];
    $_SESSION["level"] = $akun["level"];
    $_SESSION["registrasi"] = $akun["registrasi"];
    echo "<script> document.location.href='user/detek'; </script>";

  }else{
   $_SESSION['pesan'] = 'Username dan Password Tidak ditemukan';
 }
}
else{
  $username = "";
  $password = "";
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
            <a href="formulir-pendaftaran" class="nav-link "><i class="fe fe-file-text"></i> Daftar</a>
          </li>
          <li class="nav-item dropdown">
            <a href="login" class="nav-link active"><i class="fa fa-user"></i> Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="page">


  <div class="page-single">
    <div class="container">
      <div class="row">
        <div class="col col-login mx-auto">
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

            <div class="card-title">Masukkan Akun Anda</div>
            <div class="form-group">
              <label class="form-label">Username</label>
              <input type="username" name="username" class="form-control" value="<?php echo $username ?>" id="username" placeholder="Masukkan Username Anda">
            </div>
            <div class="form-group">
              <label class="form-label">
                Password
              </label>
              <input type="password" name="password" class="form-control" value="<?php echo $password ?>" id="password" placeholder="Masukkan Password">
            </div>
            <div class="form-footer">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>


          </div>
        </form>
        <div class="text-center text-muted">
          Belum mempunyai akun? <a href="formulir-pendaftaran"> Daftar Disini</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<?php 
include 'global_footer.php'; ?>


