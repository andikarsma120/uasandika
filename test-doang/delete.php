<?php
    include "koneksi.php";
    $id = $_GET['id_mhs'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tb_mhs WHERE id_mhs = '$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/test-doang/tabelmahasiswa.php'>";
?>