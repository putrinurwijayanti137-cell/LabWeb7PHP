<?php
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Putri", "Rani"];
$cari = trim($_GET["nama"] ?? "");
$hasil = [];
if ($cari !== "") {
    foreach ($daftarNama as $nama) {
        if (stripos($nama, $cari) !== false) $hasil[] = $nama;
    }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Pencarian Nama</title></head><body>
<h1>Pencarian Nama dengan GET</h1>
<form method="GET">
    <input type="text" name="nama" placeholder="Masukkan nama" value="<?= htmlspecialchars($cari, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Cari</button>
</form>
<?php if ($cari !== ""): ?>
    <h2>Hasil Pencarian</h2>
    <?php if ($hasil): ?><ul><?php foreach ($hasil as $nama): ?><li><?= htmlspecialchars($nama) ?></li><?php endforeach; ?></ul>
    <?php else: ?><p>Nama tidak ditemukan.</p><?php endif; ?>
<?php endif; ?>
<p><a href="index.php">Kembali</a></p>
</body></html>
