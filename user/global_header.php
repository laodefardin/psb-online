<?php 
session_start();
include '../koneksi.php';
if (!isset($_SESSION["username"])){
  echo "<script> document.location.href='../login'; </script>";
}

$user = $_SESSION['username'];
$level = $_SESSION['level'];

// if (empty($user)){
//    echo "<script>alert('Maaf anda harus login dulu!');window.location= '../login'; </script>";
// }
$query = $koneksi->query("SELECT * FROM peserta WHERE username = '$user'");
$row = $query->fetch_array();
//jika akun berlevel Administrator mengakses page admin
if ($level === "Administrator"){
  echo "<script> document.location.href='../admin/index'; </script>";
  // echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../admin/index';</script>";
}

?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
  <!-- Generated: 2019-04-04 16:55:45 +0200 -->
  <title>PPDB Online SMK 1 Papalang</title>
    <!-- 
  WEBSITE INI DIBUAT OLEH LAODE MUH ZULFARDINSYAH
  FACEBOOK : facebook.com/fardinrikudou
  INSTAGRAM : @laode.fardin
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
<script src="./assets/js/require.min.js"></script>
<script>
  requirejs.config({
    baseUrl: '.'
  });
</script>
<!-- Dashboard Core -->
<link href="./assets/css/dashboard.css" rel="stylesheet" />
<script src="./assets/js/dashboard.js"></script>
<!-- c3.js Charts Plugin -->
<link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
<script src="./assets/plugins/charts-c3/plugin.js"></script>
<!-- Google Maps Plugin -->
<link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
<script src="./assets/plugins/maps-google/plugin.js"></script>
<!-- Input Mask Plugin -->
<script src="./assets/plugins/input-mask/plugin.js"></script>
<!-- Datatables Plugin -->
<script src="./assets/plugins/datatables/plugin.js"></script>
</head>
<body class="">
  <div class="page">
    <div class="flex-fill">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <a class="header-brand" href="./index">
              <img src="../logo.png" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown" aria-expanded="false">
                  <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                  <span class="ml-2 d-none d-lg-block">
                    <span class="text-default"><?=$_SESSION["username"];?></span>
                    <small class="text-muted d-block mt-1"><?=$_SESSION["level"]?></small>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="position: absolute; transform: translate3d(-56px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-user"></i> Profile
                  </a>
                  <a class="dropdown-item" href="../logout.php">
                    <i class="dropdown-icon fe fe-log-out"></i> Keluar
                  </a>
                </div>
              </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
              <span class="header-toggler-icon"></span>
            </a>
          </div>
        </div>
      </div>
