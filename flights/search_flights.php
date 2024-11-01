<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Flights</title>
    <link rel="stylesheet" href="./flights.css">
</head>
<body>
    <h1>Search Flights</h1>
    <form action="" method="get">
        Origin <input type="text" name="origin"> <br>
        Destination <input type="text" name="destination"> <br>

        <input type="submit" value="Search">
    </form>
    <?php 
       if(isset($_GET['origin'])){
        $origin = $_GET['origin'];
        $destination = $_GET['destination'];
        require './connect.php';
        mysqli_set_charset($conn, 'UTF8');

        $sql = "SELECT * FROM flights WHERE origin='$origin' AND destination='$destination' ";
        $result = $conn->query($sql);

        require('./table-search.php');
        $conn->close();
       }
    ?>
</body>
</html>