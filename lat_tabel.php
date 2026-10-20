<?php
// Menyimpan data ke dalam array multidimensi
$data_penduduk = [
    ["kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497],
    ["kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886],
    ["kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129],
    ["kecamatan" => "Godean",  "luas" => 26.84, "jumlah_penduduk" => 72028],
    ["kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Penduduk (PHP)</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 4px 8px;
        }
        th {
            font-weight: bold;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>kecamatan</th>
                <th>luas</th>
                <th>jumlah_penduduk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_penduduk as $row): ?>
            <tr>
                <td><?= $row['kecamatan']; ?></td>
                <td><?= $row['luas']; ?></td>
                <td class="text-right"><?= $row['jumlah_penduduk']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>