<!-- <?php 
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
            <a href="pengumuman" class="nav-link "><i class="fe fe-bell"></i> Pengumuman</a>
          </li>
          <li class="nav-item">
            <a href="peserta-pendaftaran-ulang" class="nav-link active"><i class="fe fe-bell"></i> Peserta Pendaftaran Ulang</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
 -->
<div class="my-3 my-md-5">
  <div class="container">

   <div class="row row-cards">
    <div class="col-lg-12">
      <div class="col-12">
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
          <h3 class="card-title">Daftar Calon Peserta Didik Baru</h3>
          <a href="tambah-peserta" class="btn btn-primary btn-sm ml-auto"><i class="fe fe-plus mr-2"></i>Tambah Peserta</a>
        </div>
        <div class="table-responsive">
          <?php 
          $query = $koneksi->query("SELECT * FROM peserta2");
          ?>
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Sekolah Asal</th>
                <th>Tahun Lulus</th>
                <th>Jenis Kelamin</th>
                <th>NISN</th>
                <th>NIK/No. KITAS</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No. Registasi Akta Lahir</th>
                <th>Agama</th>
                <th>Kewarganegaraan</th>
                <th>Berkebutuhan Khusus</th>
                <th>Alamat Jalan</th>
                <th>RT / RW</th>
                <th>Nama Dusun</th>
                <th>Nama Kelurahan / Desa</th>
                <th>Kecamatan</th>
                <th>Kode Pos</th>
                <th>Tempat Tinggal</th>
                <th>Moda Transportasi</th>
                <th>Nomor KKS</th>
                <th>Anak Keberapa</th>
                <th>Penerima KPS/PKH</th>
                <th>No KPS/PKH</th>
                <th>Usulan Dari Sekolah (Layak PIP)</th>
                <th>Penerimaan KIP (Kartu Indonesia Pintar)</th>
                <th>Nomor KIP</th>
                <th>Nama Tertera di KIP</th>
                <th>Terima fisik Kartu (KIP)</th>
                <th>Alasan Layak PIP</th>
                <th>Bank</th>
                <th>No Rekening bank</th>
                <th>Rekening Atas Nama</th>
                <th>Nama Ayah</th>
                <th>NIK Ayah</th>
                <th>Tahun Lahir</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Bulanan Ayah</th>
                <th>No Hp Ayah</th>
                <th>Berkebutuhan Khusus (Ayah)</th>
                <th>Nama Ibu</th>
                <th>NIK Ibu</th>
                <th>Tahun Lahir</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Bulanan Ibu</th>
                <th>No Hp Ibu</th>
                <th>Nama Wali</th>
                <th>NIK Wali</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Penghasilan Bulanan Wali</th>
                <th>No Hp Wali</th>
                <th>Nomor HP Peserta</th>
                <th>Email</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Jumlah Saudara Kandung</th>
                <th>Waktu Tempuh Ke sekolah (Jam/Menit)</th>
                <th>Jarak Tempat Tinggal Ke sekolah</th>
                <th>Jenis Prestasi</th>
                <th>Tingkat Prestasi</th>
                <th>Nama Prestasi</th>
                <th>Tahun Prestasi</th>
                <th>Penyelenggara</th>
                <th>Pringkat</th>
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
                <td><input class="form-control" type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>"></td>
                <td><input class="form-control" type="text" name="pilihan" value="<?php echo $data['pilihan']; ?>"></td>
                <td><input class="form-control" type="text" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>"></td>
                <td><input class="form-control" type="text" name="tahun_lulus" value="<?php echo $data['tahun_lulus']; ?>"></td>
                <td><input class="form-control" type="text" name="jk" value="<?php echo $data['jk']; ?>"></td>
                <td><input class="form-control" type="text" name="nisn" value="<?php echo $data['nisn']; ?>"></td>
                <td><input class="form-control" type="text" name="nik" value="<?php echo $data['nik']; ?>"></td>
                <td><input class="form-control" type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
                <td><input class="form-control" type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"></td>
                <td><input class="form-control" type="text" name="no_akta" value="<?php echo $data['no_akta']; ?>"></td>
                <td><input class="form-control" type="text" name="agama" value="<?php echo $data['agama']; ?>"></td>
                <td><input class="form-control" type="text" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan']; ?>"></td>
                <td><input class="form-control" type="text" name="kbh_khusus" value="<?php echo $data['kbh_khusus']; ?>"></td>
                <td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                <td><input class="form-control" type="text" name="rtrw" value="<?php echo $data['rtrw']; ?>"></td>
                <td><input class="form-control" type="text" name="dusun" value="<?php echo $data['dusun']; ?>"></td>
                <td><input class="form-control" type="text" name="kelurahan" value="<?php echo $data['kelurahan']; ?>"></td>
                <td><input class="form-control" type="text" name="kecamatan" value="<?php echo $data['kecamatan']; ?>"></td>
                <td><input class="form-control" type="text" name="kode_pos" value="<?php echo $data['kode_pos']; ?>"></td>
                <td><input class="form-control" type="text" name="tempat_tinggal" value="<?php echo $data['tempat_tinggal']; ?>"></td>
                <td><input class="form-control" type="text" name="moda_transpor" value="<?php echo $data['moda_transpor']; ?>"></td>
                <td><input class="form-control" type="text" name="no_kks" value="<?php echo $data['no_kks']; ?>"></td>
                <td><input class="form-control" type="text" name="anak_ke" value="<?php echo $data['anak_ke']; ?>"></td>
                <td><input class="form-control" type="text" name="kps" value="<?php echo $data['kps']; ?>"></td>
                <td><input class="form-control" type="text" name="no_kps" value="<?php echo $data['no_kps']; ?>"></td>
                <td><input class="form-control" type="text" name="layak_pip" value="<?php echo $data['layak_pip']; ?>"></td>
                <td><input class="form-control" type="text" name="kip" value="<?php echo $data['kip']; ?>"></td>
                <td><input class="form-control" type="text" name="no_kip" value="<?php echo $data['no_kip']; ?>"></td>
                <td><input class="form-control" type="text" name="nama_kip" value="<?php echo $data['nama_kip']; ?>"></td>
                <td><input class="form-control" type="text" name="fisik_kip" value="<?php echo $data['fisik_kip']; ?>"></td>
                <td><input class="form-control" type="text" name="alasan_layak_pip" value="<?php echo $data['alasan_layak_pip']; ?>"></td>
                <td><input class="form-control" type="text" name="bank" value="<?php echo $data['bank']; ?>"></td>
                <td><input class="form-control" type="text" name="no_rek" value="<?php echo $data['no_rek']; ?>"></td>
                <td><input class="form-control" type="text" name="rek_nama" value="<?php echo $data['rek_nama']; ?>"></td>
                <td><input class="form-control" type="text" name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="nik_ayah" value="<?php echo $data['nik_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="thn_lahir_ayah" value="<?php echo $data['thn_lahir_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="pendidikan_ayah" value="<?php echo $data['pendidikan_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="pk_ayah" value="<?php echo $data['pk_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="hasil_ayah" value="<?php echo $data['hasil_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="hp_ayah" value="<?php echo $data['hp_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="khusus_ayah" value="<?php echo $data['khusus_ayah']; ?>"></td>
                <td><input class="form-control" type="text" name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="nik_ibu" value="<?php echo $data['nik_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="thn_lahir_ibu" value="<?php echo $data['thn_lahir_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="pendidikan_ibu" value="<?php echo $data['pendidikan_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="pk_ibu" value="<?php echo $data['pk_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="hasil_ibu" value="<?php echo $data['hasil_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="hp_ibu" value="<?php echo $data['hp_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="khusus_ibu" value="<?php echo $data['khusus_ibu']; ?>"></td>
                <td><input class="form-control" type="text" name="nama_wali" value="<?php echo $data['nama_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="nik_wali" value="<?php echo $data['nik_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="pendidikan_wali" value="<?php echo $data['pendidikan_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="pk_wali" value="<?php echo $data['pk_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="hasil_wali" value="<?php echo $data['hasil_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="hp_wali" value="<?php echo $data['hp_wali']; ?>"></td>
                <td><input class="form-control" type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
                <td><input class="form-control" type="text" name="email" value="<?php echo $data['email']; ?>"></td>
                <td><input class="form-control" type="text" name="tinggi_bdn" value="<?php echo $data['tinggi_bdn']; ?>"></td>
                <td><input class="form-control" type="text" name="berat_badan" value="<?php echo $data['berat_badan']; ?>"></td>
                <td><input class="form-control" type="text" name="jml_saudara" value="<?php echo $data['jml_saudara']; ?>"></td>
                <td><input class="form-control" type="text" name="wkt_tempuh" value="<?php echo $data['wkt_tempuh']; ?>"></td>
                <td><input class="form-control" type="text" name="jarak_tmpt" value="<?php echo $data['jarak_tmpt']; ?>"></td>
                <td><input class="form-control" type="text" name="wkt_tempuh" value="<?php echo $data['wkt_tempuh']; ?>"></td>
                <td><input class="form-control" type="text" name="jenis_prestasi" value="<?php echo $data['jenis_prestasi']; ?>"></td>
                <td><input class="form-control" type="text" name="tngkt_prestasi" value="<?php echo $data['tngkt_prestasi']; ?>"></td>
                <td><input class="form-control" type="text" name="nama_prestasi" value="<?php echo $data['nama_prestasi']; ?>"></td>
                <td><input class="form-control" type="text" name="thn_prestasi" value="<?php echo $data['thn_prestasi']; ?>"></td>
                <td><input class="form-control" type="text" name="penyelenggara" value="<?php echo $data['penyelenggara']; ?>"></td>
                <td><input class="form-control" type="text" name="pringkat" value="<?php echo $data['pringkat']; ?>"></td>
                <!-- <td>Belum ada fitur</td> -->
                <td class="text-right">
                  <a class="icon" href="simpan?id=<?php echo $data['id_peserta'];?>" title=""></a>
                  <a class="icon" href="cetak/bukti-registrasi?cetak=<?php echo $data['id']; ?>" target="_blank"><i class="fe fe-printer mr-2"></i>
                  </a>
                  <a class="icon" href="edit-peserta?edit=<?php echo $data['id']; ?>"><i class="fe fe-edit"></i>
                  </a>
                  <a class="icon" href="ganti-password?ganti=<?php echo $data['id'];?>"><i class="fe fe-settings"></i></a> 
                  <a class="icon" href="hapus-peserta2?hapus=<?php echo $data['id_peserta'];?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');"><i class="fe fe-trash-2"></i></a> 
                </td>
              </tr>
            <?php } ?> 
          </tbody>
        </table>
       <!--  <script>
          require(['datatables', 'jquery'], function(datatable, $) {
            $('.datatable').DataTable();
          });
        </script> -->
      </div>
    </div>
  </div>
</div> 
</div>



</div>
</div>
</div>

<!-- <?php 
include 'global_footer.php'; ?> -->