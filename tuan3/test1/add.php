<?php
require "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = intval($_POST['category_id']);
    $product_name = trim($_POST['product_name']);
    $price = floatval($_POST['price']);

    if ($category_id && $product_name && $price) {
        $stmt = $conn->prepare("INSERT INTO products (category_id, product_name, price) VALUES (?, ?, ?)");
        $stmt->bind_param("isd", $category_id, $product_name, $price);
        if ($stmt->execute()) {
            header("Location: index.php?msg=Thêm thành công");
            exit;
        } else {
            $msg = "Lỗi khi thêm: " . $stmt->error;
        }
    } else {
        $msg = "Dữ liệu không hợp lệ";
    }
    header("Location: index.php?msg=" . urlencode($msg));
}
