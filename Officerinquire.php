
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
    <title>Officer Interface</title>
    <link rel="stylesheet" href="css/officerinquirenew.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 
<nav>
        <img src="assests/logo.png" alt="logo">
        <ul>
        <a href="officer_page.php" class="link-button-nav">Officer Home</a>
         </ul>
    </nav>


    <section class="about">
         
    
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Farmer Name</th>
      <th scope="col">Farmer Email</th>
      <th scope="col">Farmer Phone</th>
      <th scope="col">Farmer Province</th>
      <th scope="col">Farmer Grama Niladari Division</th>
      <th scope="col">Crops</th>
      <th scope="col">queries</th>
      <th scope="col">service</th>
    </tr>
  </thead>
  <tbody>

  <?php


$sql="Select * from query";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $farmer_name = $row['farmername'];
        $farmer_email = $row['farmeremail'];
        $farmer_phone = $row['farmerphone'];
        $farmer_province = $row['farmerprovince'];
        $farmer_gndivision = $row['farmergndivision'];
        $farmer_crops = $row['crops'];
        $queryinfo = $row['queryinfo'];
        $service = $row['service'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$farmer_name.'</td>
        <td>'.$farmer_email.'</td>
        <td>'.$farmer_phone.'</td>
        <td>'.$farmer_province.'</td>
        <td>'.$farmer_gndivision.'</td>
        <td>'.$farmer_crops.'</td>
        <td>'.$queryinfo.'</td>
        <td>'.$service.'</td>

      </tr>';
    }
}

?>


</table>
    </section>

    


<script src="JavaScript/script.js"></script>


</body>
</html>
