<?php
    require 'koneksi.php';

    $id_mhs = $_GET['id_mhs'];
    
    $GetTabel = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id_mhs'");
    $GetData = mysqli_fetch_array($GetTabel);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>

    <style>
        .navtop {
			background-color: burlywood;
			height: 60px;
			width: 100%;
			border: 0;
			text-align: center
		}
        form{
            border: 3px solid goldenrod;
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: rgb(105, 89, 68);
            
        }
        button {
			padding: 14px 20px;
            color: white;
            background-color: chocolate;
            margin: 8px 0;
            border: none;
            width: 30%;
           border-radius: 5px;
		}

    </style>
</head>
<body>
    <div class="navtop">
        <h1 > EDIT DATA MAHASISWA
                    <?php   // echo $_SESSION['username'];
                // echo $_SESSION['password'];
                    ?></h1> <br> <br>
    </div>
    <form method="POST" autocomplete="OFF"  action="UpdateData.php">
        <input type="hidden" name="id_mhs" value="<?php echo "$GetData[id_mhs]" ?>">

        <p>*NIM</p>
        <input type="text" name="nim" value="<?php echo "$GetData[nim]"?>" required autofocus>
        <p>*Nama</p> 
        <input type="text" name="nama" value="<?php echo "$GetData[nama]"?>" required>
        <p>*Jenis Kelamin</p>
        <select name="jkelamin" required>
            <option value="Laki-laki" <?php if($GetData['jkelamin'] == 'Laki-laki') {echo "selected"; } ?> >Laki-laki</option>
            <option value="Perempuan" <?php if($GetData['jkelamin'] == 'Perempuan') {echo "selected"; } ?>>Perempuan</option>
        </select>
        <p>*PRODI</p>
        <input type="text" name="prodi" value="<?php echo "$GetData[prodi]"?>" required>
        <p>*Email</p>
        <input type="email" name="email" value="<?php echo "$GetData[email]"?>" required>
        <p>*Asal</p>
        <input type="text" name="asal" value="<?php echo "$GetData[asal]"?>" required>
        <p>
            <button type="submit" >Update</button>
        </p>
    </form>
</body>
</html>