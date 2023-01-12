<!DOCTYPE html> 
<html>
    <head>  
        <meta charset="utf-8">
	    <title>CMP306 - Dynamic Web Development 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
	   	<!-- The site uses Bootstrap v5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		
    </head>

    <body>
  	    <!-- overall container for page -->
        <div class="container">

        <!-- header row -->
        <div id="header" class="card text-center">
            <img src="../image/title01.jpg" />
            <div class="card-img-overlay">
                <h1 class="card-title">CMP306 Dynamic Web Development 2</h1>
                <h2 class="card-title">Cameron Harrison - 1700523</h2>
            </div>
        </div><!-- Header  row -->

        <br/><!--simple way to get some space -->     

  	    <?php 
  	    	$url = "../model/contacts.xml" ;
  		    $xmltxt = file_get_contents($url); 
		    $xml = simplexml_load_string($xmltxt)  ; 
		    // var_dump($xml) ;
		    
            echo '<div class="row">' ;
            $num = sizeof($xml->contact) ;
            for ($i=0; $i<$num; $i++) {
            	echo '<div class="col-sm-4">' ;
		   		echo '<div class="card">' ;
		   		echo '<div class="card-header">'.$xml->contact[$i] -> name.'</div>' ;
				echo '<div class="card-body">' ;
	            echo $xml -> contact[$i] -> phones -> phone[0] ;
	            echo '</div>' ;
	            echo '</div>' ;
	            echo '</div>' ;
			}
            echo '</div>' ;
	    ?>
	    </div>

    </body>
</html>
