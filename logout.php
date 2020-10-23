<?php 
session_start();
//hapus session
unset($_SESSION["username"]);
unset($_SESSION["level"]);
unset($_SESSION["registrasi"]);

// redirek ke halaman login
header('location:index');
?>