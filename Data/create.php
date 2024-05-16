<?php

include 'config/app.php';

$data_mahasiswa = select("SELECT * FROM mahasiswa_baru");


// Pengecekan Keberhasilan Menambah Data Mahasiswa

if (isset($_POST['tambah'])) {
    if(create_data($_POST) > 0) {
        echo "<script>
                alert('Succeeded!!'); //
                document.location.href = 'index.php';
              </script>";
    } 
    else {
        echo "<script>
                alert('Failed!!'); //
                document.location.href = 'index.php';
              </script>";
        
    }
}

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
    <h5>Form Pendaftaran Mahasiswa Baru</h5>

    <form action='' method="post">

        <div class="row mb-5">
            <label for="nama_lengkap" class="col-sm-2 form-label">Nama Lengkap</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" Required>
                </div>

        </div>


        <div class="row mb-5">
            <label for="tanggal_lahir" class="col-sm-2 form-label">Tanggal Lahir</label>

                <div class="col-sm-10">
                     <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="YYYY-MM-DD" Required>
                </div>

        </div>


        <div class="row mb-5">
            <label for="asal_sekolah" class="col-sm-2 form-label">Asal Sekolah</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" Required>
                </div>

        </div>


        <div class="row mb-5">
            <label for="peminatan" class="col-sm-2 form-label">Peminatan</label>

     <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="peminatan" name="peminatan" value="Teknik Telekomunikasi" >
                    <label class="form-check-label" for="peminatan">Teknik Telekomunikasi</label>
               </div>

            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="peminatan" name="peminatan" value="Teknik Informatika" >
                    <label class="form-check-label" for="peminatan">Teknik Informatika</label>
            </div>
     </div>

        </div>


        <div class="row mb-5">
            <label for="alamat" class="col-sm-2 form-label">Alamat</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" Required>
                </div>

        </div>


        <a href="index.php" class="btn btn-warning">Kembali</a>
        <button type="submit" name="tambah" class="btn btn-primary">Daftar</button>

        
</div>






 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


