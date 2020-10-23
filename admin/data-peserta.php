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
    $id_profil = isset($_GET['id'])?$_GET['id']*1:0;
    $profil = $koneksi->query("SELECT * FROM peserta WHERE id = '$id_profil'");
    if ($profil === FALSE) {
      die(mysql_error());
    }
    while ($data = mysqli_fetch_array($profil)) {
    ?>
   <div class="row row-cards">
     <div class="col-lg-12">
      <form action="insert.php" method="post" class="card">
        <div class="card-header">
          <h3 class="card-title">Identitas Calon Peserta Didik Baru</h3>
            <a href=cetak/bukti-registrasi?cetak=<?php echo $data['id']; ?> target="_blank" class="btn btn-danger btn-sm ml-auto"><i class="fe fe-printer mr-2"></i> Cetak Bukti Registrasi</a>
          <a href="edit-peserta?edit=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm ml-auto">Edit Bioadata</a>
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

<?php 
include 'global_footer.php'; ?>