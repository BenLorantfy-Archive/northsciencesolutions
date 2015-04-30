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

				
		if(!$categoryResult = $this->db->query("SELECT id,extension,title FROM Categories")) throw new Exception($this->db->error);
		while($categoryRow = $categoryResult->fetch_assoc()){
			$categoryId = $categoryRow["id"];
			$categoryExt = $categoryRow["extension"];
			$categoryTitle = $categoryRow["title"];
			
			$markup .= "<div class='modal fade modal-category-$categoryId' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
				<div class='modal-dialog modal-lg'>
					<div class='modal-content'>
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<h4 class='modal-title'>$categoryTitle</h4>
						</div>
						<div class='container col-md-12 category-modal'>";
								
								if(!$productResult = $this->db->query("SELECT id,extension,title,description FROM Product WHERE categoryId = $categoryId")) throw new Exception($this->db->error);
								
								while($productRow = $productResult->fetch_assoc()){
									$productId = $productRow["id"];
									$productExt = $productRow["extension"];
									$productTitle = $productRow["title"];
									$productDescription = $productRow["description"];
												
									$markup .= "<div class='row product-row' data-product-id = '$productId'>
										<div class='col-md-4'>
											<img src='img/products/$productId.$productExt' class='product-image img-thumbnail img-responsive center-block'/>
										</div>
										<div class='col-md-7 center-block'>
											<p>
												<h4 class = 'editable productTitle'>$productTitle</h4>
												<div class = 'editable productDescription'>$productDescription</div>
											</p>
										</div>
									</div>";								
								}
								
			$markup .= "</div>
						<div class='modal-footer'>
							<button type='button' class='btn btn-default adminTool addNewProduct'>Add New Product</button>
							<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						</div>
					</div>
				</div>
			</div>";
				
				
		}
		return $markup;
	}
	
	function addProduct(){
		if($this->users->isLogged()){
			$extension = "jpg";
			$title = "My New Product";
			$description = "My product description";
			$categoryId = 1;
			$insert = $this->db->prepare("INSERT INTO Product (extension,title,description,categoryId) VALUES (?,?,?,?)");
	
			if(!$insert) throw new Exception($this->db->error);	
			if(!$insert->bind_param("sssi",$extension,$title,$description,$categoryId)) throw new Exception($this->db->error);
			if(!$insert->execute()) throw new Exception($this->db->error);
			
			$productId = $this->db->insert_id;
			
			return "<div class='row product-row' data-product-id = '$productId'>
				<div class='col-md-4'>
					<img src='img/new.jpg' class='product-image img-thumbnail img-responsive center-block'/>
				</div>
				<div class='col-md-7 center-block'>
					<p>
						<h4 class = 'editable productTitle' contenteditable = 'true'>$title</h4>
						<div class = 'editable productDescription' contenteditable = 'true'>$description</div>
					</p>
				</div>
			</div>";				
		}else{
			return false;
		}
	}
	
	function changeImage(){
		
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
				
		if(!$result = $this->db->query("SELECT id,extension,title FROM Categories")) throw new Exception($this->db->error);
		while($row = $result->fetch_assoc()){
			$id = $row["id"];
			$ext = $row["extension"];
			$title = $row["title"];
			
			$markup .= "<div class='col-md-3 categoryImage'>
					<div class = 'adminTool delete' data-category-id = '$id'>Delete</div><a href='' data-toggle='modal' data-target='.modal-category-$id'><img src='img/categories/$id.$ext' class='img-responsive img-thumbnail center-block category-photo'/></a>
				</div>";
		}
		return $markup;
	}
	
}

?>