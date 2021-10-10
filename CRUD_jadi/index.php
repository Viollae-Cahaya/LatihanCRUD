<?php include './koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>DATABASE SISWA</p>
    <?php



    ?>
    <a href="./tambahdata.php">Data baru</a>


    <?php
    $sql = 'select * from data';
    $result = mysqli_query($conn, $sql);
    ?>
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data ['nama'] ?></td>
                <td><?php echo $data ['alamat'] ?></td>
                <td>
                <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-success">edit</a>
                <a href="hapusdata.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</body>
</html>