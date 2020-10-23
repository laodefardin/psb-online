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
            <h2 class="mt-0 mb-4">Pengumuman </h2>
            <?php 
            $query = $koneksi->query("SELECT * FROM pengumuman WHERE status = 'Terbit'");
            while ($data = mysqli_fetch_array($query)) {
              ?>
              <div class="alert alert-primary alert-dismissible">
                <h4><?php echo $data['judul_pengumuman']; ?></h4>
                <p>
                 <?php echo $data['isi_pengumuman']; ?>
                </p>
                
              </div>
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