<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
$nis = $_POST('nis');
$nama = $_POST['nama'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];

$valid = mysqli_num_rows(mysqli_query($conn, "SELECT *  FROM siswa WHERE nis = '$nis'"));
if($valid > 0){
    echo "<script>alert('Username telah digunakan!')</script>";
 } else {
    
        $query2 = mysqli_query($conn, "INSERT INTO `siswa` (`nis`, `nama`, `password`, `jenis_kelamin`, `alamat`, `id_kelas`, `role`) VALUES('$nis', '$nama', '$password', '$jenis_kelamin', '$alamat', '$id_kelas', '2')");
    }
        if ($query2) {
             header('location:index.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">Bootcamp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
    </div>
    </nav>
    <div class="container border border-dark rounded bg-primary bg-opacity-10" style="margin-top:20px; padding:20px">
    <h2>Silahkan melengkapi form berikut untuk melakukan pendaftaran</h2>
    <form method="POST" action="">

        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" class="form-control" name="nis">
        </div>
        <div class="mb-3">
            <label required class="form-label">nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input required type="password" name="password" class="form-control" id="myInput">
        </div>
       
        <div class="mb-3">
            <label  class="form-label">Jenis Kelamin </label>
            <input name="jenis_kelamin"type="radio"  value="laki-laki" >Laki-laki
            <input name="jenis_kelamin" type="radio" value="Perempuan" >Perempuan<br>
        </div>
        <div class="mb-3">
            <label  class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="mb-3">
            <label  class="form-label">ID Kelas</label>
            <input type="text" class="form-control" name="id_kelas">
        </div>

        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <label class="form-label" ></label>
        
        <br><br>
        <?php 
            // if ($status=="udaada") {
            //     echo '<div class="alert alert-danger" role="alert">Mohon maaf username yang ada masukan sudah ada</div>';
            // }else if ($status=="tidaksama") {
            //     echo '<div class="alert alert-danger" role="alert">Konfirmasi password salah</div>';
            // } 
        ?>
    </form>
    
    </div>    



    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>
