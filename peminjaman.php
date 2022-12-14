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
    <title>Detail Peminjaman</title>
    <link rel="stylesheet" href="peminjaman.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-4 ">
        <h1 class="text-center judul">DETAIL BUKU</h1>
        <a href="databuku.php"class="btn btn-outline-primary rounded-pill kembali"> Kembali</a>
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
                <th>Aksi</th>

                </tr>

            </thead>
            <tbody>
            <?php
            $id= $_GET['id'];
                $ambil = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id' ");
                $data = mysqli_fetch_assoc($ambil);{
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
                        <td>
                            <form action="" method="post">
                                <button class="btn btn-outline-primary rounded-pill pinjam" type="submit" name="submit">Pinjam</button>
                            </form>
                        </td>
                
                        <?php 
                        if (isset($_POST['submit'])){
                            $sql = "UPDATE buku SET buku.status='Kosong' WHERE buku.id_buku='$id'";
                            $result = mysqli_query($conn, $sql);

                        } ?>

                
                
                   
                <?php
                }
                ?>
                 </tr>
            </tbody>
        </table>

           
    </div> 

    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>