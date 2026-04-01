<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "komunitas_kucing";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Setting session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>