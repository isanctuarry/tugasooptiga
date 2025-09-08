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

// Cek login
echo $dummyUser->login($username, $password);
?>
