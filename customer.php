<?php 

include '../php/dbconnect.php';

//php form validation



      session_start();


//code checks if the form value is exisiting

$name = isset($_POST['name1']) ? $_POST['name1'] : '';
echo $name;
   $email = isset($_POST['email']) ? $_POST['email'] : '';
   echo $email;
   $password = isset($_POST['password']) ? $_POST['password'] : '';
   $country = isset($_POST['country']) ? $_POST['country'] : '';
   $city = isset($_POST['city']) ? $_POST['city'] : '';
   $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
   $address = isset($_POST['address']) ? $_POST['address'] : '';
   $ip=$_SERVER['REMOTE_ADDR'];
   $passwords=md5($password);
   $image =  $_FILES['pic']['name'];
   //code inputs the form value in the database

  $sql = "INSERT INTO `customer` (  `customer_ip`, `customer_name`, `customer_email`,`customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `customer_address`) VALUES ('$ip', '$name','$email','$passwords','$country', '$city', '$contact', '$image', '$address')";
  echo "sent";
			if(!$result = $conn->query($sql)){
				die('There was an error running the query [' . $conn->error . ']');
								header('location: ../php/register.php');
			}
			else
			{
				header('location: ../php/login.php');
			}

    

  

  ?>
  