<?php
require "db.php";

// Lấy danh sách sản phẩm
$result = $conn->query("SELECT * FROM products ORDER BY product_id DESC");
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Danh sách nhạc cụ</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h1>Danh sách nhạc cụ</h1>

  <section id="add-form">
    <h2>Thêm nhạc cụ mới</h2>
    <form action="add.php" method="post">
      <label>Category ID: <input type="number" name="category_id" required></label>
      <label>Tên sản phẩm: <input type="text" name="product_name" required></label>
      <label>Giá (VND): <input type="number" name="price" required></label>
      <button type="submit">Thêm</button>
    </form>
    <?php if (isset($_GET['msg'])) echo "<p class='msg'>".htmlspecialchars($_GET['msg'])."</p>"; ?>
  </section>

  <section id="list">
    <h2>Danh sách</h2>
    <table>
      <thead>
        <tr>
          <th>product_id</th>
          <th>category_id</th>
          <th>product_name</th>
          <th>price</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['product_id'] ?></td>
            <td><?= $row['category_id'] ?></td>
            <td><?= htmlspecialchars($row['product_name']) ?></td>
            <td><?= number_format($row['price'], 0, ',', '.') ?> ₫</td>
            <td>
              <a href="delete.php?id=<?= $row['product_id'] ?>" onclick="return confirm('Xác nhận xoá?')">Xoá</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </section>
</div>
</body>
</html>
