<?php 

	session_start();

	class User
	{
		
		public $db;
		public function __construct()
		{
			$this->db = new mysqli("localhost","root","","lisaangel");
		
			if(mysqli_connect_errno()) {
	 
				echo "Error: Could not connect to database.";
	 
			exit;
 
			}
		}

	
		
		
		/*** for login process ***/
		public function check_login($name, $password){
        	
        	//$password = md5($password);
			$sql2="SELECT id from users WHERE  name='$name' and phone='$password'";
			
			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2)or die(mysqli_connect_errno()."Data cannot inserted");
        	$user_data = mysqli_fetch_assoc($result);
        	$count_row = mysqli_num_rows($result);
		     
			 
			 
	        if ($count_row >= 1) {
	            // this login var will use for the session thing
	            $_SESSION["login"] = true; 
	            $_SESSION["id"] = $user_data['id'];
	            return true;
	        }
	        else{
				$_SESSION["id"] = $user_data['id'];
			    return false;
			}
    	}
		
		
		
		/*** for showing the enquery and feedback***/
    	public function get_messgae($id){
    		$sql3="SELECT message FROM users WHERE id = '$id'";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_assoc($result);
	        echo $user_data['message'];
    	}
		public function get_reply($id){
    		$sql3="SELECT reply FROM users WHERE id = '$id'";
	        $result = mysqli_query($this->db,$sql3);
	        $user_data = mysqli_fetch_assoc($result);
	        echo $user_data['reply'];
    	}
		
		public function get_session(){    
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }
		
		
	}
	?>