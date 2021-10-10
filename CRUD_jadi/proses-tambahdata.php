<?php include './koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "insert into data (nama, alamat) values ('". $nama ."','". $alamat ."')";
$result = mysqli_query($conn, $sql);
if ($result) {
        echo "<script>alert('Sukses menambahkan siswa');location.href='index.php';</script>";  
} else {
        printf ('gagal menambahkan : ' . mysqli_errno($conn));
        exit();
}     