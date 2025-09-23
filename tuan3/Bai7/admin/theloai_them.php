<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Thêm Thể Loại</title></head>
<body>
<form action="theloai_them_xl.php" method="post" enctype="multipart/form-data">
    Tên Thể Loại: <input type="text" name="TenTL"><br><br>
    Thứ Tự: <input type="number" name="ThuTu"><br><br>
    Ẩn Hiện:
    <select name="AnHien">
        <option value="1">Hiện</option>
        <option value="0">Ẩn</option>
    </select><br><br>
    Icon: <input type="file" name="icon"><br><br>
    <input type="submit" value="Thêm">
    <a href="theloai.php">Hủy</a>
</form>
</body>
</html>
