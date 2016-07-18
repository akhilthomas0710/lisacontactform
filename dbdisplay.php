<?php
   //session_start();
    include_once 'cls.php';
	
    $user = new User();
    //$user->get_session();
    $id = $_SESSION["id"];
   
    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>


<html>
    <head>
<link rel="stylesheet" href="style.css" type="text/css" />

<style>
table{
    border: 1px solid black;
}
</style>
</head>
<body>

<div class="formdiv">
<div class="insidediv">
            
                <a href="dbdisplay.php?q=logout">LOGOUT</a>
            <br/>
			
            <div >
    			<br/>
    			<h1>
                  your query: </h1>	
				 
    			<table style="width:50%">
  
               <tr>
               <td height="50"><?php $user->get_messgae($id); ?></td>
    
                 </tr>
  
               </table>
			   <h1>
                  reply for your query: </h1>	
				 
    			<table style="width:50%">
  
               <tr>
               <td height="50"><?php $user->get_reply($id); ?></td>
    
                 </tr>
  
               </table>
            </div>
           
        </div>
		</div>
    </body>
</html>
