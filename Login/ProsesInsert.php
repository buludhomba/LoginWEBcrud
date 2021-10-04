<?php
    require 'koneksi.php';
    header('Location:home.php');

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkelamin = $_POST['jkelamin'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $asal = $_POST['asal'];
    
    mysqli_query($koneksi, "INSERT INTO mahasiswa  ( nim, nama, jkelamin, prodi,email, asal )VALUES  ('$nim', '$nama', '$jkelamin', '$prodi', '$email', '$asal' )"); 





?>