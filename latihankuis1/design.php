<?php
include 'config.php';

// cek apakah user udah login/pendaftaran
if (!isset($_SESSION['user_daftar'])) {
    // Jika belum, redirect ke halaman daftar
    header("Location: daftar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Kucing - Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="index.php">Komunitas Kucing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftar.php">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="design.php">Design</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
    <h1 class="fst-italic">Design Laboratory</h1>
    <p class="mb-3">Ini kucing imut</p>
    <img src="https://i.pinimg.com/control1/1200x/0d/18/a6/0d18a67ec2948cd5248e176aac9e99b0.jpg" 
         alt="Kucing Lucu"
         class="img-fluid rounded shadow"
         style="max-height: 400px;">
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>