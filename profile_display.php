

            <div class="sideBar">
                
                <div class="favorites">
                    <h1>Favorites</h1>
                    <ul class="list-group favorites">
                        <?php
                            $query = "SELECT * FROM `favorites` JOIN room ON room.room_id = favorites.room_id WHERE user_id =1";
                            $result_favorites = $connection->query($query);
                            if ($result_favorites->num_rows > 0) {
                                while($row_favorites = $result_favorites->fetch_assoc()) {
                        ?>
                                    <li class="list-group-item"><?php echo $row_favorites["name"]; ?> </li>
                        <?php            
                                }

                            }
                        ?>
                    </ul>
                    
                </div>
                
                <div class="reviews">
                    <h1>Reviews</h1>
                    <ul class="list-group reviews">
                        <?php
                            $query = "SELECT DISTINCT * FROM reviews JOIN room ON room.room_id = reviews.room_id WHERE user_id = 1";
                            $result_reviews = $connection->query($query);
                            if ($result_reviews->num_rows > 0 ) {
                                while($row_reviews = $result_reviews->fetch_assoc()) {
                        ?>
                                    <li class="list-group-item"><?php echo $row_reviews["name"]; ?> 
                        <?php            
                                    for ($i = 0 ; $i < $row_reviews["rate"]; $i++) {
                        ?>
                                        <span> <img src="images/star.png" alt="star"> </span>
                                    
                        <?php
                                    }
                        
                                }
                            }
                        ?>
                                    </li>
                    </ul>
                </div>
                
            </div>
            <?php
                $query = "SELECT * FROM bookings JOIN room ON bookings.room_id = room.room_id where user_id=1";
                $result_bookings = $connection->query($query);
            ?>
            <div class="myBookings">
                
                <div class="bookings">
                    <h1 id="results"> My Bookings </h1>
                </div>
                <?php
                    if ($result_bookings->num_rows > 0 ) {
                        while($row_bookings = $result_bookings->fetch_assoc()) {
                ?>
                            <div>
                                <img src="images/rooms/<?php echo $row_bookings["photo"]; ?> " id="room_image">
                            </div>
                
                <div class="hotel_info">
                    <h1><?php echo $row_bookings["name"];?></h1>
                    <h2><?php echo $row_bookings["city"];?>,<?php echo $row_bookings["area"];?></h2>
                    <p id="hotel_description">
                        <?php echo $row_bookings["long_description"];?>
                    </p>
                </div>
                
                
                <div class="room_button">
                    <a href="room_page.php?id=<?php echo $row_bookings["room_id"];?>">
                        <input type="submit" name="id" id="room_button" value="GO To Room Page">
                    </a>
                </div>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                            Total Cost: <?php echo $row_bookings["price"]; ?>
                        </div> 
        
                        <div class="col-3">
                            Check-in Date: <?php echo $row_bookings["check_in_date"]; ?>
                        </div> 
                            
                        <div class="col-3">
                            Check-out Date: <?php echo $row_bookings["check_out_date"]; ?>
                        </div>

                        <div class="col-3">
                            Type of Room: <?php echo $row_bookings["room_type"]; ?>
                        </div> 
                    </div>
                </div>
<?php
                        }

                    }
?>
            </div>
    
