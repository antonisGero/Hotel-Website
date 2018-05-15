<?php

$query_guests = "SELECT DISTINCT count_of_guests FROM room";

$guests_results = $connection->query($query_guests);

if($guests_results->num_rows > 0) {
    arsort($guests_results);
    while($row = $guests_results->fetch_assoc()) {
         echo '<option>'.$row["count_of_guests"].'</option>';     
    }
} else {
    echo '0 results';
}
