<?php 

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 7 (23 Mei 2022)
Materi kali ini mempelajari simulasi form login menggunakan metode POST
Latihan 5 - Simulasi Login dengan POST
*/

// cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "passaja") {
        header("Location: admin.php ");
        exit;
    } else {
        $error = true; 
    }
}
// cek username & password

// jika benar, redirect ke halaman admin

// jika salah, tampilkan pesan kesalahan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: oblique;">username / password salah!</p>    
    <?php endif; ?>

    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Log in </button>
            </li>
        </form>
    </ul>
</body>
</html>