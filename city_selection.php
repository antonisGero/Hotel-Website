<?php

$query_city = "SELECT DISTINCT city FROM room";

$city_results = $connection->query($query_city);

if($city_results->num_rows > 0) {
    arsort($city_results);
    while($row = $city_results->fetch_assoc()) {
         echo '<option>'.$row["city"].'</option>';     
    }
} else {
    echo '0 results';
}



