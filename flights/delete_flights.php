<?php 
  require './connect.php';
  mysqli_set_charset($conn, 'UTF8');
  $id=$_GET['id'];
//   $origin = $_GET['origin'];
//   $destination = $_GET['destination'];
//   $sql = "DELETE FROM flights WHERE origin='$origin' and destination='$destination' ";
  $sql = "DELETE FROM flights WHERE id='$id' ";

  if($conn->query($sql)===TRUE){
     echo "You has deleted";
  }else{
    echo "ERROR:" .$sql . "<br>" . $conn->error;
  }
//   require('./add_flight.php');
header('./add_flight.php');
   $conn->close();

?>