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
            echo "Daftar Buku di Perpustakaan:<br>";
            foreach ($this->daftarBuku as $index => $buku) {
                $nomor = $index + 1;
                echo "$nomor. $buku<br>";
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

echo "<br>";
$perpustakaan->tampilkanBuku();
?>
