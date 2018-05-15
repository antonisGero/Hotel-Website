<?php include 'connection/connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Reservation Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.min.css" />

</head>

<body>
    <?php
        if (($_GET['check_in_date'] == "") || ($_GET['check_out_date'] == "") || !isset($_GET['room_id'] ) || !isset($_GET['user_id'])) {
           
    ?>    
            <div id="dialog1" title="Error" hidden>
                    You must complete check-in and check out date.
                    Please go back and complete the necessary fields to continue 
                    with room reservation.
            </div> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/book.js"></script>
</body>
   
<?php
        } else {
           $room_id = $_GET["room_id"];
           $arrival = $_GET["check_in_date"];
           $departure = $_GET["check_out_date"];
           $user = $_GET["user_id"];
           $query = "SELECT * FROM bookings WHERE room_id='$room_id' AND check_in_date='$arrival' OR check_out_date='$departure'";
           
           
           $bookings_result = $connection->query($query);
           
           if ($bookings_result->num_rows > 0) {
?>
                <div id="dialog2" title="Eror" hidden>
                    Sorry, these days the room you choose is occupied.
                    Please select another room or change your dates. 
                </div> 
                <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
                <script src="js/jquery-ui.min.js"></script>
                <script src="js/book.js"></script>
</body> 
<?php 
           } else {
                $stmt = $connection->prepare("INSERT INTO bookings (check_in_date, check_out_date, user_id, room_id) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssii", $arrival, $departure, $user, $room_id);
                if (!$stmt->execute()) {
                    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                }

?>
                <div id="dialog3" title="Success" hidden>
                    Your book made succefully!
                    Go to your profile to see more information about your bookings.
                </div> 
                <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
                <script src="js/jquery-ui.min.js"></script>
                <script src="js/book.js"></script>
</body>
</html>
<?php
           }
        }
        
           
        
