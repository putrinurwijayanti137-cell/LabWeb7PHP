<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Putri", "Rani", "Fajar"];
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 3 - Array</title></head>
<body>
    <h1>Daftar Nama Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama): ?>
            <li><?= htmlspecialchars($nama) ?></li>
        <?php endforeach; ?>
    </ol>
    <p><a href="index.php">Kembali</a></p>
</body>
</html>
