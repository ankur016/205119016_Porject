<!DOCTYPE html>
<?php 
session_start();
include("includes/db.php");

?>
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
        <h2>Sign Up</h2>
            <div class="row">
            <form method="POST"  enctype="multipart/form-data" action="signup.php" class="contact-form">
                <div class="row">
                
                    <div class="col span-1-of-3" >
                       <label for="name"> Name  </label> 
                        
                        </div>
                        
                        <div  class="col span-1-of-5" >
                         <input type="text" name="s_first_name" id="name" placeholder="first name" required>
                      
                </div>
                     <div  class="col span-1-of-5" >
                         <input type="text" name="s_last_name" id="name" placeholder="last-name" required>
                      
                </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="email">Email </label> 
                        
                        </div>
                        <div  class="col span-1-of-5">
                        
                        <input  type="email" name="s_email" id="email" placeholder=" " required>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="password">Password</label> 
                        
                        </div>
                        <div class="col span-1-of-5">
                        
                        <input  type="password" name="s_password" id="password" placeholder="" required>
                        </div>
                 </div>
                    <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="email">Age</label> 
                        
                        </div>
                        <div class="col span-1-of-5">
                        
                        <input type="text" name="s_age" id="age" placeholder="" required>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="email">Mobile No.</label> 
                        
                        </div>
                        <div class=" col span-1-of-5">
                        
                        <input type="text" name="s_number" id="number" placeholder="" required>
                        </div>
                 </div>
                    <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="image">Profile Pic</label> 
                        
                        </div>
                        <div class=" col span-1-of-5">
                        
                       <input type="file" name="image" required/>
                        </div>
                 </div>
                <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="gender ">Gender</label> 
                        
                        </div>
                        <div class="col span-1-of-5">
                        <select name="s_gender" id="gender">
                            <option vlaue="male" selected >Male</option> 
                            <option vlaue="female">Female</option>
                            <option vlaue="Others" >Other</option> 
                            
                            </select>
                        </div>
                 </div>
                 
                 <div class="row">
                
                    <div class="col span-1-of-3">
                       <label for="name">Address  </label> 
                        
                        </div>
                        <div class="col span-2-of-3">
                        
                            <input  type="text" name="s_house" id="house_no" placeholder="flat/house no" required>
                            <div class="col span-2-of-5">
                                <input type="text" name="s_city" id="city" placeholder="town/city" required></div>
                            <div class="col span-2-of-5">
                                <input type="text" name="s_state" id="state" placeholder="State" required></div>
                            <div class="col span-2-of-5">
                                <input type="text" name="s_pincode" id="pincode" placeholder="pincode" required></div>
                                
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
        <p align="center">
                 Copyright &copy; 2019 by lunchbox . All rights reserved.
            
        </p>    
            
        </div>

        
        </footer>
    </body>
    <script src="//cdn.jsdeliver.net/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
</html>

<?php
    

   if(isset($_POST['submit'])) {
       
       $con=mysqli_connect('localhost','root','','lunchtime');
       if($con){
           echo "connectme";
       }else
       {
       die ("Database connection fatal error");
       }
       
       
       
       
        $s_first_name=$_POST['s_first_name'];
        $s_last_name=$_POST['s_last_name'];
        $s_email=$_POST['s_email'];
        $s_password=$_POST['s_password'];
        $s_age=$_POST['s_age'];
        $s_number=$_POST['s_number'];
        $folder="customer/customer_image/";
        $image=$_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
        $s_gender=$_POST['s_gender'];
        $s_house=$_POST['s_house'];
        $s_city=$_POST['s_city'];
        $s_state=$_POST['s_state'];
        $s_pincode=$_POST['s_pincode'];
       
       move_uploaded_file($image_tmp,"customer/customer_image/$image");
       
       $query= "INSERT INTO sign_up (s_first_name,s_last_name,s_email,s_password,s_age,s_number,s_image,s_gender,s_house,s_city,s_state,s_pincode) VALUES('$s_first_name','$s_last_name','$s_email','$s_password','$s_age','$s_number','$image','$s_gender','$s_house','$s_city','$s_state','$s_pincode') ";
       $result=mysqli_query($con,$query);
       if(!$result){
            die('Query Failed'.mysqli_error($con));
           
       }
      if($result)
       {
        echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
          
       
       
       
   }
   }
    ?>