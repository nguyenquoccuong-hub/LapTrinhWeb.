<?php
require "../connect.php";
$sql = "SELECT * FROM theloai ORDER BY idTL DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Quản lý Thể Loại</title>
<style>
table{border-collapse:collapse;margin:20px auto;}
td,th{border:1px solid #000;padding:5px 10px;text-align:center;}
a{text-decoration:none;color:blue;}
</style>
</head>
<body>
<table>
<tr>
    <th>Tên Thể Loại</th>
    <th>Thứ Tự</th>
    <th>Ẩn Hiện</th>
    <th>Biểu tượng</th>
    <th><a href="theloai_them.php">Thêm</a></th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?= htmlspecialchars($row['TenTL']) ?></td>
    <td><?= $row['ThuTu'] ?></td>
    <td><?= $row['AnHien'] ? 'Hiện' : 'Ẩn' ?></td>
    <td>
        <?php if($row['icon']){ ?>
            <img src="../image/<?= htmlspecialchars($row['icon']) ?>" width="80">
        <?php } ?>
    </td>
    <td>
        <a href="theloai_sua.php?idTL=<?= $row['idTL'] ?>">Sửa</a> |
        <a href="theloai_xoa.php?idTL=<?= $row['idTL'] ?>"
           onclick="return confirm('Xóa thể loại này?')">Xóa</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>
