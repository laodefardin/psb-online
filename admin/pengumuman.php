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
            <a href="laporan" class="nav-link "><i class="fe fe-file"></i> Laporan</a>
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
      <?php 
    // tampilkan pesan jika ada
      if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
        echo '<div class="pesan">
        <div class="alert alert-primary">'.$_SESSION['pesan'].'</div></div>';
      }
    // tampilkan pesan error jika ada
      $_SESSION['pesan'] = '';
      ?>
      <div class="card">
       <div class="card-header">
        <h3 class="card-title">Pengumuman</h3>
         <a href="tambah-pengumuman" class="btn btn-primary btn-sm ml-auto"><i class="fe fe-plus mr-2"></i>Tambah Pengumuman</a>
      </div>
      <div class="table-responsive">
        <?php 
        $query = $koneksi->query("SELECT * FROM pengumuman");
        ?>
        <table class="table card-table table-vcenter text-nowrap datatable">
          <thead>
            <tr>
              <th class="w-1">No.</th>
              <th>Judul Pengumuman</th>
              <th>Status</th>
              <th>Aksi</th>
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
              <td><?php echo $data['judul_pengumuman']; ?></td>
              <td>
                <?php 
                $status = $data['status'];
                if($status === 'Draf'){?>
                  <a href="terbit.php?terbit=<?php echo $data['id_pengumuman']; ?>" class="btn btn-danger">Terbitkan</a>
                <?php } else {?>
                  <a href="draf.php?draf=<?php echo $data['id_pengumuman']; ?>" class="btn btn-primary">Jadikan Draf</a>
                <?php }; ?>
              <td class="text-right">
                <a class="icon" href="edit-pengumuman?edit=<?php echo $data['id_pengumuman']; ?>"><i class="fe fe-edit"></i>
                </a>
                <a class="icon" href="hapus-pengumuman?hapus=<?php echo $data['id_pengumuman'];?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"><i class="fe fe-trash-2"></i></a> 
              </td>
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

<?php 
include 'global_footer.php'; ?>