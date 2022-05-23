<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 7 (22 Mei 2022)
Materi kali ini mempelajari penggunaan GET
Latihan 2 - GET (Kirim)
*/

// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     // $x = 20;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// echo "<br>";
// echo "<br>";

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER);

// echo $_SERVER["SERVER_NAME"];
// echo "<br>";

// // $_GET
// $_GET["nama"] = "Aditia Nurhakim";
// $_GET["nrp"] = "213040096";

// var_dump($_GET);

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
    <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($client as $c) : ?>
            <li><a href="latihan2.php?nama=<?= $c["nama"]; ?>&id=<?= $c["id"]; ?>&instansi=<?= $c["instansi"]; ?>&email=<?= $c["email"]; ?>&gambar=<?= $c["gambar"]; ?>"><?= $c["nama"]; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>