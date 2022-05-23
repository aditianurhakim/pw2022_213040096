<?php 
/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 7 (23 Mei 2022)
Materi kali ini mempelajari penggunaan POST
Latihan 3 - POST (Kirim)
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"])) : ?>
    <h1>Halo, selamat datang <?= $_POST["nama"] ?></h1>
    <?php endif; ?>
    
    <form action="latihan4.php" method="post">
        Masukkan nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>