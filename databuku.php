
<?php
session_start();
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Perpustakaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 ">
        <h1 class="text-center"> DATA BUKU</h1>
        <a href="tambahbuku.php"class="btn btn-primary"> Tambah Buku</a>
        <a href="beranda.php"class="btn btn-primary"> Kembali</a>
        <table class="table table-striped table-hover">

            <thead>
                <tr>
                <th>ID</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Judul</th>
                <th>Kota</th>
                <th>Penerbit</th>
                <th>Cover</th>
                <th>Sinopsis</th>
                <th>Stok</th>
                <th>Status</th>
                <th>Aksi</th>

                </tr>

            </thead>
            <tbody>
                <?php
                $ambil = mysqli_query($conn, "SELECT * FROM buku");
                while ($data = mysqli_fetch_array($ambil)) {
                    ?>

                    <tr>
                        <td><?= $data['id_buku'] ?></td>
                        <td><?= $data['penulis'] ?></td>
                        <td><?= $data['tahun'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['kota'] ?></td>
                        <td><?= $data['penerbit'] ?></td>
                        <td><?= $data['cover'] ?></td>
                        <td><?= $data['sinopsis'];  ?></td>
                        <td><?= $data['stok'];  ?></td>
                        <td><?=$data['status']; ?></td>
                        <td><a href="peminjaman.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-primary">Pinjam</button></a></td>
                        <td><a href="pengembalian.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-primary">Pengembalian</button></a></td>
                        <td><a href="edit.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-primary">Edit</button></a></td>
                        <td><a href="delete.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

           
    </div> 

    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>
