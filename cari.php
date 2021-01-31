<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>

    
    <div class="container col-mt-3">
        <div class="row">
            <div class="col-md-5">
            <form method="post" encytype="multipart/form-data">
            <div class="card-header bg-primary text-white">
                Tabel Mahasiswa
            </div>
            <div class="form-group row mt-2">
            <div class="col-sm-10">
                <input type="text" name="keyboard" class="form-control" id="">
            </div>
                <button type="submit" class="btn btn-sm btn-succes" name="cari">Cari</button>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                <tr>
                    <th>ID MAHASISWA</th>
                    <th>NPM MAHASISWA</th>
                    <th>NAMA MAHASISWA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>KODE POS</th>
                    <th>AKSI</th>
                </tr>
                <?php   
                    include "koneksi.php";
                    if(isset($_POST["cari"])){
                        $search = $_POST['keyword'];
                        $query = $koneksi->query("SELECT * FROM db_mhs WHERE nama_mhs LIKE '$search$' ORDER BY id_mhs ASC");
                    }else {
                        $query = $koneksi->query("SELECT * FROM db_mhs ORDER BY id-mhs ASC");
                    }
                    $no = 1;
                    while($data=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $data['npm_mhs']; ?> </td>
                    <td> <?php echo $data['nama_mhs']; ?> </td>
                    <td> <?php echo $data['tempat_lahir']; ?> </td>
                    <td> <?php echo $data['tanggal_lahir']; ?> </td>
                    <td> <?php echo $data['jenis_kelamin']; ?> </td>
                    <td> <?php echo $data['alamat']; ?> </td>
                    <td> <?php echo $data['kodepos']; ?> </td>
                    <td>
                    <a href="editmahasiswa.php?id_mhs=<?php echo $data['id_mhs'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete.php?id_mhs=<?php echo $data['id_mhs'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>


            </table>

            </div>
        </div>
    </div>


</body>
</html>

