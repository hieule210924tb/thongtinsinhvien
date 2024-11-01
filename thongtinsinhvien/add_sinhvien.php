<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
</head>
<body>
    <form action="" method="post">
        id <input type="number" name="id"> <br>
        Tên <input type="text" name="ten"> <br>
        Lớp <input type="text" name="lop"> <br>
        Giới tính 
            <input type="radio" name="gioitinh" value="Nam">Nam</input>
            <input type="radio" name="gioitinh" value="Nữ">Nữ</input> <br>
        Địa chỉ <input type="text" name="diachi"> <br>
        Năm sinh <input type="date" name="namsinh"> <br>
        
        <input type="submit" value="Thêm">
    </form>
    <?php 
    require './connect.php';

    $id= $_POST['id'];
    $ten= $_POST['ten'];
    $lop= $_POST['lop'];
    $gioitinh= $_POST['gioitinh'];
    $diachi= $_POST['diachi'];
    $namsinh = $_POST['namsinh'];

    $sql = "INSERT INTO sinhvien(id,ten,lop,gioitinh,diachi,namsinh)
            VALUES('$id','$ten','$lop','$gioitinh','$diachi','$namsinh')";
    if($conn->query($sql)===true){
    echo 'Bạn đã thêm thành công';
    }else{
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>