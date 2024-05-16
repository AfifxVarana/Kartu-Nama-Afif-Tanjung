<?php


// Function PHP


// Fungsi Menampilkan PHP

function select($query)

{

// Memanggil Database

    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    return $rows;

}

// Fungsi Menambah Data Mahasiswa

function create_data($post)
{
    global $db;

    $nama_lengkap = $post['nama_lengkap'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $asal_sekolah = $post['asal_sekolah'];
    $peminatan = $post['peminatan'];
    $alamat = $post['alamat'];

// Tambah Data

    $query = "INSERT INTO mahasiswa_baru VALUES(null, '$nama_lengkap', '$tanggal_lahir', '$asal_sekolah', '$peminatan', '$alamat')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}


// Fungsi Mengubah Data


function update_data($post) {

    global $db;

    $id_no = $post['id_no'];
    $nama_lengkap = $post['nama_lengkap'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $asal_sekolah = $post['asal_sekolah'];
    $peminatan = $post['peminatan'];
    $alamat = $post['alamat'];

// Tambah Data

    $query = "UPDATE mahasiswa_baru SET nama_lengkap = '$nama_lengkap', tanggal_lahir = '$tanggal_lahir', asal_sekolah = '$asal_sekolah', peminatan = '$peminatan', alamat = '$alamat' WHERE id_no = '$id_no'";   
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



// Fungsi Menghapus Data Barang

function delete_data($id_no){

    global $db;

    // Query Hapus Data

    $query = "DELETE FROM mahasiswa_baru WHERE id_no = '$id_no'";


    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}
?>