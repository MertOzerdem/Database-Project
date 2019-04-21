<?php
?>
<!DOCTYPE html>
<html>
<head>  <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="random.css">
        <title>Publish a Paper</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="about.php">CynicalApe Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <u2 class="navbar-nav">
                                <li class="nav-item">
                                        <a class="nav-link" href="publish.php">Publish</a>
                                </li>
								<li class="nav-item">
                                        <a class="nav-link" href="library.php">Library</a>
                                </li>                               
                                <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="assign.php">Assign</a>
                                </li>
                                  <li class="nav-item">
                                        <a class="nav-link" href="review.php">Review</a>
                                </li>
                                 <li class="nav-item">
                                        <a class="nav-link" href="endorsement.php">Endorsement</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="advancedSearchPageConf.php">Advanced Search</a>
                                </li>
								<li class="nav-item">
                                        <a class="nav-link" href="about.php">Logout</a>
                                </li>
								<li class="nav-item">
                                        <div class="dropdown">               
                                          <div id="myDropdown" class="dropdown-content">
                                            <form>
                                            <input type="text" placeholder="Enter Publication Name" id="myInput" onkeyup="filterFunction()" required><br>
                                            <button onclick="myFunction()" class="dropbtn">List Publication Citations</button>
                                            </form>
                                          </div>                    
                                        </div>
                                </li>
                        </u2>
                </div>
        </nav>

        <br>
        <div class="container">
                <div class="jumbotron">
                        <h1 class="display-4">Assign Paper</h1>
                        <p class="lead">Succesfully assign the paper to the reviewers to be chosen!</p>
                        <hr class="my-4">
                        <p> Assign paper page is designed for editors exclusively, allowing them to assign the chosen paper to be reviewed by specific authors.
                        </p>
                </div>
                <div class="container">
                        <form action="login_post.php" method="post">
                        		<div class="row">
                                        <div class="form-group col-sm-4 col-centered">
                                                <label>Paper: Adventure of joe</label>
                                        </div>
                                </div>
                                
                                <div class="row">
                                        <div class="form-group col-sm-4 col-centered">
                                                <label for="inputUsername">Search For Reviewers</label>
                                                <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Reviewer Name">
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="form-group col-sm-4 col-centered">
                                                <br>
                                                <label for="exampleInputPassword1">Confirm your password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                <div class="text-center">
                                                        <br>
                                                        <button type="submit" class="btn btn-success">Assign</button>
                                                </div>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>