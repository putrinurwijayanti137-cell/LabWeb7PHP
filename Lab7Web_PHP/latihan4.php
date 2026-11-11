<?php
function hitungDiskon($harga, $persen) {
    return $harga - ($harga * $persen / 100);
}

function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

$hargaAwal = 150000;
$persenDiskon = 20;
$hargaSetelahDiskon = hitungDiskon($hargaAwal, $persenDiskon);
$luas = hitungLuasPersegiPanjang(10, 5);
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 4 - Function</title></head>
<body>
    <h1>Penggunaan Function PHP</h1>
    <h2>Fungsi Hitung Diskon</h2>
    <p>Harga awal: Rp<?= number_format($hargaAwal, 0, ',', '.') ?></p>
    <p>Diskon: <?= $persenDiskon ?>%</p>
    <p>Harga setelah diskon: Rp<?= number_format($hargaSetelahDiskon, 0, ',', '.') ?></p>
    <h2>Fungsi Luas Persegi Panjang</h2>
    <p>Panjang: 10, Lebar: 5</p>
    <p>Luas: <?= $luas ?></p>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
