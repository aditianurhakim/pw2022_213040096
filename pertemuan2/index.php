<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 2 (24 April 2022)
Materi minggu ini mempelajari penggunaan sintaks dasar PHP, variabel, dan tipe data
*/

?>

<?php

// Standar output
// echo, print
// print_r
// var_dump

echo "Aditia Nurhakim";
echo "<br>";
print "Nurhakim Aditia";
print "<br>";
print_r ("Adi Tia");
echo "<br>";
var_dump ("Aditia Nurhakim");
echo "<br>";

echo 1500;
echo "<br>";
echo FALSE;
echo "<br>";
echo TRUE;
echo "<br>";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo "Aditia Nurhakim"; ?></h1>
    <p><?php echo "ini adalah paragraf."; ?></p>
</body>
</html>

<?php

// Penulisan sintaks PHP
// 2. HTML di dalam PHP

echo "<h1>Halo, selamat datang Aditia Nurhakim</h1>";

?>

<?php

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

$nama = "Aditia Nurhakim";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
</body>
</html>

<?php

//Perbedaan penggunaan " dan '

echo "Halo, nama saya $nama";
echo "<br>";
echo 'Halo, nama saya $nama';
echo "<br>";

//Operator
//Aritmatika
// + - * / %

echo 10 / 2;
$a = 100;
$b = 99;
echo "<br>";
echo $a - $b;
echo "<br>";

// Penggabung string / concatenation
// .

$nama_depan = "Aditia";
$nama_belakang = "Nurhakim";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// Assignment
// =, +=, -=, *=, /=, %=, .=

$c = 1;
$c -= 5;
echo $c;
echo "<br>";

$nama_gabung = "Aditia";
$nama_gabung .= " ";
$nama_gabung .= "Nurhakim";
echo $nama_gabung;
echo "<br>";

// Perbandingan
// <, >, <=, >=, ==, !=

var_dump(1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump(1 == "1");
echo "<br>";

// Identitas
// ===, !==

var_dump(1 === "1");
echo "<br>";

// Logika
// &&, ||, !

$d = 10;
var_dump($d < 20 && $d % 2 == 0);
echo "<br>";

$e = 30;
var_dump($e < 20 || $e % 2 == 0);
echo "<br>";
?>