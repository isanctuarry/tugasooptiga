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

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Claude Clawmark";
$mahasiswa->nim = "012223";
$mahasiswa->prodi = "Teknik Informatika";

$mahasiswa->setNilaiIPK(3.9);
$mahasiswa->setPassword("yummyno");

echo $mahasiswa->nama;
echo "\n";
echo $mahasiswa->nim;
echo "\n";
echo $mahasiswa->prodi;
echo "\n";
echo $mahasiswa->showNilaiIPK();
echo "\n";
echo $mahasiswa->showPassword(); 
?>
