<?php
include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Tambah Data</h1>
		<form action="" method="post">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Data Buku</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Id Buku</td>
						<td><input type="number" class="form-control" name="id_buku" placeholder="Masukkan id buku"></input></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td><input type="text" class="form-control" name="penulis" placeholder="Masukkan Nama Penulis"></input></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td><input type="number" class="form-control" name="tahun" placeholder="Masukkan Tahun Penerbitan"></input></td>
					</tr>
					<tr>
						<td>Judul</td>
						<td><input type="text" class="form-control" name="judul" placeholder="Masukkan Judul"></input></td>
					</tr>
					<tr>
						<td>Kota</td>
						<td><input type="text" class="form-control" name="kota" placeholder="Masukkan Kota Terbit"></input></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td><input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit"></input></td>
					</tr>
                    <tr>
						<td>Cover</td>
						<td><input type="text" class="form-control" name="cover" placeholder="Masukkan penerbit"></input></td>
					</tr>
                    <tr>
						<td>Sinopsis</td>
						<td><input type="text" class="form-control" name="sinopsis" placeholder="Masukkan Sinopsis"></input></td>
					</tr>
                    <tr>
						<td>Stok</td>
						<td><input type="number" class="form-control" name="stok" placeholder="Masukkan Jumlah Stok"></input></td>
					</tr>
				</tbody>
			</table>
			<div class="text-end">
			<a href="databuku.php" type="button" class="btn btn-danger"> Kembali </a>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
		</div>
		</form>
		
	</div>

    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
	<script src="assets\bootstrap\js\bootstrap.min.js"></script>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
    $id = $_POST['id_buku'];
	$penulis = $_POST['penulis'];
	$tahun = $_POST['tahun'];
    $judul = $_POST['judul'];
    $kota = $_POST['kota'];
    $penerbit = $_POST['penerbit'];
    $cover = $_POST['cover'];
    $sinopsis = $_POST['sinopsis'];
    $stok = $_POST['stok'];

    $query_insert = mysqli_query($conn, "INSERT INTO buku VALUES ('$id','$penulis','$tahun','$judul','$kota','$penerbit', '$cover', '$sinopsis', '$stok' )");
    
	?>
	<script>
		window.location.href = "databuku.php";
	</script>
	<?php

}
?>
