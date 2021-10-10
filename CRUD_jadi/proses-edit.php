<?php

include './koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$sql = "
        update data
        set nama = '" . $nama . "' , alamat = '" . $alamat . "'
        where id = '" . $id . "';
        ";

        $result =mysqli_query($conn, $sql);
        if ($result) {
            header('location: index.php');
        } else {
            printf('gagal mengubah : ' . mysqli_error($conn));

        }