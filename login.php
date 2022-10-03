<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

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