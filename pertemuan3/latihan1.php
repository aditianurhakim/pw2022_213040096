<?php

/*
Aditia Nurhakim
213040096
https://github.com/aditianurhakim/pw2022_213040096
Pertemuan 3 (29 April 2022)
Materi minggu ini mempelajari penggunaan struktur kendali PHP
Latihan 1 - Pengulangan
*/

// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for
for ($i = 0; $i < 5; $i++) { 
    echo "Halo Dunia! (For) <br>";
}

echo "<br>";

// while
$j = 0;
while ($j < 5) {
    echo "Halo Dunia! (While) <br>";
    $j++;
}

echo "<br>";

// do.. while
$k = 10;
do {
    echo "Halo Dunia! (Do While) <br>";
    $k++;
} while ($k < 5);

echo "<br>";

?>

<!-- Aplikasi pengulangan pada tabel -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <?php
            for ($l = 1; $l <= 3; $l++) { 
                echo "<tr>";
                for ($m = 1; $m <= 5; $m++) { 
                    echo "<td>$l,$m</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>

<br>

<!-- Aplikasi pengulangan pada tabel dengan templating -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <?php for ($n = 1; $n <= 3; $n++) : ?>
            <tr>
                <?php for ($o = 1; $o <= 5; $o++) : ?>
                    <td><?= "$n,$o" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>