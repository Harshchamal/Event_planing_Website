
<?php
session_start();
include("config.php");
include("Customerfunctions.php");


$officer_form = querydetails($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    
   
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $package = mysqli_real_escape_string($conn, $_POST['package']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $cardnumber = mysqli_real_escape_string($conn, $_POST['cardnumber']);
    $expirydate= mysqli_real_escape_string($conn, $_POST['expirydate']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);
   

    $officer_form = "INSERT INTO officer_form (id, name, contactnumber,package, price ,cardnumber, expirydate, cvv) 
    VALUES ('$id', '$name', '$contactnumber' ,'$package','$price', '$cardnumber', '$expirydate', '$cvv' )";
    
    if (mysqli_query($conn, $officer_form)) {
        echo '<script>alert("Query sent successfully!");</script>';

        header("Location: book.php");
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
    <link rel="stylesheet" href="book.css"/>
</head>
<body>

    <div class="hero">

      
    <nav> <img src="assests/logo.png" class="logo">
    
    <ul>
    <li> <a href="index.html">Home</a></li>
        <li> <a href="services.html">Service</a></li>
        <li> <a href="Packages.html">Packages</a></li>
        <li> <a href="vendors.html">Vendors</a></li>
        <li> <a href="aboutus.html">About Us</a></li>
        <li> <a href="reviews.html">Testimonials</a></li>
        <li> <a href="newc.php">Contact</a></li>
    </ul>
    </nav>
    


     
     <h1>Customer Inquiries</h1>

    </div>

  
         
    <section class="our-story">
        <div class="box">
            <h3>Booking Details</h3>
            <form class="forms" method="post" id="queryForm">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Your Name">
                </div>

    
                <div class="form-group">
                    <label for="contactnumber">Contact Number:</label>
                    <input type="tel" id="contactnumber" name="contactnumber" required placeholder="Your Contact Number">
                </div>

                <div class="form-group">
               
    <label for="package" >Select Package:</label>
    <select id="package"name="package" onchange="updatePrice()">
      <option value="bronze">Bronze</option>
      <option value="silver">Silver</option>
      <option value="gold">Gold</option>
      <option value="platinum">Platinum</option>
    </select>

    <label for="price" >Price:</label>
    <p id="price" >150000</p>
  </div>


                <h3>Payment Details</h3>
                <div class="form-group">
                <label for="cardnumber">Card Number</label>
                <input type="text" id="cardnumber" name="cardnumber" placeholder="**** **** **** ****" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="expirydate">Expiry Date</label>
                <input type="text" id="expirydate" name="expirydate" placeholder="MM/YY" maxlength="5" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="***" maxlength="3" required>
            </div>
            
                


    
                <button type="submit" class="submit-button" name="sendq" ondblclick="submission()">Pay</button>
                <button type="reset" class="submit-button" ondblclick="submission()">Clear Details</button>
            </form>
        </div>
    </section>

   
          <div class="contact1">
                <h3>More Details Please Contact Our Team</h3>
                <a href="#" class="btn">Contact Us</a>
            </div>
   


    <script src="JavaScript/scriptinq.js"></script>
    <script src="JavaScript/price.js"></script>


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