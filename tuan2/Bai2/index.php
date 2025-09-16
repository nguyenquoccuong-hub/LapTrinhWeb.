<?php 
    //set default value of variables for initial page load
    if (!isset($tien_dau_tu)) { $tien_dau_tu = ''; } 
    if (!isset($lai_suat)) { $lai_suat = ''; } 
    if (!isset($so_nam)) { $so_nam = ''; } 
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
    <?php if (!empty($thong_bao_loi)) { ?>
        <p class="error"><?php echo htmlspecialchars($thong_bao_loi); ?></p>
    <?php } ?>
    <form action="Tien_dau_tu.php" method="post">

        <div id="data">
            <label>Số tiền đầu tư:</label>
            <input type="text" name="investment"
                   value="<?php echo htmlspecialchars($tien_dau_tu); ?>">
            <br>

            <label>Lãi suất hàng năm:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo htmlspecialchars($lai_suat); ?>">
            <br>

            <label>Số năm:</label>
            <input type="text" name="years"
                   value="<?php echo htmlspecialchars($so_nam); ?>">
            <br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Tính toán"><br>
        </div>

    </form>
    </main>
</body>
</html>