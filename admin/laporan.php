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
            <a href="peserta" class="nav-link "><i class="fe fe-box"></i> Peserta</a>
          </li>
          <li class="nav-item">
            <a href="user" class="nav-link"><i class="fe fe-printer mr-2"></i> User</a>
          </li>
          <li class="nav-item">
            <a href="laporan" class="nav-link active"><i class="fe fe-file"></i> Laporan</a>
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
        Laporan
      </h1>
    </div>

    <div class="row row-cards">
      <div class="col-lg-12">
        <div class="card">
         <div class="card-body">
          <div class="text-wrap p-lg-6">

            <div class="col-md-6 col-lg-4">
              <div class="form-group">

                <form action="cetak/laporan1.php" method="post">
                  <div class="row gutters-xs">
                    <div class="col">
                     <h3>Cetak Laporan Keseluruhan</h3>
                   </div>
                   <span class="col-auto">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fe fe-print"></i> Cetak Excel</button>
                  </span>
                </div>
              </form>

              <form action="cetak/laporan2.php" method="post">
                  <div class="row gutters-xs">
                    <div class="col">
                     <h3>Cetak Laporan TKJ dan TPHP</h3>
                   </div>
                   <span class="col-auto">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fe fe-print"></i> Cetak Excel</button>
                  </span>
                </div>
              </form>

              <form action="cetak/laporan4.php" method="post">
                  <div class="row gutters-xs">
                    <div class="col">
                     <h3>Cetak Laporan Peserta Khusus</h3>
                   </div>
                   <span class="col-auto">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fe fe-print"></i> Cetak Excel</button>
                  </span>
                </div>
              </form>

              <form action="cetak/laporan5.php" method="post">
                  <div class="row gutters-xs">
                    <div class="col">
                     <h3>Cetak Laporan Peserta Pendaftaran Ulang</h3>
                   </div>
                   <span class="col-auto">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fe fe-print"></i> Cetak Excel</button>
                  </span>
                </div>
              </form>

            </div>  
          </div>

          <!-- <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label class="form-label">Cetak Laporan Berdasarkan Tanggal</label>
                <form action="cetak/ceklaporan.php" method="post" target="_blank">
                  <div class="row gutters-xs">
                    <div class="col">
                      <select class="form-control" name="tanggal">
                        <option selected="selected" disabled="disabled">
                          Pilih Tanggal Dahulu
                        </option>
                        <?php 
                        $sql = $koneksi->query("SELECT waktu, count(waktu) AS jumlah FROM peserta GROUP BY waktu ORDER BY waktu ASC");
                        $no=0; foreach ($sql as $data): $no++
                        ?>
                        <?php 
                        $waktu = substr($data['waktu'],0,10);?>
                        <option value="<?php echo $waktu; ?>"><?php echo $waktu ;?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <span class="col-auto">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fe fe-print"></i> Cetak Excel</button>
                  </span>
                </div>
              </form>
            </div>  
          </div> -->
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