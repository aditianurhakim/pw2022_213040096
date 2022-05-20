<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 4 (20 Mei 2022)
Materi kali ini mempelajari penggunaan Built-in Function
Date
*/

// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l") . "<br>";
echo date("d") . "<br>";
echo date("M") . "<br>";
echo date("m") . "<br>";
echo date("l, d-M-Y") . "<br>";

echo "<br>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time() . "<br>";
echo date("l", time()+60*60*24*2) . "<br>";
echo date("d M Y", time()-60*60*24*2) . "<br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan tanggal, tahun
echo "Hari lahir anda adalah : " . date("l", mktime(0,0,0,4,4,1997)) . "<br>";

// strtotime
echo date("l",  strtotime("4 Apr 1997")) . "<br>";