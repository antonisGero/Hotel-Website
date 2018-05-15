<?php  

if ($_GET["arrival"] !== "") {
    $arrival = $_GET["arrival"];
    $query = "SELECT * FROM room WHERE room_id NOT IN ( SELECT room.room_id FROM room JOIN bookings ON bookings.room_id = room.room_id WHERE check_in_date !=$arrival ) ";
}

if ($_GET["departure"] !== "") {
    $departure = $_GET["departure"];
    $query = "SELECT * FROM room WHERE room_id NOT IN ( SELECT room.room_id FROM room JOIN bookings ON bookings.room_id = room.room_id WHERE check_out_date !=$departure ) ";
}

if ( ($_GET["arrival"] !== "") && ($_GET["departure"] !== "") ) {
    $arrival = $_GET["arrival"];
    $departure = $_GET["departure"];
    $query = "SELECT * FROM room WHERE room_id NOT IN ( SELECT room.room_id FROM room JOIN bookings ON bookings.room_id = room.room_id WHERE check_in_date !=$arrival AND "
            . "check_out_date !=$departure ) ";
}

if ((isset($_GET['city'])) && (isset($_GET['room'])) && (isset($_GET['arrival'])) && (isset($_GET['departure'])) && (isset($_GET['guests'])) && (isset($_GET['price'])) ) {
        $city = $_GET['city'];
        $room = $_GET['room'];

        if ($room == "Single Room") {
            $room = 1;
        } elseif ($room == "Double Room") {
            $room = 2;
        } elseif ($room == "Triple Room") {
            $room = 3;
        } else {
            $room = 4;
        }
        
        
        $arrival = $_GET['arrival'];
        $departure = $_GET['departure'];
        $guests = $_GET['guests'];
        $price = $_GET['price'];
        $price = explode('-', $price);
        $minPrice = $price[0];
        $maxPrice = $price[1];
        $minPrice = str_replace('$', '', $minPrice);
        $maxPrice = str_replace('$', '', $maxPrice);
        
        
        $query = "SELECT * FROM room WHERE city= '$city' AND room_type= '$room' AND count_of_guests= '$guests' AND price >= '$minPrice' AND price<= '$maxPrice' ";
    
        
    } elseif ((isset($_GET['city'])) && (isset($_GET['room'])) ) {
        $city = $_GET['city'];
        $room = $_GET['room'];
        
        if ($room == "Single Room") {
            $room = 1;
        } elseif ($room == "Double Room") {
            $room = 2;
        } elseif ($room == "Triple Room") {
            $room = 3;
        } else {
            $room = 4;
        }
    
        
        $query = "SELECT * FROM room WHERE city= '$city' AND room_type='$room'";
        
    } elseif ((isset($_GET['room']))) {
        $room = $_GET['room'];
        
        if ($room == "Single Room") {
            $room = 1;
        } elseif ($room == "Double Room") {
            $room = 2;
        } elseif ($room == "Triple Room") {
            $room = 3;
        } else {
            $room = 4;
        }
        
        $query = "SELECT * FROM room WHERE room_type= '$room'";
    
       
    }  elseif ((isset($_GET['city']))) {
        $city = $_GET['city'];

        $query = "SELECT * FROM room WHERE city= '$city'";  
        
    } elseif ((isset($_GET['guests']))) {
       
        $guests = $_GET['guests'];
        
        $query = "SELECT * FROM room WHERE count_of_guests='$guests' ";
        
    } elseif ((isset($_GET['price']))) {
        $price = $_GET['price'];
        $price = explode('-', $price);
        $minPrice = $price[0];
        $maxPrice = $price[1];
        $minPrice = str_replace('$', '', $minPrice);
        $maxPrice = str_replace('$', '', $maxPrice);
   
        $query = "SELECT * FROM room WHERE  price >= '$minPrice' AND price<= '$maxPrice'";
        
    } elseif ((isset($_GET['city'])) && (isset($_GET['room'])) && (isset($_GET['arrival'])) && (isset($_GET['departure']))) {
        $city = $_GET['city'];
        $room = $_GET['room'];
        $arrival = $_GET['arrival'];
        $departure = $_GET['departure'];
        
        $query = "SELECT * FROM room WHERE city= '$city' AND room_type= '$room'";
        
    }
  
    
    $result = $connection->query($query);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {      
?>
            <div> 
                <img src='images/rooms/<?php echo $row["photo"]; ?>' id= room_image> 
            </div>
            
            <div class=hotel_info> 
                <h1> <?php echo $row["name"]; ?></h1>
                <h2> <?php echo $row["city"]; ?>,<?php echo $row["area"]; ?> </h2> 
                <p id=hotel_description>
                    <?php echo $row["short_description"]; ?>
                </p> 
            </div> 

            <div class=room_button>
                <a href="room_page.php?id=<?php echo $row["room_id"]; ?>&check_in_date=<?php echo $_GET['arrival']; ?>&check_out_date=<?php echo $_GET['departure']; ?>">
                    <input type=submit class=room_btn value="Go To Room Page">
                </a>
            </div>
            
            <div class=container-fluid> 
                <div class=row>
                    <div class=col-4>
                        Per Night:<?php echo $row["price"];?>$
                    </div>
                    <div class=col-4>
                        Count of Guests:<?php echo $row["count_of_guests"]; ?>
                    </div>
                    <div class=col-4>
                        Type of Room:<?php echo $row["room_type"]; ?>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo '0 results';
    }