<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search sinh viên</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="id" placeholder="Tìm kiếm">  <br>
        <input type="submit" value="Search">
    </form>
    <?php 
    require './connect.php';
    $id = $_GET['id'];
    mysqli_set_charset($conn, 'UTF8');
    $sql = " SELECT * FROM sinhvien WHERE id='$id'";
    $result = $conn->query($sql);
    if($result->num_rows >0){
    ?>
       <table border= '1' width= '50%' align= 'center'>
             <caption>Thông tin tìm kiếm</caption>
              <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Lớp</th>
                <th>Địa chỉ</th>
                <th>Năm sinh</th>
                <th>Giới tính</th>
               </tr>
          <?php  while($row = $result->fetch_assoc()){ 
            ?>
               <tr>
                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['ten']; ?></td>
                <td> <?php echo $row['lop']; ?></td>
                <td> <?php echo $row['gioitinh']; ?></td>
                <td> <?php echo $row['diachi']; ?></td>
                <td> <?php echo $row['namsinh']; ?></td>
              </tr>
              <?php } ?> 
         </table>
         <h1><a href="./index.php">Home</a></h1>
    <?php
    }else{
        echo  "<h2>Không tìm thấy kết quả</h2>";
    }
    $conn->close();
    ?>
</body>
</html>