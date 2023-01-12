<?php
session_start();
?>

<!DOCTYPE html>
<head>  
        <meta charset="utf-8">
	    <title>CMP306 - Dynamic Web Development 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
	   	<!-- The site uses Bootstrap v5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		
</head>
<body>
    <!-- header row -->
    <div id="header" class="card text-center mb-2">
        <div class="card-title">
            <h1 class="card-title">CMP306 Dynamic Web Development 2</h1>
            <h2 class="card-title">Cameron Harrison - 1700523</h2>
            <a href="../view/admin.php" class="btn btn-primary" > Admin page </a>
        </div>
    </div>


<?php
	//  PHP to get the specific employee 
	//  URL of the web service
	$id = $_GET['nid'] ;
	include("location.php") ;
	$url = $location.'/'.$id ;
	
	// set up the curl
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");                                                                                                                                     
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                                                                                                                                                                           
  	$resp = curl_exec($curl) ;
  	
  	//  Output the results
  	if (!$resp) {die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); }
  	curl_close($curl) ;	
  	
	$xslNews = new DOMDocument;
	$articles = simplexml_load_string($resp);
	$xslNews->load('../model/get_article.xsl');

	//create processor for xslt-NEWS
	$processorN = new XSLTProcessor();
	$processorN->importStyleSheet($xslNews);
	$rN = $processorN->transformToXml($articles);
	echo $rN; //output hmtl from xslt file
  	
?>
