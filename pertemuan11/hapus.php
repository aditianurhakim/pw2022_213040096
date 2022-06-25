<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 11 (25 Juni 2022)
Materi kali ini delete, update, dan searching data
*/

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal ditambahkan!";
}
