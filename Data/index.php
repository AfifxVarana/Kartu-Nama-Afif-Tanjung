<?php

include 'config/app.php';


$data_mahasiswa = select("SELECT * FROM mahasiswa_baru ORDER BY id_no ASC");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>



    <div class="container mt-5">
        <h5>Data Pendaftaran Mahasiswa Baru</h5>
          <a href="create.php"  class="btn btn-primary btn-lg mb-3">New</a>

             <table class="table table-bordered table-striped">
               <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Asal Sekolah</th>
                        <th>Peminatan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($data_mahasiswa as $mahasiswa_baru): ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $mahasiswa_baru['nama_lengkap']; ?></td>
                            <td><?php echo $mahasiswa_baru['tanggal_lahir']; ?></td>
                            <td><?php echo $mahasiswa_baru['asal_sekolah']; ?></td>
                            <td><?php echo $mahasiswa_baru['peminatan']; ?></td>
                            <td><?php echo $mahasiswa_baru['alamat']; ?></td>
                            <td width="15%" class="text-center">
                                <a href="edit.php?id_no=<?=$mahasiswa_baru['id_no']; ?>" class="btn btn-success">Edit</a>
                                <a href="delete.php?id_no=<?=$mahasiswa_baru['id_no']; ?>" class="btn btn-danger" onclick= "return confirm ('Apakah Anda Yakin Data Ingin Dihapus');">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
