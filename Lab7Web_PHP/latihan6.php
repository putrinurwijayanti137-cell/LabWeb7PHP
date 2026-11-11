<?php
$nama = "";
$prodi = "";
$errors = [];
$submitted = ($_SERVER["REQUEST_METHOD"] === "POST");

if ($submitted) {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "") {
        $errors[] = "Nama wajib diisi.";
    }
    if ($prodi === "") {
        $errors[] = "Program studi wajib diisi.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 6 - POST</title></head>
<body>
    <h1>Form Data Mahasiswa dengan POST</h1>
    <form method="POST" action="">
        <p><label>Nama: <input type="text" name="nama" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Program Studi: <input type="text" name="prodi" value="<?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <button type="submit">Kirim</button>
    </form>

    <?php if ($submitted && $errors): ?>
        <h2>Terjadi Kesalahan</h2>
        <ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error) ?></li><?php endforeach; ?></ul>
    <?php elseif ($submitted): ?>
        <h2>Data Berhasil Dikirim</h2>
        <p>Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Program Studi: <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
