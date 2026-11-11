<?php
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}
$contoh = 125000;
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Format Rupiah</title></head><body>
<h1>Function Format Rupiah</h1>
<p>Nilai angka: <?= $contoh ?></p>
<p>Hasil format: <?= formatRupiah($contoh) ?></p>
<p><a href="index.php">Kembali</a></p>
</body></html>
