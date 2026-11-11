<?php
$nim = "";
$pesan = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");
    if ($nim === "") {
        $pesan = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka.";
    } else {
        $pesan = "Jumlah digit NIM: " . strlen($nim) . " digit.";
    }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Validasi NIM</title></head><body>
<h1>Memeriksa Digit NIM</h1>
<form method="POST">
    <label>NIM: <input type="text" name="nim" value="<?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?>"></label>
    <button type="submit">Periksa</button>
</form>
<?php if ($pesan !== ""): ?><p><?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
<p><a href="index.php">Kembali</a></p>
</body></html>
