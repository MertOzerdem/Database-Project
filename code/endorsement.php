<?php
?>
<!DOCTYPE html>
<html>
<head>  <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <a class="nav-link" href="publish.php">Submit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="submissions.php">Submissions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="library.php">Library</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="assign.php">Assign</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="review.php">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="endorsement.php">Endorsement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="advancedSearchPageConf.php">Advanced Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Logout</a>
                            </li>
                        </u2>
                </div>
        </nav>

        <br>
        <div class="container">
                <div class="jumbotron">
                        <h1 class="display-4">Endorse Skills</h1>
                        <p class="lead">Endorse the skills of the author chosen!</p>
                        <hr class="my-4">
                        <p> Any user may endorse the skills of a chosen author.  
                        </p>
                </div>
                <div class="container">
                        <form action="login_post.php" method="post">
                                <div class="row">
                                        <div class="form-group col-sm-4 col-centered">
                                                <label><b>Author Chosen:</b> Arif Usta</label> <br>
                                        </div>
                                  
                                  
                                </div>
                                
                                <div class="row">
                                        <div class="form-group col-sm-4 col-centered" id="checkboxes">
                                                <form action="/action_page.php" method="get">
                                                  <input type="checkbox" name="vehicle" value="Bike"> Grammar<br>
                                                  <input type="checkbox" name="vehicle" value="Car" > Sentence structure<br>
                                                  <input type="checkbox" name="vehicle" value="Car" > Vocabulary<br>
                                                  <input type="checkbox" name="vehicle" value="Car" > Writing style<br>
                                                  <input type="checkbox" name="vehicle" value="Car" > Correct expressions<br><br>
                                                  <button type = "submit"style="font-size:18px">Endorse <i class="fa fa-thumbs-up"></i></button>
                                                </form>
                                                <br><br>
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