<?php
require "../connect.php";
$id = (int)$_GET['idTL'];
mysqli_query($conn,"DELETE FROM theloai WHERE idTL=$id");
header("Location: theloai.php");
