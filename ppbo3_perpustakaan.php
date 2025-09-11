<?php
// Class Buku
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function __toString() {
        return "'$this->judul' oleh $this->penulis ($this->tahun)";
    }
}

class Perpustakaan {
    private $daftarBuku = [];


    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
    }

    public function tampilkanBuku() {
        if (empty($this->daftarBuku)) {
            echo "Tidak ada buku di perpustakaan.<br>";
        } else {
            foreach ($this->daftarBuku as $buku) {
                echo "<tr>";
                echo "<td>{$buku->judul}</td>";
                echo "<td>{$buku->penulis}</td>";
                echo "<td>{$buku->tahun}</td>";
                echo "</tr>";
            }
        }
    }
}

$perpustakaan = new Perpustakaan ();

$buku1 = new Buku("The Great Rico", "Isanctuarry", 2005);
$buku2 = new Buku("White Lies", "floome", 1999);
$buku3 = new Buku("Cruelity of Time", "Soulatlast", 1997);

$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

?>

<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffffff;
            margin: 0;
            padding: 0;
            color: #fc8d8dff;
        }

        h1 {
            font-family: Poppins;
            text-align: center;
            color: #fc8d8dff;
        }

        h3 {
            font-family: Poppins;
            text-align: center;
            color: #fc8d8dff;
            margin-bottom: 10px;
        }

         table {
            border-collapse: collapse;
            width: 60%;
            align-items: center;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f9f4f4ff;
        }

        
    </style>
    </head>
    <body>
        <div class="container">
        <h1>Selamat Datang di Meowbooks</h1><br>
        <h3>Tugas Mandiri Perpustakaan</h3>
        <table>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
            </tr>
        <?php
        $perpustakaan->tampilkanBuku();
        ?>
        <table>
    </body>
</html>
