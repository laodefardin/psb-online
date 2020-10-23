<?php 
include 'global_header.php'; 

$id_pengumuman = isset($_GET['edit'])?$_GET['edit'] *1:0;
if (isset($_POST['submit'])) {
  $judul_pengumuman = $_POST['judul_pengumuman'];
  $isi_pengumuman = $_POST['isi_pengumuman'];

  $query = $koneksi->query('INSERT INTO pengumuman (judul_pengumuman, isi_pengumuman, status) VALUES ("'.$judul_pengumuman.'","'.$isi_pengumuman.'","Draf")');

  $_SESSION['pesan'] = 'Data Berhasil Disimpan';
  echo "<script> document.location.href='./pengumuman';</script>";
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
      </div>
      <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="row align-items-center">
                <label class="col-sm-2">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul_pengumuman" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row align-items-center">
                <label class="col-sm-2">Isi Pengumuman</label>
                <div class="col-sm-10">
                  <textarea rows="10" class="ckeditor" id="editor-custom" name="isi_pengumuman"></textarea>
                </div>
              </div>
            </div>


            <div class="btn-list mt-4 text-right">
              <a href="pengumuman" class="btn btn-secondary btn-space">Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary btn-space">Simpan</button>
            </div>
          </form>
      </div>
    </div> 
  </div>
</div>

</div>
</div>
</div>
<script src="./assets/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('editor-custom', {
    // language: 'id', // id, es, en, dll
    width: '100%',
    height: 250,
    toolbar: [
      { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source','-' ] },
      { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', '-' ] },
      { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
      { name: 'links', items: [ 'Link', 'Unlink'] },
      { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule' ] },
      '/',
      { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
      { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
      { name: 'tools', items: [ 'Maximize'] },
      { name: 'others', items: [ '-' ] },
    ]
    });
</script>
<?php 
include 'global_footer.php'; ?>