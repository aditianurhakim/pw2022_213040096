<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 6 (20 Mei 2022)
Materi kali ini mempelajari penggunaan Associative Array
Latihan 2 - Associative Array
*/

// $client = [
//     ["Aditia Nurhakim", "213040096", "Teknik Informatika", "aditianurhakim@gmail.com"],
//     ["Elon Musk", "213040097", "Teknik Elektro", "elonmusk@tesla.com"],
//     ["213040098", "Jeff Bezos", "Teknik Lingkungan", "jeffbezos@amazon.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$client = [
    [
        "nama" => "Aditia Nurhakim", 
        "id" => "1", 
        "instansi" => "Pemerintah Daerah Provinsi Jawa Barat", 
        "email" => "aditianurhakim@gmail.com",
        "gambar" => "aditia.jpg"
    ],
    [
        "instansi" => "Tesla, Inc", 
        "nama" =>  "Elon Musk", 
        "id" => "2", 
        "email" => "elonmusk@tesla.com",
        "gambar" => "elon.jpg"
    ],
    [
        "email" => "jeffbezos@amazon.com",
        "nama" => "Jeff Bezos", 
        "id" => "3", 
        "instansi" => "Amazon, Inc",
        "gambar" => "jeff.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Client</title>
</head>
<body>
    <h1>Daftar Client</h1>
    <?php foreach ($client as $mhs) : ?>
    <ul>
        <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>id : <?= $mhs["id"]; ?></li>
        <li>instansi : <?= $mhs["instansi"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>