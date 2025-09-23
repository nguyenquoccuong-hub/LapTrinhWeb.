<?php
require "../connect.php";
$id = (int)$_GET['idTL'];
$qr = mysqli_query($conn,"SELECT * FROM theloai WHERE idTL=$id");
$row = mysqli_fetch_assoc($qr);
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Sửa Thể Loại</title></head>
<body>
<form action="theloai_them_xl.php?edit=1&idTL=<?= $id ?>" method="post" enctype="multipart/form-data">
    Tên Thể Loại:
    <input type="text" name="TenTL" value="<?= htmlspecialchars($row['TenTL']) ?>"><br><br>
    Thứ Tự:
    <input type="number" name="ThuTu" value="<?= $row['ThuTu'] ?>"><br><br>
    Ẩn Hiện:
    <select name="AnHien">
        <option value="1" <?= $row['AnHien']?'selected':'' ?>>Hiện</option>
        <option value="0" <?= !$row['AnHien']?'selected':'' ?>>Ẩn</option>
    </select><br><br>
    Icon hiện tại:<br>
    <?php if($row['icon']){ ?>
        <img src="../image/<?= htmlspecialchars($row['icon']) ?>" width="80"><br>
    <?php } ?>
    Chọn tệp mới: <input type="file" name="icon"><br><br>
    <input type="submit" value="Sửa">
    <a href="theloai.php">Hủy</a>
</form>
</body>
</html>
