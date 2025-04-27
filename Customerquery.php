<?php
session_start();
include("config.php");
include("farmerfunctions.php");

$farmer_data = check_login($conn);
$queryData = querydetails($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    
    if (isset($_POST['update'])) {
        $f_id = $farmer_data['f_id'];
        $farmer_name = $_POST['farmername'];
        $farmer_email = $_POST['farmeremail'];
        $farmer_pass= $_POST['password'];
        $farmer_cpass = $_POST['cpassword'];
        $farmer_phone = $_POST['farmerphone'];
        $farmer_address = $_POST['farmeraddress'];
        $farmer_province = $_POST['farmerprovince'];
        $farmer_gndivision = $_POST['farmergndivision'];
        $farmer_crops = $_POST['crops'];



$query ="update user_form set f_id= $f_id, farmername= '$farmer_name', farmeremail='$farmer_email', password='$farmer_pass', cpassword='$farmer_cpass', farmerphone='$farmer_phone', farmeraddress='$farmer_address', farmerprovince='$farmer_province', farmergndivision='$farmer_gndivision',crops='$farmer_crops'
where f_id= $f_id";


        
        if (mysqli_query($conn, $query)) {
            echo '<script>alert("Details updated successfully!");</script>';
         
            header("Location: FarmerInterface.php");
            die;
        } else {
            echo '<script>alert("Error updating profile. Please try again later.");</script>';
        } 
}

elseif (isset($_POST['sendq'])) {
    $f_id = $farmer_data['f_id'];
    $farmer_name = $farmer_data['farmername'];
    $farmer_email = $farmer_data['farmeremail'];
    $farmer_phone = $farmer_data['farmerphone'];
    $farmer_province = $farmer_data['farmerprovince'];
    $farmer_gndivision = $farmer_data['farmergndivision'];
    $farmer_crops = $farmer_data['crops'];
    $queryinfo = $_POST['queryinfo'];
    $service = $_POST['service'];

    $queryinfo = mysqli_real_escape_string($conn, $_POST['queryinfo']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);

    $query = "INSERT INTO query (f_id, farmername, farmeremail, farmerphone, farmerprovince, farmergndivision, crops, queryinfo, service) 
    VALUES ('$f_id', '$farmer_name', '$farmer_email', '$farmer_phone', '$farmer_province', '$farmer_gndivision', '$farmer_crops', '$queryinfo', '$service')";
    
    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Query sent successfully!");</script>';

        header("Location: Farmerquery.php");
        die;
    } else {
        echo '<script>alert("Error sending query. Please try again later.");</script>';
    }
}



}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>farmer Interface</title>
    <link rel="stylesheet" href="css/farmerinterfacequerynew.css">
</head>
<body>

 
<nav>
        <img src="assests/logo.png" alt="logo">
        <ul>

        <a href="farmer_page.php" class="link-button-nav">Farmer Home</a>
        
         </ul>
    </nav>





    <section class="our-story">
        <div class="box">
            <h3>Send a query</h3>
            <form class="forms" method="post" id="queryForm">
            <div class="form-group">
                    <label for="service">Select a service</label>
                    <select id="service" required name="service">
                        <option value="Technical Assistance">Technical Assistance</option>
                        <option value="Training and Workshops">Training and Workshops</option>
                        <option value="Financial Support">Financial Support</option>
                        <option value="Soil Testing and Analysis">Soil Testing and Analysis</option>
                        <option value="Crop Rotation Plans">Crop Rotation Plans</option>
                        <option value="Pest Management Strategies">Pest Management Strategies</option>
                        <option value="Organic Certification">Organic Certification</option>
                        <option value="Water Conservation Guidance">Water Conservation Guidance</option>
                        <option value="Conservation Planning">Conservation Planning</option>
                        <option value="Climate-Resilient Farming">Climate-Resilient Farming</option>
                        <option value="Market Access">Market Access</option>
                        <option value="Waste Management">Waste Management</option>
                    </select>
                </div>
                <input type="hidden" name="sendq" value="1">
                
                <div class="form-group">
                    <label for="query">Query: </label>
                    <textarea id="query" name="queryinfo" rows="35" required placeholder="Enter query details here"></textarea>
                </div>

                <button type="submit" class="submit-button" name="sendq"  ondblclick="submission()">Send Query</button>
                <button type="reset" class="submit-button" ondblclick="submission()">Clear Query</button>
            </form>
            
            </form>
        </div>




    </section>

   


<script src="JavaScript/script.js"></script>


</body>
</html>
