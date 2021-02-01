<?php
    include "koneksi.php";
    $id = $_GET["id_mhs"];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM tb_mhs WHERE id_mhs='$id'");
    $data=mysqli_fetch_array($ambilData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Data Mahasiswa
            </div>
            <div class="card-body">
            <form action="" method="POST" class="form-item">
            
            <div class="form-group">
                        <label for="npmmhs">NPM MAHASISWA</label>
                        <input type="text" name="npmmhs" value="<?php echo $data['npm_mhs']?>" class="form-control colt-mb-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="namamhs">NAMA MAHASISWA</label>
                        <input type="text" name="namamhs" value="<?php echo $data['nama_mhs']?>"class="form-control colt-mb-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">TEMPAT LAHIR</label>
                        <input type="text" name="tempatlahir" value="<?php echo $data['tempat_lahir']?>" class="form-control colt-mb-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggallahirr">TANGGAL LAHIR</label>
                        <input type="date" name="tanggallahir" value="<?php echo $data['tanggal_lahir']?>" class="form-control colt-mb-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenisklmn">JENIS KELAMIN</label>
                        <input type="text" name="jenisklmn" value="<?php echo $data['jenis_kelamin']?>" class="form-control colt-mb-9" placeholder="Masukkan Jenis Kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control colt-mb-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="kodepos">KODEPOS</label>
                        <input type="number" name="kodepos" value="<?php echo $data['kodepos']?>" class="form-control colt-mb-9" placeholder="Masukkan Kodepos">
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
        $tanggallahir       = $_POST['tanggallahir'];
        $tempatlahir       = $_POST['tempatlahir'];
        $jenisklmn       = $_POST['jenisklmn'];
        $alamat     = $_POST['alamat'];
        $kodepos    = $_POST['kodepos'];

        mysqli_query($koneksi, "UPDATE tb_mhs 
        SET npm_mhs='$npmmhs', nama_mhs='$namamhs ', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', jenis_kelamin=' $jenisklmn', alamat='$alamat', kodepos='$kodepos'
        WHERE id_mhs='$id'") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang Diupdate....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/test-doang/tabelmahasiswa.php'>";
    }
?>