<?php

/*
 * 	FUNCTION 	: handleAJAX
 *
 * 	DESCRIPTION : This function is used to allow methods to be called with AJAX 
 *				  in the same way as regular synchronous server-side calls  
 *				  Calls method specified in the post variable named "call" and echos
 *				  return data as json
 *
 *	PARAMETERS  : string class : the class method belongs to
 *
 * 	RETURNS 	: nothing
 */		
function handleAJAX(){
	$class  = $_POST["class"];	// class method belongs to
	$method = $_POST["method"];	// method to call
	$post 	= $_POST;			// Don't modify the super global, instead, copy it
	
	if(method_exists($class,$method)){
		//
		// Since request was made using AJAX, session has not been started, so start it
		//
		session_start();
		
		unset($post["class"]);
		unset($post["method"]);

		//
		// Decodes parameters
		//
		array_walk($post, function(&$value, &$key) {
		    $value = json_decode($value);
		});
		
		try{
			$returnData = call_user_func_array(array(new $class(),$method), $post);						
		}catch(Exception $e){
			$returnData = array("error" => true,"message" => $e->getMessage());
		}	
	}else{
		$returnData = array("error" => true, "message" => "Specified method doesn't exist within specified class");
	}	
	
	echo json_encode($returnData, JSON_HEX_QUOT | JSON_HEX_TAG);
}

?>