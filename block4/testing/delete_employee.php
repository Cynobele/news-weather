<?php
	//  PHP to delete the specific employees 
	//  URL of the web service
	$id = $_GET["nid"] ;
	include("location.php") ;
	$url = $location.'/'.$id ;
	
	//  set up the CURL
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");                                                                                                                                  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                                                                                                         
  	$resp = curl_exec($curl) ;
  	
  	if (!$resp) 
  	{
  		die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); 
  	}
  	else 
  	{
  		echo $resp ;
  	}
  	curl_close($curl) ;	
?>
