<?php
// Daftar file latihan  
$latihan = [
    "ppbo3_produk.php" => "Latihan 1: Produk",
    "ppbo3_login.php" => "Latihan 2: Login",
    "ppbo3_perpustakaan.php" => "Latihan 3: Perpustakaan",
    "ppbo3_persegipanjang.php"=> "Latihan 6: Hitung Luas Persegi Panjang",
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Latihan OOP</title>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: Poppins; 
            margin: 0; 
            background: #f9f9f9; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 { 
            color: #fdb2b2ff; 
            font-family: Poppins;
            text-align: center;
        }

        ul {
            list-style: none;
             padding: 0; 
             margin: 0;
            }

        li { 
            margin: 15px 0;
            }
            
        a { 
            text-decoration: none; 
            color: white; 
            background: #fcbae0ff; 
            padding: 10px 15px; 
            border-radius: 5px; 
            display: inline-block;  
            align-items: center;
        }
        a:hover { background: #f174e8ff; }
        
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
