<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php   require 'connect.php'; ?>
    <h1>Thông tin sinh viên</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Lớp</th>
            <th>Địa chỉ</th>
            <th>Năm sinh</th>
            <th>Giới tính</th>
            <th>Chức năng</th>
        </tr>
        <?php
     
        //     mysqli_set_charset($conn, 'UTF8');
        //    $sql = "SELECT * FROM sinhvien";
        //    $result = $conn->query($sql);
        //    if($result->num_rows >0){
        //     for($i=0; $i < $result->num_rows; $i++){
        //         $row = $result->fetch_assoc();
        //         echo   "<tr>";
        //         if($row['id'] % 2 ==0){
        //            echo "<td class='odd'>". $row['id'] ."</td>" .
        //                 "<td class='odd'>". $row['ten']."</td>" .
        //                 "<td class='odd'>". $row['lop']."</td>" .
        //                 "<td class='odd'>". $row['diachi']. "</td>" .
        //                 "<td class='odd'>". $row['namsinh']."</td>" .
        //                 "<td class='odd'>". $row['gioitinh']."</td>" .
        //                 "<td>" 
        //                 .'<a class="delete" href="http://localhost/php/thongtinsinhvien/delete_sinhvien.php?id='. $row['id'] .'">Xóa</a>'. "|".
        //                 '<a class="update" href=".http://localhost/php/thongtinsinhvien/update_sinhvien.php?id='. $row['id'] .'">Sửa</a>'.
        //                 "</td>";
        //        "</tr>";
        //         }else{
        //           echo "<td class='even'>". $row['id'] ."</td>".
        //                 "<td class='even'>". $row['ten']."</td>" .
        //                 "<td class='even'>". $row['lop']."</td>" .
        //                 "<td class='even'>". $row['diachi']. "</td>" .
        //                 "<td class='even'>". $row['namsinh']."</td>" .
        //                 "<td class='even'>". $row['gioitinh']."</td>" .
        //                 "<td>" .'<a class="delete" href="http://localhost/php/thongtinsinhvien/delete_sinhvien.php?id='. $row['id'] .'">Xóa</a>'. "|" .
        //                         '<a class="update" href="http://localhost/php/thongtinsinhvien/update_sinhvien.php?id='. $row['id'] .'">Sửa</a>'.
        //                 "</td>";
        //       "</tr>";
        //         }
        //     }
        // } else{
        //     echo "No student in database";
        // }
             mysqli_set_charset($conn, 'UTF8');
             $sql = "SELECT * FROM sinhvien";
             $result = $conn->query($sql);
             if($result ->num_rows >0){
                 ?>
            <?php 
               while($row = $result->fetch_array()){
             ?>
          <?php   if($row['id'] % 2 ==0){
            ?>
                 <tr>
                     <td class="odd"><?php echo $row['id']; ?></td>
                     <td class="odd"><?php echo $row['ten']; ?></td>
                     <td class="odd"><?php echo $row['lop']; ?></td>
                     <td class="odd"><?php echo $row['gioitinh']; ?></td>
                     <td class="odd"><?php echo $row['diachi']; ?></td>
                     <td class="odd"><?php echo $row['namsinh']; ?></td>
                     <td class="odd">
                         <a class="delete" href="http://localhost/php/thongtinsinhvien/delete_sinhvien.php?id=<?php echo $row['id'] ?>">Xóa</a>
                         <a  class="update" href="http://localhost/php/thongtinsinhvien/update_sinhvien.php?id=<?php echo $row['id'] ?>">Sửa</a>
                     </td>
                 </tr>
           <?php  } else{
            ?>
                <tr>
                     <td class="even"><?php echo $row['id']; ?></td>
                     <td class="even"><?php echo $row['ten']; ?></td>
                     <td class="even"><?php echo $row['lop']; ?></td>
                     <td class="even"><?php echo $row['gioitinh']; ?></td>
                     <td class="even"><?php echo $row['diachi']; ?></td>
                     <td class="even"><?php echo $row['namsinh']; ?></td>
                     <td class="even">
                         <a class="delete" href="http://localhost/php/thongtinsinhvien/delete_sinhvien.php?id=<?php echo $row['id'] ?>">Xóa</a>
                         <a class="update" href="http://localhost/php/thongtinsinhvien/update_sinhvien.php?id=<?php echo $row['id'] ?>">Sửa</a>
                     </td>
                 </tr>
           <?php  } ?>
            <?php } ?>
        <?php } else{
             echo "No student in database";
        }
     ?>
    </table>
</body>
</html>