<?php include 'connection/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />

</head>
<body>
    
    <?php include 'layouts/header.php'; ?>

    <div id="mainContainer">
       
        <div id="logo-img"></div>

        <div class="list-form">
            <form action="list_page.php" method="GET">
             
                    <div class="dropdown">
                        <div class="form-group1">
                            <select name="city" class="select" id="city">
                                <option disabled selected> Choose City </option>
                                <?php include 'city_selection.php'; ?>
                            </select>
                        </div>

                        <div class="form-group2">
                            <select name="room" class="select" id="room">
                                <option disabled selected> Choose Room </option>
                                <?php include 'room_selection.php'; ?>
                            </select>
                        </div>
                    </div>

                    <div class="check_dates">

                        <div>
                            <label for="check-in">Check-in: </label>
                            <input type="text" class="date" id="check-in" name="arrival">
                        </div>

                        <div>
                            <label for="check-out">Check-out: </label>
                            <input type="text" class="date" id="check-out" name="departure">
                        </div>

                    </div>    

                <div id="search_button">
                    <input type="submit" id="search-button" value="Search">
                </div>

                <div id="dialog1" title="Error" hidden = "true">
                    <p>You must complete at least one field.</p>
                </div>
                
                
            
            </form>
        </div>
    
    </div>
    
    <?php include 'layouts/footer.php'; ?>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>