
<?php
session_start();
include("config.php");
include("officerfunctions.php");


$queryData = querydetails($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="viewbooking.css"/>
</head>
<body>

    <div class="hero">

      
    <nav> <img src="assests/logo.png" class="logo">
    
    <ul>
    <li> <a href="admin.html">Admin Home</a></li>
    </ul>
    </nav>
    


     
     <h1>Booking and Payment Details</h1>

    </div>

  
         
    <section class="about">
         
    
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Package Name</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>

  <?php





$sql="Select * from officer_form";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $Id = $row['Id'];
        $name = $row['name'];
        $contactnumber = $row['contactnumber'];
        $package = $row['package'];
        $price = $row['price'];
  
 
        echo'<tr>
        <th scope="row">'.$Id.'</th>
        <td>'.$name.'</td>
        <td>'.$contactnumber.'</td>
        <td>'.$package.'</td>
        <td>'.$price.'</td>

 
        </tr>';
    }
}

?>


</table>
    </section>
   


    <script src="JavaScript/scriptinq.js"></script>


 




</body>
</html>