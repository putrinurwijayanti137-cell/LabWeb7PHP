<?php
$namaBarang = "";
$harga = "";
$jumlah = "";
$errors = [];
$submitted = ($_SERVER["REQUEST_METHOD"] === "POST");

if ($submitted) {
    $namaBarang = trim($_POST["nama_barang"] ?? "");
    $harga = trim($_POST["harga"] ?? "");
    $jumlah = trim($_POST["jumlah"] ?? "");

    if ($namaBarang === "") {
        $errors[] = "Nama barang wajib diisi.";
    }
    if ($harga === "" || !is_numeric($harga) || (float)$harga < 0) {
        $errors[] = "Harga harus berupa angka dan tidak boleh kurang dari 0.";
    }
    if ($jumlah === "" || filter_var($jumlah, FILTER_VALIDATE_INT) === false || (int)$jumlah < 1) {
        $errors[] = "Jumlah harus berupa bilangan bulat minimal 1.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 7 - Transaksi</title></head>
<body>
    <h1>Form Perhitungan Transaksi</h1>
    <form method="POST" action="">
        <p><label>Nama Barang: <input type="text" name="nama_barang" value="<?= htmlspecialchars($namaBarang, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Harga: <input type="number" step="any" name="harga" value="<?= htmlspecialchars($harga, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Jumlah: <input type="number" step="1" name="jumlah" value="<?= htmlspecialchars($jumlah, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <button type="submit">Hitung</button>
        <button type="reset">Reset Form</button>
    </form>
    <?php if ($submitted && $errors): ?>
        <h2>Validasi Gagal</h2>
        <ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error) ?></li><?php endforeach; ?></ul>
    <?php elseif ($submitted): ?>
        <?php $subtotal = (float)$harga * (int)$jumlah; ?>
        <h2>Ringkasan Transaksi</h2>
        <p>Nama barang: <?= htmlspecialchars($namaBarang, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Harga: Rp<?= number_format((float)$harga, 0, ',', '.') ?></p>
        <p>Jumlah: <?= (int)$jumlah ?></p>
        <p>Subtotal: Rp<?= number_format($subtotal, 0, ',', '.') ?></p>
    <?php endif; ?>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
