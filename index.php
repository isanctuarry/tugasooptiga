<html>
  <head>
    <title>Tugas OOP TIGA</title>
  </head>
  <body>
    <h1>HI, selamat datang di tugas OOP 3</h1>
    <?php
class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login($inputUsername, $inputPassword) {
        if ($inputUsername === $this->username && $inputPassword === $this->password) {
            return "Login berhasil! Selamat datang, $inputUsername.";
        } else {
            return "Login gagal! Username atau password salah.";
        }
    }
}

// Buat user dummy
$dummyUser = new User("admin", "12345");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pesan = $dummyUser->login($username, $password);
}
?>
    <a href="ppbo3_login.php">LOGIN TERLEBIH DAHULU</a>
    <a href="ppbo3_persegipanjang.php">Latihan 1</a>
    <a href="ppbo3_produk.php">Latihan 2</a>
    <a href="ppbo3_perpustakaan.php">Latihan 3</a>
  </body>
</html>
