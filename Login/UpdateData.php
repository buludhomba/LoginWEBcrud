<?php
    require 'koneksi.php';
   

    $id_mhs = $_POST['id_mhs'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkelamin = $_POST['jkelamin'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];
    $asal = $_POST['asal'];
    
    mysqli_query($koneksi, "UPDATE mahasiswa SET nim = '$nim', nama ='$nama', jkelamin ='$jkelamin', prodi ='$prodi', email ='$email', asal ='$asal' WHERE id_mhs='$id_mhs' "); 
    echo "
        <script>
            alert('Data Anda Berhasil Ter Update!');
            document.location = 'home.php';
        </script>
    ";




?>