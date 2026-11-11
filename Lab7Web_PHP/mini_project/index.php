<?php
$nama = $nim = $prodi = $semester = $email = "";
$errors = [];
$submitted = ($_SERVER["REQUEST_METHOD"] === "POST");

if ($submitted) {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semester = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $errors[] = "Nama wajib diisi.";
    if ($nim === "") {
        $errors[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $errors[] = "NIM harus terdiri dari angka.";
    }
    if ($prodi === "") $errors[] = "Program studi wajib diisi.";
    if (filter_var($semester, FILTER_VALIDATE_INT) === false || (int)$semester < 1 || (int)$semester > 14) {
        $errors[] = "Semester harus berupa bilangan bulat dari 1 sampai 14.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project - Pendaftaran Mahasiswa</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form method="POST" action="">
        <p><label>Nama Lengkap: <input type="text" name="nama" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>NIM: <input type="text" name="nim" value="<?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Program Studi: <input type="text" name="prodi" value="<?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Semester (1-14): <input type="number" name="semester" min="1" max="14" value="<?= htmlspecialchars($semester, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <p><label>Email: <input type="text" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>"></label></p>
        <button type="submit">Daftar</button>
        <button type="reset">Reset</button>
    </form>

    <?php if ($submitted && $errors): ?>
        <h2>Data Belum Bisa Diproses</h2>
        <ul><?php foreach ($errors as $error): ?><li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?></ul>
    <?php elseif ($submitted): ?>
        <h2>Pendaftaran Berhasil</h2>
        <p>Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
        <p>NIM: <?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Program Studi: <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Semester: <?= (int)$semester ?></p>
        <p>Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>
    <p><a href="../index.php">Kembali ke halaman utama</a></p>
</body>
</html>
