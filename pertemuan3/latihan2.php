<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 3 (29 April 2022)
Materi minggu ini mempelajari penggunaan struktur kendali PHP
Latihan 2 - Pengkondisian/Percabangan
*/

// Pengkondisian
// if else
// if else if else
// ternary
// switch



$x = 10;
if ( $x < 20 ) {
    echo "benar";
}

echo "<br>";

$y = 30;
if ( $y < 20 ) {
    echo "benar";
} else {
    echo "salah";
}

echo "<br>";

$z = 20;
if ( $z < 20 ) {
    echo "benar";
} else if ( $z == 20 ) {
    echo "bingo!";
} else {
    echo "salah";
}

?>

<br>

<!-- Aplikasi pengkondisian pada tabel yang telah dibuat pada Latihan 1 (pewarnaan baris ganjil) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <?php for ($n = 1; $n <= 5; $n++) : ?>
            <?php if ( $n % 2 == 1 ) : ?>
                <tr class = "warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($o = 1; $o <= 5; $o++) : ?>
                    <td><?= "$n,$o" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>

<br>

<!-- Aplikasi pengkondisian pada tabel yang telah dibuat pada Latihan 1 (pewarnaan baris genap) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <?php for ($n = 1; $n <= 5; $n++) : ?>
            <?php if ( $n % 2 == 0 ) : ?>
                <tr class = "warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($o = 1; $o <= 5; $o++) : ?>
                    <td><?= "$n,$o" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>

<br>

<?php

// Switch

$a = 1;

switch ($a) {
    case 1:
        echo "anda memasukkan angka 1";
        break;

    case 2:
        echo "anda memasukkan angka 2";
        break;
    
    case 3:
        echo "anda memasukkan angka 3";
        break;
            
    default:
        echo "angka yang anda masukkan salah";
        break;
}

echo "<br>";

$b = "pork";

switch ($b) {
    case "kentang":
    case "sayur":
    case "air mineral":
        echo "makanan/minuman HALAL!";
        break;

    case "beer":
    case "pork":
        echo "makanan/minuman HARAM!";
        break;
            
    default:
        echo "makanan/minuman yang anda masukkan salah";
        break;
}

?>

<br>
<br>

<!-- Ternary -->

<?php

$c = 30;
echo ( $c < 20 ) ? "benar" : "salah";

?>