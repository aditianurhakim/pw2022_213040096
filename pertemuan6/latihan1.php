<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 6 (20 Mei 2022)
Materi kali ini adalah review dari pertemuan5
Latihan 1 - Review pertemuan5
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: turquoise;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
        <div class="kotak"><?php echo $b; ?></div>
    <?php endforeach; ?>
<div class="clear"></div>
<?php endforeach; ?>

<div class="clear"></div>

<?php
echo $angka[2][2];
?>

</body>
</html>