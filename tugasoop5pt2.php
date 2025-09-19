<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;
    protected $ipk;     
    private $password;  

    public function setNilaiIPK($ipk) {
        $this->ipk = $ipk;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function showNilaiIPK() {
        return $this->getNilaiIPK(); // memanggil method protected
    }

    public function showPassword() {
        return $this->getPassword(); // memanggil method private
    }

    protected function getNilaiIPK() {
        return "Nilai IPK: $this->ipk";
    }

    private function getPassword() {
        return "Password: $this->password";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Claude Clawmark";
$mhs1->nim = "012223";
$mhs1->prodi = "Teknik Informatika";
$mhs1->setNilaiIPK(3.9);
$mhs1->setPassword("yummyno");

$mhs2 = new Mahasiswa();
$mhs2->nama = "Yu Q Wilson";
$mhs2->nim = "120923";
$mhs2->prodi = "Desain Komunikasi Visual";
$mhs2->setNilaiIPK(3.6);
$mhs2->setPassword("notilting");


echo $mhs1 "Nama: " . $mahasiswa->nama .
. "NIM: " . $mhs1->nim . 
. "Prodi: " . $mhs1->prodi . 
. $mhs1->showNilaiIPK() . 
. $mhs1->showPassword() . 
. "<br>";

echo $mhs2 "Nama: " . $mahasiswa->nama .
. "NIM: " . $mhs2->nim . 
. "Prodi: " . $mhs2->prodi . 
. $mhs2->showNilaiIPK() . 
. $mhs2->showPassword() . 
. "<br>";

?>
