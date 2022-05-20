<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 5 (20 Mei 2022)
Materi kali ini merupakan penggabungan pemahaman dari Latihan 1 dan Latihan 2 yaitu Array Multidimensi
Latihan 3 - Array Multidimensi
*/

$mahasiswa = [
    ["Aditia Nurhakim", "213040096", "Teknik Informatika", "aditianurhakim@gmail.com"],
    ["Elon Musk", "213040097", "Teknik Elektro", "elonmusk@tesla.com"],
    ["Jeff Bezos", "213040098", "Teknik Lingkungan", "jeffbezos@amazon.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>