<?php
// Daftar file latihan  
$latihan = [
    "ppbo3_produk.php" => "Latihan 1: Produk",
    "ppb03_login" => "Latihan 2: Login",
    "ppbo3_perpustakaan.php" => "Latihan 3: Perpustakaan",
    "ppbo3_persegipanjang.php"=> "Latihan 6: Hitung Luas Persegi Panjang",
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Latihan OOP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f9f9f9; }
        h1 { color: #333; }
        ul { list-style: none; padding: 0; }
        li { margin: 10px 0; }
        a { text-decoration: none; color: white; background: #007BFF; padding: 10px 15px; border-radius: 5px; }
        a:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>Daftar Latihan OOP</h1>
    <ul>
        <?php foreach ($latihan as $file => $judul): ?>
            <li><a href="<?= $file ?>"><?= $judul ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
