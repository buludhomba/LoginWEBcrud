<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>

    <style>
        form{
            border: 3px solid goldenrod;
            margin: auto;
            width: 50%;
            padding: 10px;
            background-color: rgb(105, 89, 68);
            
        }
        .navtop {
			background-color: burlywood;
			height: 60px;
			width: 100%;
			border: 0;
			text-align: center
		}
        .container{
            padding: 10px;
            color: white;
            
        }
        .input{
            width: 100%;
            padding: 14px 20px;
           
            box-sizing: border-box;
            color: white;
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
                <h1 > FORM TAMBAH DATA MAHASISWA
                    <?php   // echo $_SESSION['username'];
                // echo $_SESSION['password'];
                    ?></h1> <br> <br>
            </div>

    <form method="POST" autocomplete="OFF"  action="ProsesInsert.php">
        <p>NIM</p>
        <input type="text" name="nim" required autofocus>
        <p>Nama</p>
        <input type="text" name="nama" required>
        <p>Jenis Kelamin</p>
        <select name="jkelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <p>PRODI</p>
        <input type="text" name="prodi" required>
        <p>*Email</p>
        <input type="email" name="email" required>
        <p>Asal</p>
        <input type="text" name="asal" required>
        <p>
            <button type="submit" name="">Simpan Data</button>
        </p>
    </form>
</body>
</html>