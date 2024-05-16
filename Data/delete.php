<?php


include 'config/app.php';

// Menerima Id Data Mahasiswa yang dipilih user

$id_no = (int)$_GET['id_no'];

if (delete_data($id_no) > 0) {

    echo "<script>
                alert('Succeeded!!'); //
                document.location.href = 'index.php';
          </script>";
 } else {
    echo "<script>
            alert('Failed!!'); //
            document.location.href = 'index.php';
          </script>";

}

?>