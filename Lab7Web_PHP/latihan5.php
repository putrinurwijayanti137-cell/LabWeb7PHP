<?php
$kata = isset($_GET["kata"]) ? trim($_GET["kata"]) : "";
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 5 - GET</title></head>
<body>
    <h1>Form Pencarian dengan GET</h1>
    <form method="GET" action="">
        <label for="kata">Masukkan kata:</label>
        <input type="text" id="kata" name="kata" value="<?= htmlspecialchars($kata, ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit">Kirim</button>
    </form>
    <?php if ($kata !== ""): ?>
        <p>Kata yang dikirim: <strong><?= htmlspecialchars($kata, ENT_QUOTES, 'UTF-8') ?></strong></p>
    <?php endif; ?>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
