<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flights</title>
    <link rel="stylesheet" href="./flights.css">
</head>
<body>
    <h2>Thông tin chuyến bay</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Duration</th>
            <th>Xóa</th> 
            <th>Cập nhật</th> 
        </tr>
        <?php 
            require './connect.php';
            mysqli_set_charset($conn, 'UTF8');
           
            $sql = "SELECT * FROM flights";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                for($i = 0; $i < $result->num_rows; $i++){
                    echo "<tr>";
                    $row = $result->fetch_assoc();
                    if($row['id'] % 2 == 0){
                        echo "<tr class='odd'><td>" .$row['id']. "</td>" ;
                    } else {
                        echo "<tr class='even'><td>" .$row['id']. "</td>" ;
                    }
                    echo
                    "<td>" .$row['origin']. "</td>" .
                    "<td>" .$row['destination']. "</td>" .
                    "<td>" .$row['duration']. "</td>" .
                    "<td>". '<a href="http://localhost/php/flights/delete_flights.php?id=' .$row['id'].'">Xóa</a>' ."</td>".
                    "<td>". '<a href="http://localhost/php/flights/form_update.php?id=' .$row['id'].'">Sửa</a>' ."</td>";
                      "</tr>";
                }
            } else {
                echo "No flight in database";
            }
        ?>
    </table>
</body>
</html>
