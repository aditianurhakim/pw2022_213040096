<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 5 (20 Mei 2022)
Materi kali ini mempelajari cara menampilkan array dengan benar
Latihan 2 - Menampilkan Array
*/

// Pengulangna pada array
// for / foreach
$angka = [3,2,15,20,11,77,89,8];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>
    <?php for ($i=0; $i < count($angka); $i++) { ?> 
        <div class="kotak"><?= $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $key) { ?>
        <div class="kotak"><?php echo $key; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach ($angka as $key) { ?>
        <div class="kotak"><?= $key; ?></div>
    <?php } ?>
</body>
</html>

