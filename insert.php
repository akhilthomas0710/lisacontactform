<?php
session_start();
$name=$_SESSION["name"];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$text=$_SESSION['text'];
//echo $name;
//echo $mail;
  $conn=mysqli_connect("localhost","root","","lisaangel");
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
          }
		
   $sql1="INSERT INTO  users VALUES('','$name','$email','$phone','$text','')" ;
				
				$result = mysqli_query($conn,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		if($result)
				{
				header("location:success.php");
			   }
			else { echo "not inserted:";}	
			
			?>