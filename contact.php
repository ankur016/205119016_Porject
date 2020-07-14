
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" type="text/css" href="style/grid.css">
        <link rel="stylesheet" type="text/css" href="style/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="style/animate.css">
        <link rel="stylesheet" type="text/css" href="style/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Lunchbox</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                      <a href="index.php"><img src="style/image/logo1.png" class="logo"></a> 
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="cities.php">Our cities</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li> <a href="signup.php">Sign up</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
            </div>
            
        </header>
        
        <section>
        <h2>Contact Us</h2>
            <div class="row">
            <form method="GET" action="contact.php" class="contact-form">
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="name"> Name  </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                        <input type="text" name="c_name" id="name" placeholder="your name" required>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="email">Email </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                        <input type="email" name="c_email" id="email" placeholder="your email" required>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="email">Mobile No.</label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                        <input type="text" name="c_number" id="number" placeholder="your phone number" required>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="findus ">How did you find us? </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        <select name="c_find_us" id="find-us">
                            <option vlaue="friends" selected >Friends</option> 
                            <option vlaue="Search">Search Engine</option>
                            <option vlaue="Newspaper" >Newspaper</option> 
                            <option vlaue="Others" >Other</option> 
                            
                            </select>
                        </div>
                 </div>
                 
                 <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="name">Drop us a line  </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                            <textarea name="c_message" placeholder="your message"></textarea>
                        </div>
                 </div>
                 <div class="row">
                
                    <div class="col span-1-of-3">
                       <label>&nbsp; </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                        <input type="submit" name="submit" value="submit">
                        </div>
                 </div>
                
                
                </form>
            </div>
        
        
        
        </section>
       <footer>
            <div class="row">
                <div class="row">
            <div class="col-span-1-of-4">
                    <ul class="footer-nav">
                <li>
                    <a href="#">About us</a>
                    </li>
                 <li>
                    <a href="#">Blog</a>
                    </li>
                <li>
                    <a href="#">Press</a>
                    </li>
                <li>
                    <a href="#">IOS App</a>
                </li>
                <li><a href="#">Android App</a>
                
                    </li>
                
                </ul>
                
                </div>
           <div class="col-span-1-of-3">
            
            <div align="center" class="contact"><a href="contact.php">Contact Us</a>
            
                <br><br><h4 >For order and Booking</h4>
                <ul class="footer-contact">
                    <li><i class="ion-android-call"></i> 9798555150,8995858151 </li>
                    <li><i class="ion-android-mail"></i> Email: lunchbox@gmail.com</li>
                
                
                </ul>
                
                
               
                
               </div> </div>
        
                 <div class="col-span-3-of-3">
                <ul class="social-links">
                <li> <a href="#"><i class="ion-social-facebook"></i></a></li>
                <li> <a href="#"><i class="ion-social-twitter"></i></a></li>
                <li> <a href="#"><i class="ion-social-googleplus"></i></a></li>
                <li> <a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
      </div>
            
        
        </div>
            <div class="row">
        <p align="center"><br><br>
                 Copyright &copy; 2019 by lunchbox . All rights reserved.
            
        </p>    
            
        </div>

        
        </footer>
    </body>
    <script src="//cdn.jsdeliver.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
</html>

<?php

   if(isset($_GET['submit'])) {
       $con=mysqli_connect('localhost','root','','lunchtime');
       if($con){
           echo "connectme";
       }else
       {
       die ("Database connection fatal error");
       }
        $c_name=$_GET['c_name'];
        $c_email=$_GET['c_email'];
        $c_number=$_GET['c_number'];
        $c_find_us=$_GET['c_find_us'];  
        $c_message=$_GET['c_message'];
       
       $query="INSERT INTO contact_form (c_name,c_email,c_number,c_find_us,c_message) VALUES('$c_name','$c_email','$c_number','$c_find_us','$c_message') ";
       $result=mysqli_query($con,$query);
       if(!$result){
           die('Query Failed'.mysqli_error());
       }
       
       
   }
    
    
    ?>
 



 



