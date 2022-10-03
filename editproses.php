<?php

include 'config.php';

    $id = $_POST['id_buku'];
	$penulis = $_POST['penulis'];
	$tahun = $_POST['tahun'];
    $judul = $_POST['judul'];
    $kota = $_POST['kota'];
    $penerbit = $_POST['penerbit'];
    $cover = $_POST['cover'];
    $sinopsis = $_POST['sinopsis'];
    $stok = $_POST['stok'];

    $query = mysqli_query($conn, "UPDATE buku SET id_buku='$id', penulis='$penulis',tahun='$tahun',judul='$judul',kota='$kota', penerbit='$penerbit', cover='$cover', sinopsis='$sinopsis', stok='$stok' WHERE id_buku='$id' ");
	if($query){
        header("location:databuku.php");
    }
?>
