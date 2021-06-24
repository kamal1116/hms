<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room booking and availability</title>
    <link rel="stylesheet" href="ava.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>                   
    <div class="container">
        <form class="form-group" action="availability.php" method="post">
            <div id="form">
                <h1 class="text-white text-center">Booking Now</h1>

                <div id="first-group">

                    
     

<div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="First name" name="fn">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" placeholder="Phone number" name="pn">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" placeholder="Check-in" name="dd">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" name="ng">
                            <option hidden="">No.of guests</option>
                            <option value="1-5">1-5</option>
                            <option value="6-10">6-10</option>
                            <option value="11-20">11-20</option>
                        </select>
                    </div>
                    

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Last name" name="ln">
                    </div>

                    <div id="content">
                        <i class="fa fa-hotel" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" name="rt">
                            <option hidden="">Room Type</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Executive">Executive</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" placeholder="Check-out" name="ad">
                     
                    </div>

                    <div id="content">
                        <i class="fa fa-hotel" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" name="add">
                        	<option hidden="">Additional</option>
                            <option value="Extra bed">Extra bed</option>
                            <option value="Buffet included">Buffet included</option>
                            <option value="Extra bed/Buffet included">Extra bed/Buffet included</option>
                        </select>
                    </div>
            
                </div>

                <input type="submit" name="Book" value="Book Now" id="submit-btn">

            </div>
        </form>
    </div>
</body>
</html>

