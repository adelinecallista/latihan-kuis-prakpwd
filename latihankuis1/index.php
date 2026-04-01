<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Kucing - Home</title>
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

<div class="container my-5">
    <div class="row">
        <div class="col-lg-11 mx-auto">

            <h1 class="mb-4 fst-italic">Selamat Datang di Komunitas Kucing</h1>

        <div class="row align-items-start">
            <div class="col-md-5 mb-4">
                <img src="https://i.pinimg.com/1200x/36/03/62/36036279ace66aa1d886322fd7d633a4.jpg" 
                     class="img-fluid rounded shadow mb-3" 
                     alt="Kucing Lucu"
                     style="width: 100%; border: 3px solid orange; object-fit: cover;">

            <a href="https://id.wikipedia.org/wiki/Kucing" class="btn btn-primary w-70" target="_blank">
                Informasi Lebih Lanjut
            </a>   
            </div>

            <div class="col-md-7">
            <p class="text-content text-danger">
                Kucing adalah hewan mamalia kecil yang dikenal dengan sifatnya yang lincah, anggun, dan penuh rasa ingin tahu. 
                Tubuhnya lentur dengan bulu lembut yang beragam warna, serta mata tajam yang mampu melihat jelas di kondisi 
                minim cahaya. Kucing termasuk hewan karnivora, namun dapat beradaptasi hidup bersama manusia sebagai hewan 
                peliharaan. Mereka memiliki kebiasaan mengejar untuk menandai wilayah, merawat diri dengan menjilati bulunya, 
                serta tidur dalam waktu lama, bisa mencapai 12-16 jam per hari. Kucing sering dianggap membawa kenyamanan dan 
                kasih sayang, sehingga menjadi salah satu hewan peliharaan paling populer di dunia.
            </p>
            
            <p class="text-content text-primary">
                Kucing seperti anjing termasuk hewan yang penyayang. Riset yang dilakukan scientificamerican mengungkapkan 
                kucing mempelajari sendiri cara mengeluarkan bunyi meow yang bisa menarik perhatian manusia. Berikut 
                Macam-Macam Kucing:
            </p>
            
            <h4>Jenis-Jenis Kucing:</h4>
            <ol style="color:purple;"> 
                <li>Kucing Garong</li>
                <li>Kucing Mainan</li>
                <li>Kucing Tuan Muda</li>
                <li>Kucing Nakal</li>
            </ol>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>