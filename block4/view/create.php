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
            <a href="admin.php" class="btn btn-primary" > Admin page </a>
        </div>
    </div>

            <!-- Update  Employee -->
            <div class="row">
                <div class="col-sm-4">
            	    <div class="card">
            		    <div class="card-header">Update An Article</div>
            		    <div class="card-body">
					        <form role="form" method="POST" action="../testing/insert_employee.php">
                                <?php
                                    echo '<div class="form-group">' ;
    						        echo '<label>Title :</label>' ;
    						        echo '<input type="text" class="form-control" name="title">' ;
                                    echo '</div>' ;
  							        echo '<div class="form-group">' ;
    						        echo '<label>Description :</label>' ;
    						        echo '<input type="text" class="form-control" name="description" />' ;
                                    echo '</div>' ;
                                    echo '<div class="form-group">' ;
    						        echo '<label>Image:</label>' ;
    						        echo '<input type="text" class="form-control" name="imagefile" />' ;
                                    echo '</div>' ;
                                    echo '<div class="form-group">' ;
    						        echo '<label>Link:</label>' ;
    						        echo '<input type="text" class="form-control" name="link" />' ;
                                    echo '</div>' ;
                                ?>
  						        <button class="btn btn-primary" type="submit">Submit</button>
  					        </form>
					    </div><!-- card body -->
            	    </div><!-- card -->
                </div> <!-- column -->
            </div><!-- row -->
			         
        </div><!-- container -->
    </body>
</html>
   