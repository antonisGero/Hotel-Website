<?php require 'connection/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/list_page.css" />
    
</head>



<body>
    
    <?php include 'layouts/header.php' ?>

    <main class="mainContent">

        <div class="container">

            <div class="filter_container">

                <h1> Find the perfect hotel </h1>

                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="GET">

                    <div class="dropdown_menu">

                        <div class="guests_choice">
                            <select name="guests" class="select" id="guests">
                                <option disabled selected> Guests </option>
                                <?php include 'guests_selection.php'; ?>
                            </select>
                        </div>
    
                        <div class="room">
                            <select name="room" class="select" id="room">
                                <option disabled selected> Room Type </option>
                                <?php include 'room_selection.php'; ?>
                            </select>
                        </div>

                        <div class="city">
                            <select name="city" class="select" id="city">
                                <option disabled selected> City </option>
                                <?php include 'city_selection.php'; ?>
                            </select>
                        </div>

                        <div class="range_value" >
                            <p>
                                <label for="price">Price: </label>
                                <input type="text" name="price" id="price" readonly style="border:0; font-weight:bold;">
                            </p>

                            <div id="slider-range">

                            </div>

                        </div>

                        <div class="dates">

                            <div class="check_in_filter">
                                <label for="check-in">Check-in: </label>
                                <input type="text" class="date" id="check-in" name="arrival">
                            </div>
        
                            <div class="check_out_filter">
                                <label for="check-out">Check-out: </label>
                                <input type="text" class="date" id="check-out" name="departure">
                            </div>
        
                        </div> 

                    </div>
       
    
                    <div>
                        <input type="submit" id="find_button" value="Find Hotel">
                    </div>
                    
                
                </form>

            </div>

            <div class="main_container">
                
                <div class="search_results">
                    <h1 id="results"> Search Results </h1>
                </div>
                
                <?php include 'searchResults.php'; ?>

            </div>
            

        </div>
        
    </main>

        <?php include 'layouts/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/list_page.js"></script>
</body>

</html>