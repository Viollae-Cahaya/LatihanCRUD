<?php

include './koneksi.php';

$id = $_GET['id'];

$sql = "
        delete from data
        where id = '" . $id . "';
";

        $result =mysqli_query($conn, $sql);
        if($result) {
            header('location: index.php');
        } else {
            printf('gagal menghapus data : ' . mysqli_error($conn));
            exit();
        }