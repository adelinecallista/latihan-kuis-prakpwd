<?php
session_start();
session_destroy();
header("Location: index.php");
exit();
?>

<!-- cara logoutnya langsung di alamat webnya, jadi http://localhost/latihankuis1/logout.php -->