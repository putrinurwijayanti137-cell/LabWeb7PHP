<?php
$nilai1 = $nilai2 = $nilai3 = "";
$rataRata = null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nilai1 = trim($_POST["nilai1"] ?? "");
    $nilai2 = trim($_POST["nilai2"] ?? "");
    $nilai3 = trim($_POST["nilai3"] ?? "");
    if (is_numeric($nilai1) && is_numeric($nilai2) && is_numeric($nilai3)) {
        $rataRata = ((float)$nilai1 + (float)$nilai2 + (float)$nilai3) / 3;
    }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Rata-rata</title></head><body>
<h1>Menghitung Rata-rata Tiga Nilai</h1>
<form method="POST">
    <p>Nilai 1: <input type="number" step="any" name="nilai1" value="<?= htmlspecialchars($nilai1) ?>"></p>
    <p>Nilai 2: <input type="number" step="any" name="nilai2" value="<?= htmlspecialchars($nilai2) ?>"></p>
    <p>Nilai 3: <input type="number" step="any" name="nilai3" value="<?= htmlspecialchars($nilai3) ?>"></p>
    <button type="submit">Hitung Rata-rata</button>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <?php if ($rataRata !== null): ?><p>Rata-rata: <?= number_format($rataRata, 2) ?></p>
    <?php else: ?><p>Semua nilai harus diisi dengan angka.</p><?php endif; ?>
<?php endif; ?>
<p><a href="index.php">Kembali</a></p>
</body></html>
