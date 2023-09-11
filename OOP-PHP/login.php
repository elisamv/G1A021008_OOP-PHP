<?php
// Membuat class Login dengan menggunakan properti private
class Login {
    private $title;
    private $url;

    // Dan terdapat method yang di implementasikan di public function
    public function __construct($title, $url) {
        $this->title = $title;
        $this->url = $url;
    }

    public function generateLink() {
        return '<a href="' . $this->url . '"><b>' . $this->title . '</b><br>PENDAFTARAN CHROME HIMATIF</a>';
    }
}

// Membuat class LoginPage
class LoginPage {
    public function generateLoginPage() {
        // Menampilkan judul halaman menggunakan html
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Login Page</title>
        </head>
        <body>
            <div style="text-align: center;">
                <h3>SISTEM INFORMASI MANAJEMEN PENDAFTARAN CHROME HIMATIF</h3>
            </div>
            <div style="text-align: center; margin-top: 20px;">
                <form action="login.php" method="post">
                    <input type="text" placeholder="Username" name="username"><br><br>
                    <input type="password" placeholder="Password" name="password"><br><br>
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label><br><br>
                    <button type="submit">Sign In</button>
                </form>';
        
        }
}

// Membuat objek LoginPage dan memanggil metodenya
$loginPage = new LoginPage();
$loginPage->generateLoginPage();
?>
