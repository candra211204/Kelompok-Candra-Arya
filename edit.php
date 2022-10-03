<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">

</head>
<body>
    <div class="container">

    <?php
    $id = $_GET['id'];
    $ambil = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id'");
    while ($data = mysqli_fetch_array($ambil)) {
    
    
?>
    <h1 class="text-center">Edit Data</h1>
    <form action="editproses.php" method="POST">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Data Buku</th>
					</tr>
				</thead>
				<tbody>
                <tr>
						<td>ID Buku</td>
						<td><input type="text" class="form-control" readonly name="id_buku" value="<?php echo $data['id_buku']  ?>"></input></td>
					</tr>
                    <tr>
						<td>penulis</td>
						<td><input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis']  ?>"></input></td>
					</tr>
					<tr>
						<td>tahun</td>
						<td><input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']  ?>"></input></td>
					</tr>
					<tr>
						<td>judul</td>
						<td><input type="text" class="form-control" name="judul" value="<?php echo $data['judul']  ?>"></input></td>
					</tr>
					<tr>
						<td>kota</td>
						<td><input type="text" class="form-control" name="kota" value="<?php echo $data['kota']  ?>"></input></td>
					</tr>
					<tr>
						<td>Penerbit</td>
						<td><input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']  ?>"></input></td>
					</tr>
					<tr>
						<td>cover</td>
						<td><input type="number" class="form-control" name="cover" value="<?php echo $data['cover']  ?>"></input></td>
					</tr>
                    <tr>
						<td>sinopsis</td>
						<td><input type="number" class="form-control" name="sinopsis" value="<?php echo $data['sinopsis']  ?>"></input></td>
					</tr>
                    <tr>
						<td>stok</td>
						<td><input type="number" class="form-control" name="stok" value="<?php echo $data['stok']  ?>"></input></td>
					</tr>
				</tbody>
			</table>
            <div class="text-end">
			<a href="databuku.php" type="button" class="btn btn-danger"> Kembali </a>
			<button type="submit" name="submit" class="btn btn-success">Submit</button>
		</div>
        <?php
    }
    ?>
    </form>



        </div>




    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>