<?php
require "db.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
header("Location: index.php?msg=" . urlencode("Đã xoá sản phẩm"));
