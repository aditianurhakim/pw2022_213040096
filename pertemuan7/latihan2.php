<?php 

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 7 (23 Mei 2022)
Materi kali ini sambungan dari Latihan 1 yaitu mempelajari penampilan data dari GET
Latihan 2 - GET (Terima)
*/

// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || 
    !isset($_GET["id"]) ||
    !isset($_GET["instansi"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])
    ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <img src="img/<?= $_GET["gambar"]; ?>" alt="">
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["id"]; ?></li>
        <li><?= $_GET["instansi"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">Back</a>
</body>
</html>