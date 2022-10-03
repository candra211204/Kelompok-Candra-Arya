<?php
include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $query ="SELECT * FROM siswa join `role` on siswa.role = role.id WHERE nama = '$nama' AND password = '$password' ";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    if ($data) {
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        header('location:beranda.php');
    }else{
        echo "<script>alert('username salah')</script>";
    }
}
if (isset($_SESSION['nama'])) {

    header("Location: beranda.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
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

    <div class="container container-kartu">
        <div class="row">
            <div class="col-md-6 gambar-ilustrasi">
                <img src="assets/bootstrap/gambar/gambarlogin.png" alt="" width="500">
            </div>
            <div class="col-md-6">
                <div class="card border-0 text-center" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="container form-pengisian">
                        <form>
                            <h5 class="card-title judul-login"><b>Silahkan Login</b></h5>
                                <div class="mb-3">
                                <input type="email" class="form-control rounded-pill isi-form" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill isi-form" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" class="cekbox" id="cekbox">
                                <label for="cekbox">Ingat Saya</label>
                            </div>
                        </form>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary rounded-pill"><b>Go</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>

