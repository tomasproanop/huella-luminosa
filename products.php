<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>

<html>
    <head>    
        <meta charset="UTF-8">
        <title>huella luminosa Store | Products</title>
        <link rel="icon" href="img/favicon.ico">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.0.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!--<script>magnify("myimage", 3);</script>// -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <br><br><br><br><br>
        <div class="container">
            
            <div class="jumbotron">
                <h1>Welcome to my store!</h1>
                <p>I offer you unique hand-made art.</p>
            </div>
        </div>
        
        <!--Items-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6" class="img-magnifier-container">
                        <div class="thumbnail">
                            <img  id="imgs" src="img/5.jpg" alt="Necklace with cyanotype">
                                <div class="caption">
                                <h3>Necklace with cyanotype</h3>
                                <p>Price: $20</p>
                              <?php 
					
					if (check_if_added_to_cart(1)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                                </div>
                        </div>
                    </div>
                  
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img id="imgs" src="img/2.jpg" alt="Necklace with cyanotype">
                                    <div class="caption">
                                    <h3>Necklace with cyanotype</h3>
                                    <p>Price: $20</p>
                                        <?php 
					
					if (check_if_added_to_cart(2)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>

                                     </div>
                            </div>
                        </div>

                  
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-magnifier-container" id="imgs" src="img/10.jpg" alt="Earrings with cyanotype">
                                    <div class="caption">
                                    <h3>Earrings with cyanotype</h3>
                                    <p>Price: $20</p>
                                        <?php 
					
					if (check_if_added_to_cart(3)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                                    </div>
                            </div>
                        </div>
                  

                  <div class="container">
                        <div class="row text-center">
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail">
                                    <img class="img-magnifier-container" id="imgs" src="img/11.jpg" alt="Earrings with cyanotype">
                                       <div class="caption">
                                       <h3>Earrings with cyanotype</h3>
                                       <p>Price: $20</p>
                                            <?php 
					
					if (check_if_added_to_cart(4)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                             
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                            <img class="img-magnifier-container" id="imgs" src="img/12.jpg" alt="Safety pin with cyanotype">
                            <div class="caption">
                              <h3>Safety pin with cyanotype</h3>
                              <p>Price: $15</p>
                              <?php 
					
					if (check_if_added_to_cart(5)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                            </div>
                        </div>
                    </div>
                  

                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                            <img class="img-magnifier-container" id="imgs" src="img/8.jpg" alt="Pin with cyanotype">
                            <div class="caption">
                              <h3>Pin with cyanotype</h3>
                              <p>Price: $15</p>
                                    <?php 
					
					if (check_if_added_to_cart(6)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                            
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                            <img class="img-magnifier-container" id="imgs" src="img/3.jpg" alt="Pegs with cyanotype">
                            <div class="caption">
                              <h3>Pegs with cyanotype</h3>
                              <p>Price: $15</p>
                                 <?php 
					
					if (check_if_added_to_cart(7)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                        </div>
                    </div>
                </div>
                  

                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                            <img class="img-magnifier-container" id="imgs" src="img/4.jpg" alt="Pin with cyanotype">
                             <div class="caption">
                              <h3>Pin with cyanotype</h3>
                              <p>Price: $15</p>
                                    <?php 
					
					if (check_if_added_to_cart(8)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                        </div>
                    </div>  
                </div>


                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-magnifier-container" id="imgs" src="img/14.jpg" alt="Necklace with cyanotype">
                                <div class="caption">
                                 <h3>Necklace with cyanotype</h3>
                                 <p>Price: $20</p>
                                     <?php 
					
					if (check_if_added_to_cart(9)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                        </div>
                    </div>
                </div>
                      
                  
                    <div class="container">
                      <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                          <img class="img-magnifier-container" id="imgs" src="img/6.jpg" alt="Totebag">
                            <div class="caption">
                             <h3>Totebag with cyanotype</h3>
                                <p>Price: $30</p>
                                   <?php 
					
					if (check_if_added_to_cart(10)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                              
                          </div>
                      </div>
                  </div>
                  

                    <div class="container">
                       <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-magnifier-container" id="imgs" src="img/9.jpg" alt="Totebag">
                                <div class="caption">
                                <h3>Totebag with image transfer and collage</h3>
                                <p>Price: $30</p>
                                    <?php 
					
					if (check_if_added_to_cart(11)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>
                          
                          </div>
                      </div>
                  </div>


                    <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="thumbnail">
                                <img class="img-magnifier-container" id="imgs" src="img/13.jpg" alt="Totebag">
                                 <div class="caption">
                                     <h3>Totebag with image transfer and collage</h3>
                                     <p>Price: $30</p>
                                         <?php 
					
					if (check_if_added_to_cart(12)) { 
					echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
					} else {
                                	?>
					<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
					<?php
					}
                                ?>

                                 </div> 
                            </div> 
                        </div>
                    </div>
                </div>   
                        
        <div><br>
        <div><br>

         <!--fix footer 
        <footer class="footer">
            <div class="container">
                <center>
                    <p>© 2022 huella luminosa | All Rights Reserved</p>
                </center>
            </div>   
        </footer>
        -->

    </body>
</html>
