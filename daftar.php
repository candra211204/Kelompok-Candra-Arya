<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$id_kelas = $_POST['id_kelas'];
if ($password == $password2){
    $query ="SELECT *  FROM siswa WHERE nis = '$nis'" ;
    $sql = mysqli_query($conn, $query);
    $data = mysqli_num_rows($sql);
    if ($data==0) {
        $query = "INSERT INTO `siswa` (`nis`, `nama`, `password`, `jenis_kelamin`, `alamat`, `id_kelas`, `role`)VALUES 
        ('$nis', '$nama', '$password', '$jenis_kelamin', '$alamat', '$id_kelas', '2');";
        $result = mysqli_query($conn,$query);
        header('location:beranda.php?status=berhasil');
    }else{
        header('location:daftar.php?status=udaada');
    }
}else {
    header('location:daftar.php?status=tidaksama');
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
    <title>Daftar</title>
    <link rel="stylesheet" href="daftar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css">
    
</head>
<body>

    <!-- <div class="container border border-dark rounded bg-primary bg-opacity-10" style="margin-top:20px; padding:20px">
    <h2>Silahkan melengkapi form berikut untuk melakukan pendaftaran</h2>
    <form method="POST" action="">

        <div class="mb-3">
            <label class="form-label">NIS</label>
            <input type="text" class="form-control" name="nis">
        </div>
        <div class="mb-3">
            <label class="form-label">nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input required type="password" name="password" class="form-control" id="myInput">
        </div>
       
        <div class="mb-3">
        <label class="form-label" >Re-type password</label>
            <input required type="password" name="password2" class="form-control" id="myInput2"><br>
            <input type="checkbox" onclick="myFunction()">&nbsp;Show Password
        </div>

        <div class="mb-3">
            <label  class="form-label">Jenis Kelamin </label>
            <input name="jenis_kelamin"type="radio"  value="L" >L
            <input name="jenis_kelamin" type="radio" value="P" >P<br>
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
    
    </div>  -->
    <div class="tombol-kembali">
        <a href="beranda.php" class="btn btn-outline-primary rounded-pill kembali"><b>KEMBALI</b></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ilustrasi">
                    <img src="assets/ilustrasi/daftar.svg" alt="" width="500">
                </div>
            </div>
            <div class="col-md-6">
                <div class="isi-daftar text-center">
                    <h3 class="judul-daftar"><b>SILAHKAN DAFTAR</b></h3>
                    <br><br>
                    <form method="POST" action="">
                        <input type="text" class="form-control rounded-pill" name="nis" placeholder="NIS">
                        <br>
                        <input type="text" class="form-control rounded-pill" name="nama" placeholder="Nama">
                        <br>
                        <input required type="password" class="form-control rounded-pill" name="password" placeholder="Pasword" id="myInput">
                        <br>
                        <input required type="password" class="form-control rounded-pill" name="password2" placeholder="Re-Type Password"  id="myInput2">
                        <br>
                        <input type="checkbox" onclick="myFunction()" class="cek-password" id="cekbok">&nbsp;
                        <label for="cekbok" class="show-password">Show Password</label>
                        <br><br>
                        <label for="jeniskelamin">Pilih Jenis Kelamin</label>
                        <br>
                        <input name="jenis_kelamin"type="radio"  value="L" class="laki" id="jeniskelamin">Laki-Laki
                        <input name="jenis_kelamin" type="radio" value="P" class="perempuan" id="jeniskelamin">Perempuan
                        <br><br>
                        <input type="text" class="form-control rounded-pill" name="alamat" placeholder="Alamat">
                        <br>
                        <input type="text" class="form-control rounded-pill" name="id_kelas" placeholder="ID Kelas">
                        <br>
                        <a href="" class="btn btn-outline-primary rounded-pill tombol-submit" name="submit">SUBMIT</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            var y = document.getElementById("myInput2");
            if (x.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>


    <script src="assets\bootstrap\js\bootstrap.bundle.js"></script>
    <script src="assets\bootstrap\css\bootstrap.min.css"></script>
</body>
</html>
