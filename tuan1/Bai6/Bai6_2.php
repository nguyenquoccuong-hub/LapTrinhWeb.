<!DOCTYPE html>
<html>
<head>
    <title>TÍNH TOÁN</title>
    <meta charset="utf-8">
    <style>
    *{
        font-family: Tahoma;
    }
    table{
        width: 400px;
        margin: 100px auto;
        border-collapse: collapse;
    }
    table th{
        background: #66CCFF;
        padding: 10px;
        font-size: 18px;
    }
    table td{
        padding: 6px;
    }
    </style>
</head>
<body>

<?php 
// Xử lý PHP ở trên
$mang_so = [];
$so_phan_tu = "";

if(isset($_POST['so_phan_tu']) && is_numeric($_POST['so_phan_tu'])){
    $so_phan_tu = $_POST['so_phan_tu'];
    for($i=0; $i<$so_phan_tu; $i++){
        $mang_so[$i] = rand(0, 100);
    }
}

function xuat_mang($mang_so){
    if(!empty($mang_so)){
        return implode(" ", $mang_so);
    }
    return "";
}
function tim_max($mang_so){
    return !empty($mang_so) ? max($mang_so) : "";
}
function tim_min($mang_so){
    return !empty($mang_so) ? min($mang_so) : "";
}
function tinh_tong($mang_so){
    return !empty($mang_so) ? array_sum($mang_so) : "";
}
?>

<form action="" method="POST">
    <table border="1">
        <thead>
            <tr>
                <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nhập số phần tử:</td>
                <td><input type="text" name="so_phan_tu" value="<?php echo $so_phan_tu; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Phát sinh và tính toán"></td>
            </tr>
            <tr>
                <td>Mảng: </td>
                <td><input type="text" disabled value="<?php echo xuat_mang($mang_so); ?>"></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng: </td>
                <td><input type="text" disabled value="<?php echo tim_max($mang_so); ?>"></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng: </td>
                <td><input type="text" disabled value="<?php echo tim_min($mang_so); ?>"></td>
            </tr>
            <tr>
                <td>Tổng mảng: </td>
                <td><input type="text" disabled value="<?php echo tinh_tong($mang_so); ?>"></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>
