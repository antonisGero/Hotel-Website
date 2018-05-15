<?php

$query_rooms = "SELECT DISTINCT room_type.room_type FROM room_type JOIN room ON room_type.id = room.room_type";

$room_results = $connection->query($query_rooms);

if($room_results->num_rows > 0) {
    arsort($room_results);
    while($row = $room_results->fetch_assoc()) {
         echo '<option>'.$row["room_type"].'</option>';     
    }
} else {
    echo '0 results';
}


