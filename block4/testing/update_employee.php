<?php
	//  PHP to delete the specific employees 
	//  URL of the web service
	$id = $_POST['nid'] ;
	include("location.php") ;
	$url = $location.'/'.$id ;
	
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$image = $_POST['imagefile'];
	$image = "../img/".$image; //add prefix to image file name
	$link = $_POST['link'];

	//  create data in XML format
	$data = '<article>' ;
	$data = $data.'<nid>'.$id.'</nid>';
	$data = $data.'<title>'.$title.'</title>' ;
	$data = $data.'<description>'.$desc.'</description>' ;
	$data = $data.'<imagefile>'.$image.'</imagefile>' ;
	$data = $data.'<link>'.$link.'</link>' ;
	$data = $data.'</article>' ;
	
	//  set up the Curl
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");                                                                     
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

  	
  	
