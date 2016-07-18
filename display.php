<?php
session_start();?>
<html>
<head>

<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function initialize()
{
	
	document.getElementById("ss").textContent="";
}
function errormsg(msg)
{
	
	switch(msg)
	{
		case 1:document.getElementById("ss").textContent="Enter  Number given below  in the box...";
				break;
		case 2:document.getElementById("ss").textContent="Enter correct number..";
				break;
	}
}	
function fun()
{

	initialize();
var randomno=document.getElementById("rno");
if(randomno.value=="")
{
     errormsg(1); 
	 rno.focus();
	return false;
}	
else if(randomno.value!=="375"){
	 errormsg(2); 
	 rno.focus();
	return false;
	
}	
else
{
	return true;
}
}
</script>
</head>

<body>
<?php

$_SESSION['name'] =$_POST['name'];

$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['text']=$_POST['text'];
?>
<div class="formdiv">
<div class="insidediv">
	<h2>Check and confirm your details</h2>
	
	<form class="form"  action="insert.php" method="post">
		
		
		<p class="name">
		     <br />
			
			<label for="name">Name:</label>
			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<span name="name"><?php echo $_SESSION['name']; ?></span>
		</p>
		
		<p class="email">
		    <br />
			
			<label for="email">Email:</label>
			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<span name="email"><?php echo $_SESSION['email']; ?></span>
		</p>
		
		<p class="phone">
		<br />
			
			<label for="phone">Phone:</label>
			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<span name="phone"><?php echo $_SESSION['phone']; ?></span>
		</p>		
	
		<p class="text">
		<br />
		<label for="phone">Your Message:</label>
			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<span name="text"><?php echo $_SESSION['text']; ?></span>
		</p>
		
		
		 
		 
		 <p >
		<span class="c" id="ss"></span><br />
		    <label for="rno">Please type this number in the box "375"</label>
			<input type="text" name="rno" id="rno" placeholder="Enter numer here.." />
		</p>
		
		<p >
		   
			<input type="submit"  class="submit" value="confirm" onclick="return fun();" />
		</p>
		
	</form>
</div>	
</div>

</body>
</html>