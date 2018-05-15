<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    
    
    $room_query = "SELECT * FROM room WHERE room_id='$id' ";
    $reviews_query = "SELECT * FROM reviews JOIN room ON reviews.room_id = room.room_id JOIN user ON user.user_id = reviews.user_id WHERE room.room_id ='$id' AND user.user_id='1'";
    $favorites_query= "SELECT * FROM favorites JOIN room ON favorites.room_id = room.room_id WHERE room.room_id ='$id'";
    
    $room_results = $connection->query($room_query);
    $reviews_results = $connection->query($reviews_query);
    $favorite_results = $connection->query($favorites_query);
    
    if ($room_results->num_rows > 0) {
        while($row_room = $room_results->fetch_assoc()) {
            if ($row_room["pet_friendly"] == 0) {
                $row_room["pet_friendly"] = 'No';
            } else {
                $row_room["pet_friendly"] = 'Yes';
            }
?>
            <div class='hotelName'>
                <div style="flex-grow: 8" class="info1">
                    <span><?php echo $row_room["name"];?>-<?php echo $row_room["city"];?>,<?php echo $row_room["area"];?>| Reviews:
                        <?php
                            if ($reviews_results->num_rows > 0) {
                                while($review_row = $reviews_results->fetch_assoc()) { 
                                    echo '<span> <img src=images/star.png alt=star> </span>';
                                }
                            }
                        ?>
                        <span> | </span>
                        <?php
                            if ($reviews_results->num_rows > 0) {
                                while($favorite_row = $favorite_results->fetch_assoc()) {
                                    echo '<span> <img src=images/heart.png alt=heart> </span>';
                                }
                            }
                        ?>
                    </span>    
                </div>
                    
                <div style="flex-grow: 1" class="info2">
                    <span> Per Nigth:<?php echo $row_room["price"];?> </span>
                </div>
                    
            </div>
            
            <div id="hotelImage">
                <img src='images/rooms/<?php echo $row_room["photo"];?>' alt="Room image">
            </div>
            
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-2">
                        <span>
                            <img src="images/guests.png" alt="guests image">
                            <span class="badge badge-light"><?php echo $row_room["count_of_guests"]; ?> </span>
                        </span>
                        <span> Count of Guests </span>
                        </div>
                        <div class="col-2">
                            <span>
                                <img src="images/house.png" alt="room image">
                                <span class="badge badge-light"><?php echo $row_room["room_type"];?> </span>
                            </span>
                            <span> Type of Room </span>
                        </div>
                        <div class="col-2">
                            <span>
                                <img src="images/parking.png" alt="parking image">
                                <span class="badge badge-light"><?php echo $row_room["parking"];?> </span>
                            </span>
                            <span> Parking </span>
                        </div>
                        <div class="col-2">
                            <span>
                                <img src="images/wifi.png" alt="wifi image">
                                <span class="badge badge-light"><?php echo $row_room["wifi"];?> </span>
                            </span>
                            <span> Wifi </span>
                        </div>
                        <div class="col-2">
                            <span>
                                <img src="images/pet.png" alt="pet image">
                                <span class="badge badge-light"><?php echo $row_room["pet_friendly"];?> </span>
                            </span>
                            <span> Pet Friendly </span>
                        </div>
                </div>
            </div>
            
            <div class="room_desc">
                <h1>Room Descriprion</h1>
                    <p><?php  echo $row_room["long_description"];?> </p>
                    <div class="reservation_button">
                        <a href="booking.php?check_in_date=<?php echo $_GET["check_in_date"]; ?>&check_out_date=<?php echo $_GET["check_out_date"]; ?>&user_id=1&room_id=<?php echo $id;?> ">
                            <input type="submit" id="reservation_button" value="Book Now">
                        </a>
                    </div>
                    <div class="google_map">
                       <iframe
                            width="600"
                            height="450"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBJXitvb8FrL7xfEuFTZHWZ4xJ8lsZ18Ks
                              &q=<?php echo $row_room["lat_location"]; ?>,<?php echo $row_room["lng_location"]; ?>" allowfullscreen>
                        </iframe>  
                    </div>
                    <hr>
                    <div class="reviews">
                        <h1>Reviews</h1>
                        <?php
                            $reviews_results = $connection->query($reviews_query);
                            if ($reviews_results->num_rows > 0) {
                                while($review_row = $reviews_results->fetch_assoc()) {
                                ?>    
                                    <div class="review">
                                        <h2><?php echo $review_row["review_id"];?>.<?php echo $review_row["username"];?></h2>
                                        <?php
                                            for ($i = 0 ; $i < $review_row["rate"] ; $i++) {
                                        ?>
                                                <span> <img src="images/star.png" alt="star"> </span>
                                      <?php } ?>
                                        
                                        <h3><?php echo $review_row["date_created"];?></h3>
                                        <p style="margin-bottom: 15px; margin-top:0px; padding-top:0px;"><?php echo $review_row["text"];?> </p>
                                    </div>
                    
                        <?php
                                }
                            }
                        
        }
        ?>
                        <div class="container">
                            <h1 style="font-size: 1.5rem;">Add Review</h1>
                                <form action="submit.php?&user_id=1&room_id=" method="GET">
                                    
                                        <div>
                                            <input type="text" value="<?php echo $id; ?>" name="room_id" hidden="">
                                        </div>
                                    
                                        <div>
                                            <input type="text" value="1" name="user_id" hidden="">
                                        </div>

                                        <div>
                                            <label for="spinner">Rate hotel(in stars):</label>
                                            <input id="spinner" name="rate" max="5">
                                        </div>

                                        <div class="form-group">
                                            <label for="comment">Comment:</label>
                                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                        </div>

                                        <div>
                                        <input type="submit" id="review_button" value="Submit">
                                        </div>

                                </form>
                        </div>

    
                    </div>
            </div>
<?php
    }

