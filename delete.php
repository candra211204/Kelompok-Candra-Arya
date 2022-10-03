<?php
include 'config.php';

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM buku WHERE id_buku='$id'");

if ($delete) { ?>
    <script>
        document.location = "databuku.php";
    </script>
<?php
}else {
    echo "coba lagi";
}
?>