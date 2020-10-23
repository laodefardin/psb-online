<?php
include 'global_header.php';
?> 

<?php 
$id_peserta = isset($_GET['ganti'])?$_GET['ganti'] *1:0;
if (isset($_POST['submit'])) {
  $password = $_POST['password'];
  $konfirmasi_password = $_POST['konfirmasi_password'];

  if(strlen($password) >= 8){

    if ($password == $konfirmasi_password) {
      $password_sha1 = sha1($password);

      $query = $koneksi->query("UPDATE `peserta` SET
        `password` = '$password_sha1' WHERE `id` = '$id_peserta'");
      $_SESSION['pesan'] = 'Password Berhasil diubah';
    }
  }else{
    $_SESSION['pesan'] = 'Minimal Password yang dimasukkan 8 Karakter, Ulangi lagi';
  }
}
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
            <a href="peserta" class="nav-link active"><i class="fe fe-box"></i> Peserta</a>
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
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="my-3 my-md-5">
  <div class="container">
   <?php 
   $query = $koneksi->query("SELECT * FROM peserta WHERE id = '$id_peserta'");
   while ($data=mysqli_fetch_array($query)){
    ?>
    <div class="row row-cards">
     <div class="col-lg-12">
      <div class="card">
        <div class="col-lg-6 order-lg-6 mb-4">
         <form action="" method="post">
          <div class="card-body p-6">
           <?php
           if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan">
            <div class="alert alert-warning"> '.$_SESSION['pesan'].'</div></div>';
          }
          $_SESSION['pesan'] = '';
          ?>
          <div class="card-title">Ganti Password Peserta</div>
          <div class="form-group">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" disabled>
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
            <button type="submit" name="submit" class="btn btn-primary btn-block">Ganti Password</button>
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


<?php include 'global_footer.php'; ?>