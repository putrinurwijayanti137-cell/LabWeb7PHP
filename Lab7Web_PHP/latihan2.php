<?php
$nama = "Putri";
$tugas = 90;
$uts = 85;
$uas = 88;

$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 2 - Nilai</title></head>
<body>
    <h1>Perhitungan Nilai Akhir</h1>
    <p>Nama: <?= htmlspecialchars($nama) ?></p>
    <p>Nilai Tugas: <?= $tugas ?></p>
    <p>Nilai UTS: <?= $uts ?></p>
    <p>Nilai UAS: <?= $uas ?></p>
    <p>Nilai Akhir: <?= number_format($nilaiAkhir, 2) ?></p>
    <p>Predikat: <?= $predikat ?></p>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
