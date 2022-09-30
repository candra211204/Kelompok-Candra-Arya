<?php
include 'config.php';
session_start();


if (isset($_POST['submit'])) {

$nama = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM siswa join `role` on  siswa.role = role.id WHERE nama = '$nama' AND password = '$password' ";
$result = mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($result);

    if ($data){
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        header('location:beranda.php')
    }else {
        header('location: login.php');

    }

}

if (isset($_SESSION['nama'])){

    header("Location: beranda.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
</head>
<body>
<div class="container border border-dark rounded bg-secondary bg-opacity-10" style="margin-top:20px; padding:10px">
    <h2>Silahkan login</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label  class="form-label">Username</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        <label class="form-label" ></label>
        
    </form>
    <a href="daftar.php"><button name="submit" type="submit" class="btn btn-primary">Register</button>
        <label class="form-label" ></label>
    </div>

<script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>