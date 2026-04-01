<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Kucing - Pendaftaran</title>
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
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Form Pendaftaran Komunitas Kucing</h3>
                </div>
                <div class="card-body">
                    <form action="proses_daftar.php" method="POST">
                        <!-- Nama Lengkap - text -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        
                        <!-- Tanggal Lahir - date -->
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                        
                        <!-- Dropdown Kelompok Umur -->
                        <div class="mb-3">
                            <label for="kelompok_umur" class="form-label">Kelompok Umur</label>
                            <select class="form-select" id="kelompok_umur" name="kelompok_umur" required>
                                <option value="">Pilih Kelompok Umur</option>
                                <option value="Anak-anak">Anak-anak</option>
                                <option value="Remaja">Remaja</option>
                                <option value="Dewasa">Dewasa</option>
                            </select>
                        </div>
                        
                        <!-- Radio button Jenis Kelamin -->
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
                                    <label class="form-check-label">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required>
                                    <label class="form-check-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Checkbox Hobi -->
                        <div class="mb-3">
                            <label class="form-label">Hobi</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hobi[]" value="Main Game">
                                    <label class="form-check-label">Main Game</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hobi[]" value="Ngoding">
                                    <label class="form-check-label">Ngoding</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hobi[]" value="Bermain dengan kucing">
                                    <label class="form-check-label">Bermain dengan kucing</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Asal Daerah - text -->
                        <div class="mb-3">
                            <label for="asal_daerah" class="form-label">Asal Daerah</label>
                            <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" required>
                        </div>
                        
                        <!-- Text Area Alasan -->
                        <div class="mb-3">
                            <label for="alasan" class="form-label">Alasan Ingin Bergabung</label>
                            <textarea class="form-control" id="alasan" name="alasan" rows="4" required></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>