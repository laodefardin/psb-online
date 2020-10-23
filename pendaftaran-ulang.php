<?php
include 'global_header.php'; 
?>
<?php
$sekolah = array("SMPN 1 PAPALANG","SMPN 2 PAPALANG","SMPN 3 PAPALANG","SMPN 4 PAPALANG","SMPN 1 SAMPAGA","SMPN 2 SAMPAGA","SMPN 3 SAMPAGA","SMPN 1 TOMMO","SMPN 2 TOMMO","SMPN 3 TOMMO","SMPN 4 TOMMO","SMPN 8 TOMMO","SMPN 1 PANGALE","SMPN 2 PANGALE","SMPN 3 PANGALE","SMPN 1 KALUKKU","SMPN 2 KALUKKU","SMPN 3 KALUKKU","SMPN 1 MEHALAAN","SMPN 02 TANJUNG HARAPAN","SMPN 3 MARIORIAWA","SMPN 5 KAROSSA","SMPN 1 BAMBALAMOTU","SMPN 7 DUAMPANUA","SMPS SALUTABONGAN","SMPN 1 TOBADAK","SMPN 1 MANUBAR","SMPN 2 BULUTABA","SMPN WAJO","SMPN 7 PINRANG","SMPN 1 BARAS","SMP PPM AL-IKHLASH","SMPN 3 TINAMBUNG","SMPN 17 PALU","SMPN 1 SOPAI","SMP MUHAMMADIA","SMPN 2 AMALI","SMPN 2 MAIWA","SMP SALUKAYU 4","SMP MAHAPUTRA TELLO MAKASSAR","SMP 2 BUDONG-BUDONG","SMP BUDIMULIA","SMPN 5 WATAMPONE","PP.DDI.KABALLANGAN","SMPN 4 SENDANA","MTS DDI TOABO","MTS.NURSYAMSI BELANG-BELANG","MTS ANNUR MA'ARIF BAKENGKENG","MTS MIFTAHUL ULUM","MTS AZ-ZAHRA","MTS MAARIF NU KALONDING","MTS DARUL BARAKAH","MTS AT-TAUFIK PATTAROPURA","MTS.NUHIYAH PAMBUSUANG","MTS.ALISTIQOMA DOLANGAN","MTS NURUL IMAN BUNDE","MTS BUKIT MARWAH","MTS NURUL MU'MININ KALUKKU","MTs.IBNU ATHAR","MTS AL MUNAWWARAH","PKBM SMAN 1 PANGALE", "SMPN 1 SANDARAN");
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
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="my-3 my-md-5">
  <div class="container">
    <div class="page-header">
      <h1 class="page-title">
        FORMULIR PENDAFTARAN ULANG SMK NEGERI 1 PAPALANG TAHUN AJARAN 2019
      </h1>
    </div>
    <div class="row row-cards">
      <div class="col-md-12">
        <div class="alert alert-warning"><a href="#" class="alert-link">Perhatian</a> Silahkan Isi data anda sesuai dengan berkas yang akan dikumpul Kepanitia, (Tanda * ) adalah data yang wajib diisi</div>

        <div class="row">
          <div class="col-lg-12">
            <form action="proses" method="post" class="card">
              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">REGISTRASI PESERTA DIDIK</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Kompetensi Keahlian Yang Terpilih<span style="color:red;"> *</span> </label>
                      <select name="pilihan" class="form-control custom-select" required="">
                        <option value="">Pilihan Kompetensi Keahlian</option>
                        <option value="Teknologi Pengolahan Hasil Pertanian">Teknologi Pengolahan Hasil Pertanian (TPHP)</option>
                        <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan (TKJ)</option>
                        <option value="Teknik Audio Vidio">Teknik Audio Vidio (TAV)</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan (TKR)</option>
                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor (TBSM)</option>
                        <option value="Teknik Pengelasan">Teknik Pengelasan (T Las)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Sekolah Asal<span style="color:red;"> *</span></label>
                      <select class="form-control custom-select" name="sekolah_asal" id="select-beast" required="">
                        <option value="">Pilih Sekolah</option>
                        <?php 
                        for ($i=0; $i < count($sekolah); $i++) {?>
                          <option value="<?php echo $sekolah[$i];?>"><?php echo $sekolah[$i]; ?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Tahun Lulus</label>
                      <select name="tahun_lulus" class="form-control" >
                        <option value=""></option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">Identitas Calon Peserta Didik Baru</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Nama Lengkap<span style="color:red;"> *</span></label>
                      <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Sesuai Ijasah" value="" required=""> 
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Jenis Kelamin<span style="color:red;"> *</span></label>
                      <select name="jk" class="form-control" required="">
                       <option value="">Jenis Kelamin</option>
                       <option value="Laki-Laki">Laki-Laki</option>
                       <option value="Perempuan">Perempuan</option>
                     </select>
                   </div>
                 </div>
                 <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">NISN<span style="color:red;"> *</span></label>
                    <input type="text" name="nisn" class="form-control" maxlength="11" placeholder="Nomor NISN" value="'" required="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">NIK/No. KITAS<span style="color:red;"> *</span></label>
                    <input type="text" name="nik" class="form-control" placeholder="isi nomor NIK atau Nomor Kitas" maxlength="17" value="'" required="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Tempat Lahir<span style="color:red;"> *</span></label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="" required="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">Tanggal Lahir<span style="color:red;"> *</span></label>
                    <input type="text" placeholder="Contoh 14-07-1996" name="tanggal_lahir" value="00-00-0000" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-group">
                    <label class="form-label">No. Registasi Akta Lahir<span style="color:red;"> *</span></label>
                    <input type="text" placeholder="No. Registasi Akta Lahir" name="no_akta" value="'" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Agama & Kepercayaan</label>
                    <select name="agama" class="form-control" required="">
                      <option value="">Pilih Agama</option>
                      <option value="Islam" >Islam</option>
                      <option value="Kristen" >Kristen</option>
                      <option value="Katolik" >Katolik</option>
                      <option value="Hindu" >Hindu</option>
                      <option value="Buddha" >Buddha</option>
                      <option value="Konghucu" >Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Kewarganegaraan</label>
                    <select name="kewarganegaraan" class="form-control" >
                     <!--  <option value="">Pilih Kewarganegaraan</option> -->
                     <option value="Indonesia">Indonesia</option>
                     <!-- <option value="WNA" > WNA</option> -->
                   </select>
                 </div>
               </div>
               <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Berkebutuhan Khusus</label>
                  <input type="text" name="kbh_khusus" class="form-control" placeholder="Isi Kebutuhan Khusus" value="">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Alamat Jalan<span style="color:red;"> *</span></label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat Jalan" value="" required="">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">RT / RW</label>
                  <input type="text" name="rtrw" class="form-control" placeholder="Isi RT / RW" value=" / ">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Nama Dusun<span style="color:red;"> *</span></label>
                  <input type="text" name="dusun" class="form-control" placeholder="Isi nama dusun" value="" required="">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Nama Kelurahan / Desa<span style="color:red;"> *</span></label>
                  <input type="text" name="kelurahan" class="form-control" placeholder="Isi nama kelurahan/desa" value="" required="">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Kecamatan<span style="color:red;"> *</span></label>
                  <input type="text" name="kecamatan" class="form-control" placeholder="Isi kecamatan" value="" required="">
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
                <div class="form-group">
                  <label class="form-label">Kode Pos<span style="color:red;"> *</span></label>
                  <input type="text" name="kode_pos" class="form-control" placeholder="Isi kode pos" value="" required="">
                </div>
              </div>
               <!--  <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Lintang</label>
                    <input type="text" name="lintang" class="form-control" placeholder="Isi lintang" value="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Bujur</label>
                    <input type="text" name="bujur" class="form-control" placeholder="Isi bujur" value="">
                  </div>
                </div> -->
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Tempat Tinggal<span style="color:red;"> *</span></label>
                    <input type="text" name="tempat_tinggal" class="form-control" placeholder="Isi tempat tinggal" value="" required="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Moda Transportasi<span style="color:red;"> *</span></label>
                    <input type="text" name="moda_transpor" class="form-control" placeholder="Isi Moda Transportasi" value="" required="">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Nomor KKS ( Kartu Keluar Sejahtra )</label>
                    <input type="text" name="no_kks" class="form-control" placeholder="Isi nomor kks" value="'">
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Anak Keberapa<span style="color:red;"> *</span></label>
                    <select name="anak_ke" class="form-control">
                      <option value="">Anak Ke</option>
                       <?php 
                        for ($i = 1; $i <= 15; $i++) {?>
                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php }?>
                    </select>
                    <!--   <input type="text" name="anak_ke" class="form-control" placeholder="Isi Moda Transportasi" value="" required=""> -->
                  </div>
                </div>
                <div class="col-sm-3 col-md-3">
                  <div class="form-group">
                    <label class="form-label">Penerima KPS/PKH<span style="color:red;"> *</span></label>
                      <!-- <select class="form-control" name="kps">
                        <option value="">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select> -->

                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="kps" value="Ya" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck">
                        <div class="custom-control-label">Ya</div>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="kps" value="Tidak" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck">
                        <div class="custom-control-label">Tidak</div>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3" id="ifYes" style="display:none">
                    <div class="form-group">
                      <label class="form-label">No. KPS/PKH ( apabila menerima )</label>
                      <input type="text" name="no_kps" class="form-control" placeholder="Isi nomor KPS/KPH" value="'">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Usulan Dari Sekolah ( Layak PIP )<span style="color:red;"> *</span></label>
                      <select class="form-control" name="layak_pip">
                        <option value="">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Penerimaan KIP ( Kartu Indonesia Pintar )<span style="color:red;"> *</span></label>
                      <!-- <select class="form-control" name="kip">
                        <option value="">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select> -->
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="kip" value="Ya" onclick="javascript:yesnoCheck1();" name="yesno1" id="yesCheck1">
                        <div class="custom-control-label">Ya</div>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="kip" value="Tidak" onclick="javascript:yesnoCheck1();" name="yesno1" id="noCheck1">
                        <div class="custom-control-label">Tidak</div>
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6" id="ifYes1" style="display:none">
                    <div class="row">                   
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Nomor KIP</label>
                          <input type="text" name="no_kip" class="form-control" placeholder="Isi Nomor KIP" value="'">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Nama Tertera di KIP</label>
                          <input type="text" name="nama_kip" class="form-control" placeholder="Isi Nama Tertera di KIP" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Terima fisik Kartu ( KIP )<span style="color:red;"> *</span></label>
                      <select class="form-control" name="fisik_kip" required="">
                        <option value="">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Alasan Layak PIP</label>
                      <input type="text" name="alasan_layak_pip" class="form-control" placeholder="Isi Alasan Layak PIP" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Bank</label>
                      <input type="text" name="bank" class="form-control" placeholder="Isi Bank" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">No. Rekening bank</label>
                      <input type="text" name="no_rek" class="form-control" placeholder="Isi No. Rekening bank" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Rekening Atas Nama</label>
                      <input type="text" name="rek_nama" class="form-control" placeholder="Isi Rekening Atas Nama" value="">
                    </div>
                  </div>

                </div>
              </div>

              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">DATA AYAH KANDUNG</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Nama Ayah Kandung<span style="color:red;"> *</span></label>
                      <input type="text" name="nama_ayah" class="form-control" placeholder="Isi Nama Ayah Kandung" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> NIK Ayah<span style="color:red;"> *</span></label>
                      <input type="text" name="nik_ayah" class="form-control" placeholder="Isi NIK Ayah" value="'" maxlength="17" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tahun Lahir<span style="color:red;"> *</span></label>
                      <input type="text" name="thn_lahir_ayah" class="form-control" placeholder="Isi Tahun Lahir" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pendidikan<span style="color:red;"> *</span></label>
                      <input type="text" name="pendidikan_ayah" class="form-control" placeholder="Isi Pendidikan" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pekerjaan<span style="color:red;"> *</span></label>
                      <input type="text" name="pk_ayah" class="form-control" placeholder="Isi Pekerjaan" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Penghasilan Bulanan<span style="color:red;"> *</span></label>
                      <select class="form-control" name="hasil_ayah" required="">
                        <option value="">Pilih Penghasilan</option>
                        <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                        <option value="Rp 500.000 - 1 JT">Rp 500.000 - 1 JT</option>
                        <option value="1 JT - 2 JT">1 JT - 2 JT</option>
                        <option value="2 JT - 5 JT">2 JT - 5 JT</option>
                        <option value="5 JT - 20 JT">5 JT - 20 JT</option>
                        <option value="Lebih Dari 20 JT">Lebih Dari 20 JT</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> No. Hp. Yang Dapat Dihubungi<span style="color:red;"> *</span></label>
                      <input type="text" name="hp_ayah" class="form-control" placeholder="Isi No Hape Ayah" value="'" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Berkebutuhan Khusus</label>
                      <input type="text" name="khusus_ayah" class="form-control" placeholder="Isi Berkebutuhan Khusus" value="">
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">DATA IBU KANDUNG</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Nama Ibu Kandung<span style="color:red;"> *</span></label>
                      <input type="text" name="nama_ibu" class="form-control" placeholder="Isi Nama Ibu Kandung" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> NIK Ibu<span style="color:red;"> *</span></label>
                      <input type="text" name="nik_ibu" class="form-control" placeholder="Isi NIK Ibu" value="'" maxlength="17" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tahun Lahir<span style="color:red;"> *</span></label>
                      <input type="text" name="thn_lahir_ibu" class="form-control" placeholder="Isi Tahun Lahir" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pendidikan <span style="color:red;"> *</span></label>
                      <input type="text" name="pendidikan_ibu" class="form-control" placeholder="Isi Pendidikan" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pekerjaan  <span style="color:red;"> *</span></label>
                      <input type="text" name="pk_ibu" class="form-control" placeholder="Isi Pekerjaan" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Penghasilan Bulanan<span style="color:red;"> *</span></label>
                      <select class="form-control" name="hasil_ibu" required="">
                        <option value="">Pilih Penghasilan</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                        <option value="Rp 500.000 - 1 JT">Rp 500.000 - 1 JT</option>
                        <option value="1 JT - 2 JT">1 JT - 2 JT</option>
                        <option value="2 JT - 5 JT">2 JT - 5 JT</option>
                        <option value="5 JT - 20 JT">5 JT - 20 JT</option>
                        <option value="Lebih Dari 20 JT">Lebih Dari 20 JT</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> No. Hp. Yang Dapat Dihubungi<span style="color:red;"> *</span></label>
                      <input type="text" name="hp_ibu" class="form-control" placeholder="Isi Nomor Hape Ibu" value="'" required="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Berkebutuhan Khusus</label>
                      <input type="text" name="khusus_ibu" class="form-control" placeholder="Isi Berkebutuhan Khusus" value="">
                    </div>
                  </div>
                </div>
              </div>


              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">DATA WALI</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Nama Wali</label>
                      <input type="text" name="nama_wali" class="form-control" placeholder="Isi Nama Wali" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> NIK Wali</label>
                      <input type="text" name="nik_wali" class="form-control" placeholder="Isi NIK Wali" value="'" maxlength="17">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pendidikan</label>
                      <input type="text" name="pendidikan_wali" class="form-control" placeholder="Isi Pendidikan" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pekerjaan</label>
                      <input type="text" name="pk_wali" class="form-control" placeholder="Isi Pekerjaan" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Penghasilan Bulanan</label>
                      <select class="form-control" name="hasil_wali">
                        <option value="">Pilih Penghasilan</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                        <option value="Rp 500.000 - 1 JT">Rp 500.000 - 1 JT</option>
                        <option value="1 JT - 2 JT">1 JT - 2 JT</option>
                        <option value="2 JT - 5 JT">2 JT - 5 JT</option>
                        <option value="5 JT - 20 JT">5 JT - 20 JT</option>
                        <option value="Lebih Dari 20 JT">Lebih Dari 20 JT</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> No. Hp. Yang Dapat Dihubungi</label>
                      <input type="text" name="hp_wali" class="form-control" placeholder="Isi Nomor Hape Wali" value="'">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">KONTAK PESERTA DIDIK BARU</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Nomor HP</label>
                      <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP Peserta" value="'">
                    </div>
                  </div>         
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Email Peserta" value="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">DATA RINCIAN PESERTA DIDIK (DATA DAPODIK)</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tinggi Badan<span style="color:red;"> *</span></label>
                      <input type="text" name="tinggi_bdn" class="form-control" placeholder="Isi Tinggi Badan" value=" Cm" required="">
                    </div>
                  </div>         
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Berat Badan<span style="color:red;"> *</span></label>
                      <input type="text" name="berat_badan" class="form-control" placeholder="Isi Berat Badan" value=" Kg" required="">
                    </div>
                  </div> 
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Jumlah Saudara Kandung<span style="color:red;"> *</span></label>
                      <select name="jml_saudara" class="form-control">
                        <option value="">Pilih Jumlah Saudara</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <?php 
                        for ($i = 1; $i <= 15; $i++) {?>
                          <option value="<?php echo $i;?> Orang"><?php echo $i;?> Orang</option>
                        <?php }?>
                      </select>
                     <!--  <input type="text" name="jml_saudara" class="form-control" placeholder="Jumlah Saudara" value="" required=""> -->
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label">Waktu Tempuh Ke sekolah ( Jam / Menit)<span style="color:red;"> *</span></label>
                      <input type="text" name="wkt_tempuh" class="form-control" placeholder="Isi Waktu Tempuh Ke Sekolah" value="" required="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                      <label class="form-label"> Jarak Tempat Tinggal Ke sekolah (Sebutkan Dalam Kilometer )<span style="color:red;"> *</span></label>
                      <input type="text" name="jarak_tmpt" class="form-control" placeholder="Isi Jarak" value=" Km" required="">
                    </div>
                  </div>

                </div>
              </div>

              <div class="card-alert alert alert-danger mb-0">
                <h3 class="card-title">PRESTASI</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <div class="form-label">Jenis Prestasi</div>
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="jenis_prestasi" value="Tidak Ada">
                          <div class="custom-control-label">Tidak Ada</div>
                        </label>
                        <label class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="jenis_prestasi" value="Sains">
                          <div class="custom-control-label">Sains</div>
                        </label>
                        <label class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="jenis_prestasi" value="Seni">
                          <div class="custom-control-label">Seni</div>
                        </label>
                        <label class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" name="jenis_prestasi" value="Olahraga">
                          <div class="custom-control-label">Olahraga</div>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tingkat Prestasi</label>
                      <select name="tngkt_prestasi" class="form-control">
                        <option value="">Pilih Tingkat Prestasi</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="Kecamatan">Kecamatan</option>
                        <option value="Kabupaten">Kabupaten</option>
                        <option value="Provinsi">Provinsi</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internasional</option>
                      </select>
                    </div>
                  </div>         
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Nama Prestasi</label>
                      <input type="text" name="nama_prestasi" class="form-control" placeholder="Isi Nama Prestasi" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Tahun Prestasi</label>
                      <input type="text" name="thn_prestasi" class="form-control" placeholder="Isi Tahun Prestasi" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Penyelenggara</label>
                      <input type="text" name="penyelenggara" class="form-control" placeholder="Isi Penyelenggara" value="">
                    </div>
                  </div>
                  <div class="col-sm-3 col-md-3">
                    <div class="form-group">
                      <label class="form-label"> Pringkat</label>
                      <input type="text" name="pringkat" class="form-control" placeholder="Isi Pringkat" value="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer text-right">
                <div class="d-flex">
                  <button type="submit" name="submit" class="btn btn-primary ml-auto"><i class="fe fe-save"></i> Simpan</button>
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

<script>
  require(['jquery', 'selectize'], function ($, selectize) {
    $(document).ready(function () {
      $('#input-tags').selectize({
        delimiter: ',',
        persist: false,
        create: function (input) {
          return {
            value: input,
            text: input
          }
        }
      });

      $('#select-beast').selectize({});

    });
  });
</script>

<script type="text/javascript">
  function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
      document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';
  }
</script>
<script type="text/javascript">
  function yesnoCheck1() {
    if (document.getElementById('yesCheck1').checked) {
      document.getElementById('ifYes1').style.display = 'block';
    }
    else document.getElementById('ifYes1').style.display = 'none';
  }
</script>

<?php 
include 'global_footer.php'; 
?>