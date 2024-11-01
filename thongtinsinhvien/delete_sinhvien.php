
<?php
   require './connect.php';
   $id = $_GET['id'];
   $sql = "DELETE FROM sinhvien WHERE id='$id'";

   if($conn->query($sql)){
      echo "Bạn đã xóa";
   } else{
    echo "Error" .$sql ."<br>" .$conn->errno;
   };
   header("location:index.php");
?>