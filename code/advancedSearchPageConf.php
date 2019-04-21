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
  		<style>
          body {margin:0;}       
                  ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #333;
              position: fixed;
              bottom: 0;
              width: 100%;
          }
          li {
              float: left;
          }
          li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
          }
        </style>
        
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

<body>
<br>
<form id = "search_form">
<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <input class="form-control" id="organizationbar" type="text" placeholder="Organization title">
            </div>
            <div class="col-sm-6">
                <p>Date</p>
                From: <input type="date" id="fromdateid" name="fromdate">
                Up to: <input type="date" id="uptodateid" name="uptodate">
            </div>

        </div>

</div>
<br>
<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <input class="form-control" id="authorbar" type="text" placeholder="Author Name">
            </div>
        </div>
</div>

<br>
<div class="container">
<div class="row">
<div class="col-sm-1">
    <button type="reset" class="btn btn-primary" onclick="searchfunk()">Search</button>
    <script>
        function searchfunk() {
            var organizationbar = document.getElementById('organizationbar').value;
            var fromdateid = document.getElementById('fromdateid').value;
            var uptodateid = document.getElementById('uptodateid').value;
            var authorbar = document.getElementById('authorbar').value;
            var page = "advancedSearchPageConf.php?org=" + organizationbar
            + "from=" + fromdateid + "upto=" + uptodateid + "auth=" + authorbar ;
            window.location.href = page;
        }
    </script>
</div>
</form>
<div class="col-sm-1">
    <div class="btn-group">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sort By
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="advancedSearchPageConf.php?sort=rel">Relevance</a>
            <a class="dropdown-item" href="advancedSearchPageConf.php?sort=date_asc">Date Ascending</a>
            <a class="dropdown-item" href="advancedSearchPageConf.php?sort=date_desc">Date Descending</a>
            <a class="dropdown-item" href="advancedSearchPageConf.php?sort=subs">Subscriber Count</a>

        </div>
    </div>
</div>
</div>
</div>
<div class="my-table">
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="table-responsive">

                <?php
                $sort = "empty";
                if(isset($_GET['sort'])) {
                    $sort = $_GET['sort'];
                }
                $org = "empty";
                if(isset($_GET['org'])) {
                    $org = $_GET['org'];
                }
                $from = "empty";
                if(isset($_GET['from'])) {
                    $from = $_GET['from'];
                }
                $upto = "upto=";
                if(isset($_GET['upto'])) {
                    $upto = $_GET['upto'];
                }
                $auth = "auth=";
                if(isset($_GET['auth'])) {
                    $auth = $_GET['auth'];
                }
                include 'advance_result.php';?>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="table-responsive">
                <?php
                $sort = "empty";
                if(isset($_GET['sort'])) {
                    $sort = $_GET['sort'];
                }
                $org = "empty";
                if(isset($_GET['org'])) {
                    $org = $_GET['org'];
                }
                $from = "empty";
                if(isset($_GET['from'])) {
                    $from = $_GET['from'];
                }
                $upto = "upto=";
                if(isset($_GET['upto'])) {
                    $upto = $_GET['upto'];
                }
                $auth = "auth=";
                if(isset($_GET['auth'])) {
                    $auth = $_GET['auth'];
                }
                include 'advance_conf.php';?>
            </div>
        </div>
    </div>

</div>

       


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</body>
</html>