<?php

//
// Requires
// --------
// Make sure working directory is root so paths point properly.
// Since php files should be placed in either root or root/php, 
// this checks if working directory is /php and if so moves up
//
if(basename(getcwd()) == "php") chdir("../");

//
// Classes
//
require_once("php/users.class.php");

//
// Utilities
//
require_once("php/connect.php");
require_once("php/postcall.php");

/*
 * NAME 	: User
 *
 * PURPOSE 	: The user class contains several functions used
 *			  to log in/authenticate
 */
class Content{
	private $db;
	private $users;
	
	function __construct(){
		$this->db = connect();
		$this->users = new Users();
	}

	function save($content){
		$success = false;
		if($this->users->isLogged()){
			foreach($content as $key => $value){
				$update = $this->db->prepare("UPDATE Content SET text = ? WHERE id = ?");
		
				if(!$update) throw new Exception($this->db->error);	
				if(!$update->bind_param("ss",$value,$key)) throw new Exception($this->db->error);
				if(!$update->execute()) throw new Exception($this->db->error);				
			}
			$success = true;
		}
		return $success;
	}
	
	function getAll(){
		$content = array();
		if(!$result = $this->db->query("SELECT id,text FROM Content")) throw new Exception($this->db->error);
		while($row = $result->fetch_assoc()){
			$content[$row["id"]] = $row["text"];
		}
		return $content;
	}
}

?>