<?php 
include 'global_header.php'; 
include 'koneksi.php';
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
                  <a href="aturan" class="nav-link "><i class="fe fe-box"></i> Syarat & Ketentuan</a>
                </li>
                <li class="nav-item">
                  <a href="jadwal" class="nav-link"><i class="fe fe-calendar"></i> Jadwal</a>
                </li>
                <li class="nav-item">
                  <a href="alur-pendaftaran" class="nav-link "><i class="fe fe-file"></i> Alur Pendaftaran</a>
                </li>
                 <li class="nav-item">
                  <a href="peserta" class="nav-link active"><i class="fe fe-calendar"></i> Peserta</a>
                </li>
                <li class="nav-item">
                  <a href="kontak" class="nav-link "><i class="fe fe-image"></i> Kontak</a>
                </li>
                <li class="nav-item">
                  <a href="formulir-pendaftaran" class="nav-link "><i class="fe fe-file-text"></i> Daftar</a>
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
		<div class="page-header">
			<h1 class="page-title">
				Daftar Peserta Yang Telah Mendaftar
			</h1>
		</div>

		<div class="row row-cards">
			<div class="row row-cards row-deck">
				<div class="col-12">
					<div class="card">
						<div class="table-responsive">
						 <?php 
          $query = $koneksi->query("SELECT * FROM peserta WHERE registrasi = 'selesai' ORDER BY nama_lengkap ASC");
          ?>
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Nama</th>
                <th>Sekolah Asal</th>
                <th>Pilihan Pertama</th>
                <th>Pilihan Kedua</th>
                <th>Jalur</th>
                <!-- <th>Status</th> -->
                
              </tr>
            </thead>
            <tbody>
              <?php 
              $nomor_urut = 0;
              while($data=mysqli_fetch_array($query)){
               $nomor_urut++;
               ?>
               <tr>
                <td><span class="text-muted"><?php echo $nomor_urut;?></span></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['sekolah_asal']; ?></td>
                <td><?php echo $data['pilihan_1']; ?></td>
                <td><?php echo $data['pilihan_2']; ?></td>
                <td><?php echo $data['jalur']; ?></td>
                <!-- <td>Belum ada fitur</td> -->
             </tr>
           <?php } ?> 
         </tbody>
       </table>
       <script>
        require(['datatables', 'jquery'], function(datatable, $) {
          $('.datatable').DataTable();
        });
      </script>
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