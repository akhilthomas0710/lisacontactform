<?php
	
	include_once 'cls.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($name, $password);
	    if ($login) {
	        // login Success
			//echo 'correct username or password';
	       header("location:dbdisplay.php");
	    } else {
	        // login Failed
	        echo 'Wrong name or phonenumber';
	    }
	}
?>


<html>
	
	<head>
<link rel="stylesheet" href="style.css" type="text/css" />

		
		<script language="javascript" type="text/javascript"> 
            
            function submitlogin() {
                var form = document.login;
				if(form.name.value == ""){
					alert( "Enter name." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter correct phone." );
					return false;
				}	 
			}
		</script>
	</head>

	<body>
		<div class="formdiv">
         <div class="insidediv">
			<h1>Login Here</h1>
			<br/>login with your name and phone number.<br>
			<form action="" method="post" name="login">
				<table>
					<tr>
						<th>Name :</th>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<th>phone number:</th>
						<td><input type="text" name="password" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" class="submit" name="submit" value="Login" onclick="return(submitlogin());"></td>
					</tr>
					
					
				</table>
			</form>
		</div>
		</div>
	</body>
</html>
					
				</table>
			</form>
		</div>
	</body>
</html>