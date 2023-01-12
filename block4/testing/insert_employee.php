<?php
	//  PHP to delete the specific employees 
	//  URL of the web service
	include("location.php") ;
	$url = $location ;

	$title = $_POST['title'];
	$desc = $_POST['description'];
	$image = $_POST['imagefile'];
	$image = "../img/".$image;
	$link = $_POST['link'];
	
	//  create data in XML format
	$data = '<article>' ;
	$data = $data.'<title>'.$title.'</title>' ;
	$data = $data.'<description>'.$desc.'</description>' ;
	$data = $data.'<imagefile>'.$image.'</imagefile>' ;
	$data = $data.'<link>'.$link.'</link>'; 
	$data = $data.'</article>' ;
	echo $data ;
	echo "<br/><br>" ;
	
	//  set up the curl
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                                                                  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
    	'Content-Type: text/xml',                                                                                
    	'Content-Length: ' . strlen($data))                                                                       
	);                 
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
