<?php
$host = "localhost:3306";
$user = "root";
$pass = "";
$db   = "tintuc"; // đổi tên DB của anh

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
?>
