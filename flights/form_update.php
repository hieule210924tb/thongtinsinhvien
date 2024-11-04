<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php
    require './connect.php';
    $id=$_GET['id'];
    $sql = "SELECT * FROM flights WHERE id='$id'";
    $flights = $conn->query($sql);
    $row = $flights->fetch_assoc();
    ?>
    <form action="./update_flights.php" method="post">
        Id: <input type="number" name="id" value="<?php echo $row['id'] ?>"> <br>
        Origin <input type="text" name="origin" value="<?php echo $row['origin'] ?>"> <br>
        Destination <input type="text" name="destination" value="<?php echo $row['destination'] ?>"> <br>
        Duration <input type="date" name="duration" value="<?php echo $row['duration'] ?>"> <br>
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>