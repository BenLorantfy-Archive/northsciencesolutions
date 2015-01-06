<?php
/* 
 * 	FILE 			: admin.class.php
 * 	PROJECT 		: North Science Solutions
 * 	PROGRAMMER 		: Ben Lorantfy
 * 	FIRST VERSION 	: 2014-12-22
 * 	DESCRIPTION 	: Contains the admin class.  
 */

//
// Requires
// --------
// Make sure working directory is root so paths point properly.
// Since php files should be placed in either root or root/php, 
// this checks if working directory is /php and if so moves up
//
if(basename(getcwd()) == "php") chdir("../");
require_once("php/connect.php");
require_once("php/ajax.php");

//
// Handle AJAX
// -----------
//
handleAJAX();	

/*
 * NAME 	: Admin
 *
 * PURPOSE 	: The admin class contains several functions used
 *			  to log in/authenticate
 */
class Admin{
	private $db;
	
	function __construct(){
		$this->db = connect();
	}

	/*
	 * 	FUNCTION 	: login
	 *
	 * 	DESCRIPTION : This function calculates tax on a retail purchase in Ontario.
	 *
	 * 	PARAMETERS 	: string name     : username
	 *				 string password : user password
	 *
	 * 	RETURNS 	: true on success, false on failure
	 */	
	function login($name="",$password=""){		
		$success = false;
		
		//
		// Using prepared statements is more secure than esacping dangerous charachters
		//
		$query = $this->db->prepare("SELECT password FROM users WHERE name = ? LIMIT 1");
		$query->bind_param("s",$name);
		if($query->execute()){
			$query->store_result();
			
			if($query->num_rows == 1){
				$query->bind_result($hashedPassword);
				$query->fetch();
				if(password_verify($password,$hashedPassword)){
					$_SESSION["name"] = $name;
					$_SESSION["password"] = $password;
					$success = true;
				}
			}			
		}else{
			throw new Exception("Query failed: " . $this->db->error);
		}
		return $success;
	}
	
	/*
	 * 	FUNCTION 	: isLogged
	 *
	 * 	DESCRIPTION : This function tests if user is currently logged in
	 *
	 * 	PARAMETERS 	: none
	 *
	 * 	RETURNS 	: true if user is logged in, false if not
	 */	
	function isLogged(){		
		$logged = false;		
		if(isset($_SESSION["name"]) && isset($_SESSION["password"])){	
				
			//
			// Using prepared is more secure than escaping dangerous charachters
			//
			$query = $this->db->prepare("SELECT password FROM users WHERE name = ? LIMIT 1");
			$query->bind_param("s",$_SESSION["name"]);
			if($query->execute()){
				$query->store_result();
				
				if($query->num_rows == 1){
					$query->bind_result($hashedPassword);
					$query->fetch();
					if(password_verify($_SESSION["password"],$hashedPassword)){
						$logged = true;
					}
				}				
			}else{
				throw new Exception("Query failed: " . $this->db->error);
			}
		}
		
		return $logged;
	}
	
	function logout(){
		session_destroy();
	}
}

?>