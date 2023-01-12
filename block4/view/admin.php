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
            <a href="index.php" class="btn btn-primary" > User page </a>
        </div>
    </div>

    <!-- overall container for page -->
    <div class="container">
        <div class="row">
        
            <!-- Display All -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Display All Articles</div>
                    <div class="card-body">
                        <a href="../testing/get_all_employees.php" class="btn btn-secondary">Display all articles</a>
                    </div>
                </div>
            </div>
        
            <!-- Display An Employee -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Display An Article</div>
                    <div class="card-body">
                        <form role="form" method="GET" action="../testing/get_employee.php">
                            <div class="form-group">
                                <label>ID:</label>
                                <input type="text" class="form-control" name="nid">
                            </div>
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </form>
                    </div><!-- card body -->
                </div><!-- card -->
            </div> <!-- column -->
        
            <!-- Insert Data for Employee -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Create An Article</div>
                    <div class="card-body">
                        <a href="create.php" class="btn btn-secondary">Create article</a>
                    </div><!-- card body -->
                </div><!-- card -->
            </div> <!-- column -->
        
        
            <!-- Update Data for Employee -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Update An Article</div>
                    <div class="card-body">
                        <form role="form" method="GET" action="../view/update.php">
                            <div class="form-group mb-2">
                                <label for="nid">ID:</label>
                                <input type="text" class="form-control" name="nid">
                            </div>
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </form>
                    </div><!-- card body -->
                </div><!-- card -->
            </div> <!-- column -->
        
            <!-- Delete An Employee -->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Delete An Article</div>
                    <div class="card-body">
                        <form role="form" method="GET" action="../testing/delete_employee.php">
                        <div class="form-group mb-2">
                                <label for="nid">ID:</label>
                                <input type="text" class="form-control" name="nid">
                            </div>
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </form>
                    </div><!-- card body -->
                </div><!-- card -->
            </div> <!-- column -->
            
        </div><!-- row -->             
    </div><!-- container -->
</body>

</body>