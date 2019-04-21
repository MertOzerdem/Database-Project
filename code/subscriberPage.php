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
<title>Sign Up</title>
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
                                        <a class="nav-link" href="index.php">Logout</a>
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


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
<!DOCTYPE html>
<html>
<head>  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="random.css">
<title>Sign Up</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <br/> 
<body>
SUBSCRIBER PAGE
</body>
<style type="text/css">
#ProfilePage
{
    /* Move it off the top of the page, then centre it horizontally */
    margin: 50px auto;
    width: 635px;
/* For visibility. Delete me */
border: 1px solid red;
}
#LeftCol
{
    /* Move it to the left */
    float: left;
    width: 200px;
    text-align: center;
    /* Move it away from the content */
    margin-right: 20px;
/* For visibility. Delete me */
border: 1px solid brown;
}
#Photo
{
    /* Width and height of photo container */
    width: 200px;
    height: 200px;
/* For visibility. Delete me */
border: 1px solid green;
}
#PhotoOptions
{
    text-align: center;
    width: 200px;
/* For visibility. Delete me */
border: 1px solid brown;
}
#Info
{
    width: 400px;
    text-align: center;
    /* Move it to the right */
    float: right;
/* For visibility. Delete me */
border: 1px solid blue;
}
#Info strong
{
    /* Give it a width */
    display: inline-block;
    width: 100px;
/* For visibility. Delete me */
border: 1px solid orange;
}
#Info span
{
    /* Give it a width */
    display: inline-block;
    width: 250px;
/* For visibility. Delete me */
border: 1px solid purple;
}
</style>

<div id="ProfilePage">
    <div id="LeftCol">
        <div id="Photo"></div>
        <div id="ProfileOptions">
        subscriber name
        </div>
    </div>

    <div id="Info">
        <p>  <body> PROFILE <body>  </p>
         <p> <strong>ID:</strong>
            <span>200</span>
        </p>
        
        <p>
            <strong>Country:</strong>
            <span>Spain</span>
        </p>
        <p>
            <strong>Mail:</strong>
            <span>rafa@gmail.com</span>
        </p>
      
        <p>
            <strong>Number Of Subscription:</strong>
            <span>45</span>
        </p>
        
          <p>
            <button type="button">Subscription List</button>
            
        </p>
        <p>
            <button type="button">Add New Subscription </button>
            
        </p>
    </div>

    <!-- Needed because other elements inside ProfilePage have floats -->
    <div style="clear:both"></div>
</div>