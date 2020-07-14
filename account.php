<?php
SESSION_START();
if(!isset($_SESSION['user_email'])){
    echo " <script>window.open('login.php?not_logged in','_self')</script> ";
}
else
{

?>
<!Doctype>
<html>
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
                        <li><a href="logout.php">Log Out</a></li>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
                <a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
                <a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
            </div>
            
        </header>
            <section  class="section-plans">
            <div class="row">
                <h2 > Profile</h2>
                 <?php
    
    if(isset($_SESSION['user_email']))
    {
        echo "<b><h5>Welcome:</b><h5/>".$_SESSION['user_email'];
        
    }
    
 
    ?>
               
      <div class="col span-1-of-3">
        <div class="plan-box">
                       
                        
                        </div>
                        <div>
                            <ul class="acc">
                               <a href="order.php"> <li>Order</li></a>
                                <a href="profile.php"><li>Account</li></a>
                                <a href="history.php"><li> History</li></a>
                                <a href="logout.php"><li>Log Out</li></a>
                            </ul>
                        </div>

                    </div>
                
                
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










</html>
<?php }
?>