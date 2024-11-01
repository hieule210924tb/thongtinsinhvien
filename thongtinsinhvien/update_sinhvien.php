<?php
    require './connect.php';
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $lop = $_POST['lop'];
        $gioitinh = $_POST['gioitinh'];
        $diachi = $_POST['diachi'];
        $namsinh = $_POST['namsinh'];
        

        $sql = "UPDATE sinhvien SET ten='$ten', lop='$lop', gioitinh='$gioitinh', diachi='$diachi', namsinh='$namsinh' WHERE id='$id'";
        if($conn->query($sql)){
            echo "Cập nhật thành công";
        }else{
            echo "Lỗi" . $conn->errno;
        }
?>
<?php
    require './connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM sinhvien WHERE id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
        Tên <input type="text" value="<?php echo $row['ten']; ?>" name="ten"><br>
        Lớp <input type="text" value="<?php echo $row['lop']; ?>" name="lop"><br>
        Giới tính:
        <input type="radio" name="gioitinh" value="Nam" <?php echo ($row['gioitinh'] == 'Nam') ? 'checked' : ''; ?>> Nam
        <input type="radio" name="gioitinh" value="Nữ" <?php echo ($row['gioitinh'] == 'Nữ') ? 'checked' : ''; ?>> Nữ
        <br>
        Địa chỉ <input type="text" value="<?php echo $row['diachi']; ?>" name="diachi"><br>
        Năm sinh <input type="date" value="<?php echo $row['namsinh']; ?>" name="namsinh"><br>
        
        <input type="submit" value="Sửa">
    </form>
</body>
</html>
