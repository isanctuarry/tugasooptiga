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
}

// Class Perpustakaan
class Perpustakaan {
    private $daftarBuku = [];

    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
        echo "Buku '{$buku->judul}' berhasil ditambahkan!\n";
    }

    public function tampilkanBuku() {
        if (empty($this->daftarBuku)) {
            echo "Belum ada buku di perpustakaan.\n";
        } else {
            echo "\nDaftar Buku di Perpustakaan:\n";
            foreach ($this->daftarBuku as $index => $buku) {
                echo ($index + 1) . ". " . $buku->judul . " | " . $buku->penulis . " | " . $buku->tahun . "\n";
            }
        }
    }
}

// Inisialisasi perpustakaan dengan 3 buku
$perpus = new Perpustakaan();
$perpus->tambahBuku(new Buku("The Great Rico", "Isancuarry", 2005));
$perpus->tambahBuku(new Buku("Planet Earth", "Kurosaki Ichigo", 1980));
$perpus->tambahBuku(new Buku("Cruelty of Time", "Soulatlast", 1997));

// Menu interaktif (gada diminta tapi biar lebih OP aja)
while (true) {
    echo "\n=== Menu Perpustakaan ===\n";
    echo "1. Lihat daftar buku\n";
    echo "2. Tambah buku baru\n";
    echo "3. Keluar\n";
    echo "Pilih menu (1/2/3): ";
    $pilih = trim(fgets(STDIN));

    switch ($pilih) {
        case '1':
            $perpus->tampilkanBuku();
            break;
        case '2':
            echo "Masukkan judul: ";
            $judul = trim(fgets(STDIN));

            echo "Masukkan penulis: ";
            $penulis = trim(fgets(STDIN));

            echo "Masukkan tahun terbit: ";
            $tahun = trim(fgets(STDIN));

            $perpus->tambahBuku(new Buku($judul, $penulis, $tahun));
            break;
        case '3':
            echo "Terima kasih! Program selesai.\n";
            exit;
        default:
            echo "Pilihan tidak valid. Coba lagi.\n";
    }
}
?>
