
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title> DATA MAHASISWA </title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                MASUKKAN DATA MAHASISWA
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">


                    <div class="form-group">
                        <label for="npmmhs">NPM MAHASISWA</label>
                        <input type="text" name="npmmhs" class="form-control colt-mb-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="namamhs">NAMA MAHASISWA</label>
                        <input type="text" name="namamhs" class="form-control colt-mb-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">TEMPAT LAHIR</label>
                        <input type="text" name="tempatlahir" class="form-control colt-mb-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggallahirr">TANGGAL LAHIR</label>
                        <input type="date" name="tanggallahir" class="form-control colt-mb-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenisklmn">JENIS KELAMIN</label>
                        <input type="text" name="jenisklmn" class="form-control colt-mb-9" placeholder="Masukkan Jenis Kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" class="form-control colt-mb-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kodepos">KODEPOS</label>
                        <input type="number" name="kodepos" class="form-control colt-mb-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button> 
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npmmhs       = $_POST['npmmhs'];
            $namamhs       = $_POST['namamhs'];
            $tempatlahir       = $_POST['tempatlahir'];
            $tanggallahir       = $_POST['tanggallahir'];
            $jenisklmn       = $_POST['jenisklmn'];
            $alamat     = $_POST['alamat'];
            $kodepos    = $_POST['kodepos'];

            mysqli_query($koneksi, "INSERT INTO tb_mhs VALUES('',
                '$npmmhs','$namamhs','$tempatlahir','$tanggallahir','$jenisklmn','$alamat', ' $kodepos' 
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/test-doang/tabelmahasiswa.php'>";
        }

?>