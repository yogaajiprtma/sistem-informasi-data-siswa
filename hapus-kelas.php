<?php
$id =$_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id'");
if ($query) {
    echo '<script>alert ("data berhasil dihapus"); location.href="?page=kelas";</script>';
}
