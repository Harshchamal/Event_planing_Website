
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
    <link rel="stylesheet" href="viewinqury.css"/>
</head>
<body>

    <div class="hero">

      
    <nav> <img src="assests/logo.png" class="logo">
    
    <ul>
        <li> <a href="admin.html">Admin Home</a></li>

    </ul>
    </nav>
    


     
     <h1>Customer Inquiries</h1>

    </div>

  
         
    <section class="about">
         
    
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Budget</th>
      <th scope="col">Query Info</th>
    </tr>
  </thead>
  <tbody>

  <?php





$sql="Select * from query";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $address = $row['address'];
        $phonenumber = $row['phonenumber'];
        $email = $row['email'];
        $budget = $row['budget'];
        $queryinfo = $row['queryinfo'];
 
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$phonenumber.'</td>
        <td>'.$email.'</td>
        <td>'.$budget.'</td>
        <td>'.$queryinfo.'</td>
 
        </tr>';
    }
}

?>


</table>
    </section>
   


    <script src="JavaScript/scriptinq.js"></script>


 




</body>
</html>