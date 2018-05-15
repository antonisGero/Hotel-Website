<?php include 'connection/connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feedback Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.min.css" />
</head>

<body>
    <?php
        if (($_GET["comment"] !== "" ) || (($_GET["rate"])) !== "" ) {
            $stmt = $connection->prepare("INSERT INTO reviews (rate, text, user_id, room_id) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("isii", $_GET["rate"], $_GET["comment"], $_GET["user_id"], $_GET["room_id"]);
            if (!$stmt->execute()) {
                    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            } else {
    ?>
                <div id="dialog1" title="Sucess" hidden>
                    Your comment has successfully added.
                    Thank you for your feedback!
                </div> 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/submit.js"></script>
</body>
</html>
    <?php
            }
        } else {
            ?>
                <div id="dialog2" title="Sucess" hidden>
                    We want a true feedback for our hotels, so you
                    must complete at least one field.Go back and let us know
                    how your vacation was. Thank you!
                </div> 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/submit.js"></script>
</body>
</html>
<?php
        }

    

    

   

           
        

