<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $kelompok_umur = mysqli_real_escape_string($koneksi, $_POST['kelompok_umur']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    
    $hobi_array = isset($_POST['hobi']) ? $_POST['hobi'] : [];
    $hobi = implode(", ", $hobi_array);
    
    $asal_daerah = mysqli_real_escape_string($koneksi, $_POST['asal_daerah']);
    $alasan = mysqli_real_escape_string($koneksi, $_POST['alasan']);
    
    $query = "INSERT INTO anggota (nama, tanggal_lahir, kelompok_umur, jenis_kelamin, hobi, asal_daerah, alasan) 
              VALUES ('$nama', '$tanggal_lahir', '$kelompok_umur', '$jenis_kelamin', '$hobi', '$asal_daerah', '$alasan')";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['user_daftar'] = $nama;
        
        header("Location: design.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: daftar.php");
    exit();
}
?>