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

// Login otomatis (simulasi)
$username = "admin";
$password = "12345"; // ubah jadi salah untuk tes

// Tampilkan hasil login
echo $dummyUser->login($username, $password);
?>
