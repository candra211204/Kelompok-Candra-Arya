
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
    <link rel="stylesheet" href="databuku.css">
    <link rel="stylesheet" href="logo\css\all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container">
            <img src="assets/bootstrap/gambar/bukulogo.png" alt="Bootstrap" width="80" class="logo-buku">
            <span class="navbar-brand mb-0 h1">DATA BUKU</span>
            <form class="d-flex ms-auto cari-buku" role="search">
                <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari Buku.." aria-label="Search">
                <button class="btn btn-outline-info rounded-pill cari" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </nav>
    <div class="container mt-4 ">
        <a href="tambahbuku.php"class="btn btn-info rounded-pill text-light tambah"> Tambah Buku</a>
        <a href="beranda.php"class="btn btn-info rounded-pill text-light kembali"> Kembali</a>
        <br><br>
        <table class="table text-center table-dark text-light">
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
                        <td class="text-center">
                            <br>
                            <a href="peminjaman.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-outline-primary rounded-pill pinjam"><b>Pinjam</b></button></a>
                            <br><br>
                            <a href="edit.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-outline-primary rounded-pill edit"><i class="fa-solid fa-pen-to-square"></i></button></a>
                            <br><br>
                            <a href="delete.php?id=<?php echo $data['id_buku'];?>"><button class="btn btn-outline-danger rounded-pill hapus"><i class="fa-solid fa-trash"></i></button>
                            <br><br>
                        </td>
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
