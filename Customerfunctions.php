


<?php

function check_login($conn)
{

	if(isset($_SESSION['f_id']))
	{

		$f_id = $_SESSION['f_id'];
		
		$query = "select * from user_form where f_id = '$f_id' limit 1";
		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$farmer_data = mysqli_fetch_assoc($result);
			return $farmer_data;
		}


	}
	
	header("Location: OfficerLogin.php");
	die;
}

function querydetails($conn)
{
    $query = "SELECT * FROM query";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = array();

      
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }

  
    return null;
}

	


function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}