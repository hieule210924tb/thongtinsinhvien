<?php
    require './connect.php';


    $id = $_GET['id'];
    $origin = $_GET['origin'];
    $destination = $_GET['destination'];
    $duration = $_GET['duration'];

    $sql = "INSERT INTO flights(id, origin, destination, duration)
                    VALUES('$id','$origin','$destination','$duration')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    };
    $conn->close();
?>
