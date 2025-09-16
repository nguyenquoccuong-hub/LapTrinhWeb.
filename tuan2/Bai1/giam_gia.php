<?php 
$ten_san_pham = $_POST['tensampham'];
$gia_niem_yet = $_POST['gianiemyet'];
$phan_tram_giam_gia = $_POST['phantramgiamgia'];

// tính toán giảm giá
$giam_gia = $gia_niem_yet * $phan_tram_giam_gia * 0.01;
$gia_sau_giam_gia = $gia_niem_yet - $giam_gia;

$gia_niem_yet_formatted = "$".number_format($gia_niem_yet,2);
$phan_tram_giam_gia_formatted = $phan_tram_giam_gia."%";
$giam_gia_formatted = "$".number_format($giam_gia,2);
$gia_sau_giam_gia_formatted = "$".number_format($gia_sau_giam_gia,2);

$ten_san_pham_escape = htmlspecialchars($ten_san_pham);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="giam_gia.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Ten san pham :</label>
        <span><?php echo $ten_san_pham_escape; ?></span><br>

        <label>Gia niem yet:</label>
        <span><?php echo $gia_niem_yet_formatted; ?></span><br>

        <label>Giam gia:</label>
        <span><?php echo $phan_tram_giam_gia_formatted; ?></span><br>

        <label>So tien giam gia :</label>
        <span><?php echo $giam_gia_formatted; ?></span><br>

        <label>Gia sau giam gia :</label>
        <span><?php echo $gia_sau_giam_gia_formatted; ?></span><br>
    </main>
</body>
</html>