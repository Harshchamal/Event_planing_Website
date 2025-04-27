<?php
session_start();
include("config.php");
include("Customerfunctions.php");


$queryData = querydetails($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    
   
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $queryinfo = mysqli_real_escape_string($conn, $_POST['queryinfo']);

    $contact = "INSERT INTO contact (id, name, email, queryinfo) 
    VALUES ('$id', '$name',  '$email', '$queryinfo')";
    
    if (mysqli_query($conn, $contact)) {
        echo '<script>alert("Query sent successfully!");</script>';

        header("Location: newc.php");
        die;
    } else {
        echo '<script>alert("Error sending query. Please try again later.");</script>';
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="newc.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>

    <div class="hero">

      
        <nav> <img src="assests/logo.png" class="logo">
    
    <ul>
        <li> <a href="index.html">Home</a></li>
        <li> <a href="services.html">Service</a></li>
        <li> <a href="Packages.html">Packages</a></li>
        <li> <a href="vendors.html">Vendors</a></li>
        <li> <a href="#">About Us</a></li>
        <li> <a href="reviews.html">Testimonials</a></li>
        <li> <a href="contact.html">Contact</a></li>
    </ul>
    </nav>
    

    </div>

  
    <div class="container2">
        <div class="image-container">
            <img src="assests/conback.jpg" alt="Description of the image">
        </div>
        <div class="text-container">
            <h1>THE PROCESS AND YOUR COORDINATORS</h1>
            <h2>It’s simple! We’ll plot everything, including timelines, etiquette’s and all your other requirements. Making end-to-end calls to tie up loose ends closer to the wedding day. 

                ‘Akushla’ will be directly involved in the initial planning process to ensure all checklists, designs and other important details are established. Thereafter the couple will be directed to a dedicated wedding planner with thorough supervision of ‘Akushla’, who will ensure the wedding planning process runs smoothly</h2>
            
        </div>
    </div>



 <section class="contact">
    <div class="content">
        <h1>Ready to start planning?</h1>
        <p>Consultations are free! I'm happy to discuss the details around your event and see how we can be of service!</p>
    </div>

    <div class="container1">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Event Elite PVT(Ltd) <br> </p>
                    <p>Kandy <br> </p>
                    <p>Sri Lanka <br> </p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>081 - 237 60 87</p>
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>Eventelite@mail.lk</p>
                </div>
            </div>
        </div>

        <div class="contactform">
<h2>Connect With Us</h2>
<form class="forms" method="post" id="queryForm">
                <div class="inputbox">
                    <input type="text" id="name" name="name" required placeholder="">
                    <span>Full Name</span>
                </div>
    
                <div class="inputbox">
                    <input type="text" id="email" name="email" required placeholder="">
                    <span>Email</span>
                </div>
    
                <div class="inputbox">
                    <textarea id="query" name="queryinfo" required placeholder=""></textarea>
                    <span>Type Your Message</span>
                </div>
                <button type="submit" class="submit-button" name="sendq" ondblclick="submission()">Submit</button>
</div>

</form>
        </div>
    
    
  
</section>
      

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
            <h4>LINKS</h4>
            <ul>
                <li> <a href="services.html">Service</a></li>
        <li> <a href="Packages.html">Packages</a></li>
        <li> <a href="vendors.html">Vendors</a></li>
        <li> <a href="aboutus.html">About Us</a></li>
        <li> <a href="reviews.html">Testimonials</a></li>
        <li> <a href="newc.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-col1">
        <h4>Contact Details</h4>
        <ul>
            <li><a href="#">Address</a></li>
            <p>Elite Events, Kandy, Sri Lanka</p>
            <li><a href="#">Contact Number</a></li>
            <p>081 - 237 60 87</p>
            <li><a href="#">Email</a></li>
            <p>Eventelite@mail.lk</p>
 
        </ul>
    </div>

   
        
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
          
            </div>
        </div>

        <div class="footer-col">
            <img src="assests/logo.png" alt="">
            </div>
        </div>

    </div>
    
</div>
<h1>ALL COPYRIGHTS RESERVED BY ELITE EVENTS - © 2024</h1>
<h2>WEBSITE DESIGNED & DEVELOPED BY FIVE BUGS</h2>
   </footer>



</body>
</html>