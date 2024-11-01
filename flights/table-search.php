<?php 
 if($result->num_rows >0){
    echo "<table  border= '1' width= '50%' align-items= 'center'>
          <caption>Thông tin chuyến bay</caption> 
           <tr>
             <th>ID</th>
             <th>Origin</th>
             <th>Destination</th>
             <th>Duration</th>
           </tr>";
    while($row = $result->fetch_assoc()){
            if($row['id'] % 2 ==0){
                echo "<tr class='odd'>
                        <td>" .$row['id']. "</td>" ;
            }else{
                echo "<tr class='even'><td>" .$row['id']. "</td>" ;
            }
            echo
            "<td>" .$row['origin']. "</td>" .
            "<td>" .$row['destination']. "</td>" .
            "<td>" .$row['duration']. "</td>";
                   "</tr>";
          }
     echo  "</table>";
        }else{
        echo "No flight in database";
        };
?>