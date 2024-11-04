<?php
require './connect.php';
$id = $_POST['id']; // Đảm bảo form gửi 'id'
$origin = isset($_POST['origin']) ? $_POST['origin'] : '';
$destination = isset($_POST['destination']) ? $_POST['destination'] : '';
$duration = isset($_POST['duration']) ? $_POST['duration'] : '';

$sql = "UPDATE flights SET origin = '$origin', destination = '$destination' , duration ='$duration'  WHERE id = '$id' ";
if($conn->query($sql)===TRUE){
    echo "Bạn đã sửa thành công";
 }else{
   echo "ERROR:" .$sql . "<br>" . $conn->error;
 }
//   require('./add_flight.php');
  header("location:add_flight.php");
  $conn->close();

?>
