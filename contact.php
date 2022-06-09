<?php
require("includes/common.php");

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>huella luminosa</title>
        <link rel="icon" href="img/favicon.ico">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <br><br><br><br><br>

<div class="contact"> 
    <form action="success_contact.php">

        <label for="fname">First name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name (required)" required>

        <label for="lname">Last name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name (required)" required>

        <label for="email">Your email:</label>
        <input type="text" id="email" placeholder="Your email (required)" size="40" required>

        <label for="country">City</label>
        <input type="text" id="lcountry" name="country" placeholder="Your city">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Your message (required)" style="height:200px" required></textarea>

        <input type="submit" value="Submit">

    </form>
</div> 

<footer class="fo">
            <div class="container">
                <center>
                <a href= "https://www.instagram.com/huella.luminosa/">
               <img src="img/instagram.png" alt="Instagram logo" width="25" height="25"></a>
               <p>© 2022 huella luminosa | All Rights Reserved.</p>
                </center>
            </div>   
        </footer>
        
 </body>

</html>
