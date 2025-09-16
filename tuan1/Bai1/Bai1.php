<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>In lời chào</title>
  </head>

<body>
  <?php 
    if (isset($_POST["ten"])) {
      $ten = $_POST["ten"];
      $xuat_ten = "Chào bạn " . $ten;
    }
  ?>
<form method="post" >     
</form>
  <table width="300" border="1">
    <tr>
      <td colspan="2" bgcolor="blue"><strong>In lời chào</strong></td>
    </tr>
    <tr>
      <td width="100">Họ tên bạn</td>
      <td width="150">
        <input type="text" name="ten" id="chao3" />
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label><?php echo $xuat_ten; ?></label>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle">
  <input type="submit" name="chao" id="chao" value="Xuất" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>
