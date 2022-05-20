<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 5 (20 Mei 2022)
Materi kali ini mempelajari penggunaan Array
Latihan 1 - Penggunaan Array
*/

// array
// variabel yagn dapat memiliki banyak nilai
// elemen pada array boleh menampung tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";

echo "<br>";

// Menampilkan 1 elemen array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

echo "<br>";

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);