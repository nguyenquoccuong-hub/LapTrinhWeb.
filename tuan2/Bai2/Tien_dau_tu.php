<?php
    // kiểm tra số liệu điền vào
    $tien_dau_tu = filter_input(INPUT_POST, 'investment',
        FILTER_VALIDATE_FLOAT);
    $lai_suat = filter_input(INPUT_POST, 'interest_rate',
        FILTER_VALIDATE_FLOAT);
    $so_nam = filter_input(INPUT_POST, 'years',
        FILTER_VALIDATE_INT);
    
    // kiểm tra lỗi
    if ($tien_dau_tu === FALSE ) {
        $thong_bao_loi = 'vui lòng nhập số tiền hợp lệ.'; 
    } else if ( $tien_dau_tu <= 0 ) {
        $thong_bao_loi = 'Số tiền đầu tư phải lớn hơn 0.'; 
    // validate interest rate
    } else if ( $lai_suat === FALSE )  {
        $thong_bao_loi = 'Vui lòng nhập lãi suất hợp lệ.'; 
    } else if ( $lai_suat <= 0 ) {
        $thong_bao_loi = 'Lãi suất phải lớn hơn 0.'; 
    // validate years
    } else if ( $so_nam === FALSE ) {
        $thong_bao_loi = 'Vui lòng nhập số năm hợp lệ.';
    } else if ( $so_nam <= 0 ) {
        $thong_bao_loi = 'Số năm phải lớn hơn 0.';
    } else if ( $so_nam > 30 ) {
        $thong_bao_loi = 'Số năm phải nhỏ hơn 31.';
    } else {
        $thong_bao_loi = ''; 
    }

    // nếu không có lỗi, tính toán kết quả
    if ($thong_bao_loi != '') {
        include('index.php');
        exit(); 
    }

    // tính tổng tiền sau khi đầu tư
    $tong_tien = $tien_dau_tu;
    for ($i = 1; $i <= $so_nam; $i++) {
        $tong_tien += $tong_tien * $lai_suat * .01;
    }

    // apply currency and percent formatting
    $tien_dau_tu_f = '$'.number_format($tien_dau_tu, 2);
    $lai_suat_f = $lai_suat.'%';
    $tong_tien_f = '$'.number_format($tong_tien, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tính tiền đầu tư</title>
    <link rel="stylesheet" type="text/css" href="Tien_dau_tu.css">
</head>
<body>
    <main>
        <h1>Tính tiền đầu tư</h1>

        <label>Số tiền đầu tư:</label>
        <span><?php echo $tien_dau_tu_f; ?></span><br>

        <label>Lãi suất hàng năm:</label>
        <span><?php echo $lai_suat_f; ?></span><br>

        <label>Số năm:</label>
        <span><?php echo $so_nam; ?></span><br>

        <label>Tổng tiền sau khi đầu tư:</label>
        <span><?php echo $tong_tien_f; ?></span><br>
    </main>
</body>
</html>
