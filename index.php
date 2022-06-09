<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>huella luminosa</title>
        <link rel="icon" href="img/favicon.ico">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
           <div class="container">
               <center>
               <div id="banner_content">
                   <h1><b>Hand-made accesories for your daily life</b></h1>
                   <a href="login.php" target="_blank"> <button class="btn btn-info btn-lg active"><b>Register to shop</b> </button></a>
                   
               </div>
                </center>
           </div>
       
       </div><br><br>
        
        
         <div class="container">
             <div class="row text-center">               
                 <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
                <image src="img/7.jpg"/>
             <div class="caption">
                 <h2>Tote bags</h2>
                 <p>Unique photographs, collages and cyanotypes matching different colors and materials.</p>
             </div>
            </a>
                         </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/1.jpg"/>
             <div class="caption">
                 <h2>Accesories</h2>
                 <p>Cyanotypes over different materials for everyday use.</p>
             </div>
            </a>
                     </div>
        </div>

        <div class="col-md-4 col-sm-7"> 
                     <div class="thumbnail">
            <a href="#">
             <image src="img/8.jpg"/>
             <div class="caption">
                 <h2>Artwork</h2>
                 <p>Cyanotypes and printed photographs to enhance your spaces.</p>
             </div>
            </a>
        </div>
    </div>
 
    </div>
    
    </div><br><br><br><br>   
        
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
