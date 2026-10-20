<?php
// Perulangan While
$i = 1; // Inisialisasi counter
while ($i < 100) { // Cek kondisi
    echo $i; // Eksekusi kode
    $i = $i + 1;
}

/*
// Perulangan For
for ($i = 1; $i < 100; $i++) {
    echo $i . "<br>";
}
*/

// Array Warna
$colors = array("red", "green", "blue", "yellow");

// Perulangan Foreach
foreach ($colors as $value) {
    echo "$value <br>";
}

// Perulangan For dengan Array
for ($i = 0; $i <= 3; $i++) {
    echo $colors[$i] . "<br>";
}
?>