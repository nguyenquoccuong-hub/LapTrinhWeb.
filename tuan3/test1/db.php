<?php
$host = "localhost:3306"; // máy chủ MySQL
$user = "root";   // tài khoản MySQL
$pass = "";       // mật khẩu MySQL (nếu có thì điền vào)
$db   = "music_shop";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
