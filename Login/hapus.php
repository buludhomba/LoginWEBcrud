<?php
    require 'koneksi.php';

    $id_mhs = $_GET['id_mhs'];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mhs = '$id_mhs'");
    echo "
        <script>
            alert('Berhasil menghapus data');
            document.location = 'home.php';
        </script>
    ";
?>