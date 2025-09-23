<?php
require "../connect.php";

$edit  = isset($_GET['edit']) ? 1 : 0;
$idTL  = isset($_GET['idTL']) ? (int)$_GET['idTL'] : 0;
$TenTL = mysqli_real_escape_string($conn,$_POST['TenTL']);
$ThuTu = (int)$_POST['ThuTu'];
$AnHien= (int)$_POST['AnHien'];

$iconName = "";
if(isset($_FILES['icon']) && $_FILES['icon']['error']==0){
    $iconName = basename($_FILES['icon']['name']);
    move_uploaded_file($_FILES['icon']['tmp_name'], "../image/".$iconName);
}

if($edit){
    if($iconName==""){
        $sql="UPDATE theloai SET TenTL='$TenTL', ThuTu=$ThuTu, AnHien=$AnHien WHERE idTL=$idTL";
    }else{
        $sql="UPDATE theloai SET TenTL='$TenTL', ThuTu=$ThuTu, AnHien=$AnHien, icon='$iconName' WHERE idTL=$idTL";
    }
}else{
    $sql="INSERT INTO theloai(TenTL,ThuTu,AnHien,icon)
          VALUES ('$TenTL',$ThuTu,$AnHien,'$iconName')";
}
mysqli_query($conn,$sql) or die(mysqli_error($conn));
header("Location: theloai.php");
