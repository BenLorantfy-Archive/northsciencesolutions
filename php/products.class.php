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
class Products{
	private $db;
	private $users;
	
	function __construct(){
		$this->db = connect();
		$this->users = new Users();
	}

	function getProducts(){
		$markup = "";

				
		if(!$categoryResult = $this->db->query("SELECT id,title FROM Category")) throw new Exception($this->db->error);
		while($categoryRow = $categoryResult->fetch_assoc()){
			$categoryId = $categoryRow["id"];
			$categoryTitle = $categoryRow["title"];
			
			$markup .= "<div class='modal fade modal-category-$categoryId' data-category-id = '$categoryId' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
				<div class='modal-dialog modal-lg'>
					<div class='modal-content'>
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<h4 class='modal-title'>$categoryTitle</h4>
						</div>
						<div class='container col-md-12 category-modal'>";
								
								if(!$productResult = $this->db->query("SELECT id,title,description FROM Product WHERE categoryId = $categoryId")) throw new Exception($this->db->error);
								
								while($productRow = $productResult->fetch_assoc()){
									$productId = $productRow["id"];
									$productTitle = $productRow["title"];
									$productDescription = $productRow["description"];
									
									$path = glob("img/products/" . $productId . ".*")[0];
												
									$markup .= "<div class='row product-row' data-product-id = '$productId'>
										<div class='col-md-4'>
											<img src='$path' class='product-image img-thumbnail img-responsive center-block'/>
										</div>
										<div class='col-md-7 center-block'>
											<p>
												<h4 class = 'editable productTitle'>$productTitle</h4>
												<div class = 'editable productDescription'>$productDescription</div>
												<button type='button' class='btn btn-default adminTool deleteProduct'>Delete</button>
											</p>
										</div>
									</div>";								
								}
								
			$markup .= "</div>
						<div class='modal-footer'>
							<button type='button' class='btn btn-default adminTool addNewProduct'>Add</button>
							<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						</div>
					</div>
				</div>
			</div>";
				
				
		}
		return $markup;
	}
	
	function addProduct($categoryId){
		if($this->users->isLogged()){
			$title = "My New Product";
			$description = "My product description";
			$insert = $this->db->prepare("INSERT INTO Product (title,description,categoryId) VALUES (?,?,?)");
	
			if(!$insert) throw new Exception($this->db->error);	
			if(!$insert->bind_param("ssi",$title,$description,$categoryId)) throw new Exception($this->db->error);
			if(!$insert->execute()) throw new Exception($this->db->error);
			
			$productId = $this->db->insert_id;
			$path = "img/products/" . $productId . ".jpg";
			copy("img/plus.jpg",$path);
			
			return "<div class='row product-row' data-product-id = '$productId'>
				<div class='col-md-4'>
					<img src='$path' class='product-image img-thumbnail img-responsive center-block'/>
				</div>
				<div class='col-md-7 center-block'>
					<p>
						<h4 class = 'editable productTitle' contenteditable = 'true'>$title</h4>
						<div class = 'editable productDescription' contenteditable = 'true'>$description</div>
						<button type='button' class='btn btn-default adminTool deleteProduct' style = 'display:inline;'>Delete</button>
					</p>
				</div>
			</div>";				
		}else{
			return false;
		}
	}
	
	function changeImage(){
		if($this->users->isLogged()){
			$fileName = $_FILES["productImage"]["name"];
			$tempPath = $_FILES["productImage"]["tmp_name"];
			$extension = pathinfo($fileName, PATHINFO_EXTENSION);
			$id = $_POST["id"];
			$newName = $id . "." . $extension;
			
			if(is_uploaded_file($tempPath)){ 
				// delete old image
				unlink(glob("img/products/" . $id . ".*")[0]);										
				$newPath = "img/products/" . $newName;
				move_uploaded_file($tempPath, $newPath);
				return $newName;
			}else{
				throw new Exception("Failed to upload");
			}
		}else{
			return false;
		}
	}
	
	function save($products){
		$success = false;
		if($this->users->isLogged()){
			foreach($products as $value){
				$title = $value->title;
				$description = $value->description;
				$id = $value->id;
				$update = $this->db->prepare("UPDATE Product SET description = ?, title = ? WHERE id = ?");
		
				if(!$update) throw new Exception($this->db->error);	
				if(!$update->bind_param("ssi",$description,$title,$id)) throw new Exception($this->db->error);
				if(!$update->execute()) throw new Exception($this->db->error);				
			}
			$success = true;
		}
		return $success;
	}
		
	function getCategories(){
		$markup = "";
				
		if(!$result = $this->db->query("SELECT id,title FROM Category")) throw new Exception($this->db->error);
		while($row = $result->fetch_assoc()){
			$id = $row["id"];
			$title = $row["title"];
			$path = glob("img/categories/" . $id . ".*")[0];
			
			$markup .= "<div class='col-md-3 categoryImage'>
					<a href='' data-toggle='modal' data-target='.modal-category-$id'><img src='$path' class='img-responsive img-thumbnail center-block category-photo'/></a>
				</div>";
		}
		return $markup;
	}
	
	function delete($id){
		if($this->users->isLogged()){
			$id = (int)$id;
			if(!$this->db->query("DELETE FROM Product WHERE id = " . (int)$id)) throw new Exception($this->db->error);
			unlink(glob("img/products/" . $id . ".*")[0]);
			return true;
		}else{
			return false;
		}
	}
	
}

?>