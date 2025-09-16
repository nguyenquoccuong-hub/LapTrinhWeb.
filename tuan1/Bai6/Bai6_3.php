<!DOCTYPE html>
<html>
<head>
    <title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
    <meta charset="utf-8">
    <style>
    *{
        font-family: Tahoma;
    }
    table{
        width: 400px;
        margin: 100px auto;
    }
    table th{
        background: #66CCFF;
        padding: 10px;
        font-size: 18px;
    }
    input{
        width: 100%;
    }
    </style>
</head>
<body>

<?php
$chuoi = "";
$mang_duy_nhat = [];

if (isset($_POST['nhap_mang'])) {
    // Lấy chuỗi nhập từ form
    $mang_nhap = trim($_POST['nhap_mang']);
    if (!empty($mang_nhap)) {
        // Tách chuỗi thành mảng số (cắt theo dấu phẩy)
        $arr = array_map('trim', explode(',', $mang_nhap));

        // Đếm số lần xuất hiện
        $dem = array_count_values($arr);

        // Chuyển mảng đếm thành chuỗi
        $chuoi = "";
        foreach ($dem as $so => $solan) {
            $chuoi .= $so . " xuất hiện " . $solan . " lần; ";
        }

        // Tạo mảng duy nhất (loại bỏ trùng)
        $mang_duy_nhat = array_unique($arr);
    }
}

// Hàm in mảng duy nhất thành chuỗi
function mang_duy_nhat($mang) {
    if (!empty($mang)) {
        return implode(", ", $mang);
    }
    return "";
}
?>

<form action="" method="POST">
    <table border="0">
        <thead>
            <tr>
                <th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mảng:</td>
                <td><input type="text" name="nhap_mang" value="<?php echo isset($_POST['nhap_mang']) ? $_POST['nhap_mang'] : ''; ?>"></td>
            </tr>
            <tr>
                <td>Số lần xuất hiện:</td>
                <td><input type="text" readonly value="<?php echo $chuoi; ?>"></td>
            </tr>
            <tr>
                <td>Mảng duy nhất:</td>
                <td><input type="text" readonly value="<?php echo mang_duy_nhat($mang_duy_nhat); ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Thực hiện"></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>
