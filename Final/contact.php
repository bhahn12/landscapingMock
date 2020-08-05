<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lawnstylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CONTACT</title>
    </head>

<?php include "Navigation.php" ?>

<body>
<div class = "contact center">
    <form action="">
        <label for = "fname">First Name</label><br>
        <input type = "text" id = "fname" name = "firstname"
        placeholder = "Your first name..."><br>

        <label for = "lname">Last Name</label><br>
        <input type = "text" id = "lname" name = "lastname"
        placeholder = "Your last name..."><br>

        <label for = "email">Email</label><br>
        <input type = "email" name = "email"
        placeholder = "Your email..."><br>

        <label for = "feedback">Feedback</label><br>
        <textarea name="feedback" placeholder="Begin writing here..."></textarea><br>

        <input type = "submit" value="Submit">
    </form>
</div>
<br></br>

<p class="space"></p>
<footer>
    <p>Company &copy; Bob's Lawn Care. All rights reserved.</p>
    </footer>
    </body>
</html>
