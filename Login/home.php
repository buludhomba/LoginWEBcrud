<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<style>
		.navtop {
			background-color: burlywood;
			height: 60px;
			width: 100%;
			border: 0;
			text-align: center
		}
		button {
			padding: 14px 20px;
            color: white;
            background-color: chocolate;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 10%;
           border-radius: 5px;
		}
		.table {
			width: 100%;
            padding: 14px 20px;
            display: inline-block;
            box-sizing: border-box;
            
		}
		th {
			background-color: chocolate
		}
		td {
			background-color: burlywood
		}


	</style>
</head>
<body>
	<center>
		<div class="navtop">
			<h1 > FORM TABEL DATA MAHASISWA
				<?php   // echo $_SESSION['username'];
			// echo $_SESSION['password'];
				?></h1> <br> <br>
		</div>
		
	</center>
 		
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>


	
	<a href="tambahData.php"><button>Tambah Data</button></a> <br> <br> <br>
	<table border="1" class="table">
		<tr>
		<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
            <th>Prodi</th>
            <th>Email</th>
           	<th>Asal</th>
			<th>Opsi</th>	
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		while($d = mysqli_fetch_array($data)){ //variabel $d isinya mysql_fetch .... kenapa ga $data aja? karena $data isinya mysqly_query ($koneksi, "Select ....)
		//mysqli_fetch_array itu menampilkan data dlm bntuk array asosiatif dan numeric, misal echo $d['nim'] dan $d[1] (nah NIM itukan masuk dikolom nomer 2, kalau dalam array masuk ke array 1)
		//mysqli_feth_row naah sedangkan nmpilin data dlm bntuk array asosiatif doang yang row itu cuma bisa echo $d['nim'] yang $d[1] TIDAK BISA krna numerik
		//lebih jelas lihat disini https://youtu.be/gvkr2V-JULE di waktu 25:55

		
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jkelamin']; ?></td>
            <td><?php echo $d['prodi']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['asal']; ?></td>
			<td>
				<a class="edit" href="EditData.php?id_mhs=<?php echo $d['id_mhs']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id_mhs=<?php echo $d['id_mhs']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
    
</body>
</html>