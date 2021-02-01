<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                </br>
                </br>
                <div class="">
            <style> form {width:500px;margin:50px auto;}.search 
            {padding:8px 15px; background: #f0f8ff; border:2px solid #008080;}.cari 
            {position:relative;left:-4px; padding:10px 15px; border:0px solid #008080; background-color: #6B8E23; color:#fafafa;font-weight:bold;}
            .cari:hover {background: #008080; color:#fafafa;}.cari:active {background:#9ACD32;}
            </style>
            <form action="" method="POST">
            <input type="search" class="search" name="query"  placeholder="Cari Data" size="40" autofocus=" " autocomplete="off">
            <input type="submit" value="Cari" class="cari" name="cari">
            </form>

            </div>

            </br>

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
                error_reporting(0);
                $no = 1;

                $query = $_POST['query'];
                if($query !=''){
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mhs WHERE npm_mhs LIKE '%".$query."%' OR
                    nama_mhs LIKE '%".$query."%' OR tempat_lahir LIKE '%".$query."%' 
                     ");
                }
                

                else{ $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mhs");}
                 $query = $_POST['query'];

                while($data=mysqli_fetch_array($tampil))
                {  
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

