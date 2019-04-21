<!DOCTYPE html>
<html>
<head>  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="random.css">
    <title>Sign Up</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="about.php">CynicalApe Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="about.php">About</a>
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
    <form action="library.php" method="post">
        <div class="row">
            <div class="col-sm-9">
                <input class="form-control" id="searchbar" type="text" placeholder="Search journal, paper, conference">
            </div>
            <div class="col-sm-1">
                <button type="reset" class="btn btn-primary" onclick="searchfunk()">Search</button>
                <script>
                    function searchfunk() {
                        var element = document.getElementById('searchbar').value;
                        var page = "infopage.php?search=";
                        element = page.concat(element);
                        window.location.href = element;
                    }
                </script>
            </div>
            <div class="col-sm-2">
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Sort By
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="infopage.php?sort=rel">Relevance</a>
                        <a class="dropdown-item" href="infopage.php?sort=date_asc">Date Ascending</a>
                        <a class="dropdown-item" href="infopage.php?sort=date_desc">Date Descending</a>
                        <a class="dropdown-item" href="infopage.php?sort=subs">Citations</a>

                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<br>

<div class="my-table">
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <?php
            $info = "empty";
            if (isset($_GET['info'])) {
                $info = $_GET['info'];
            }
            echo "<p> </p>";
            ?>
            <div class="table-responsive">
                <?php
                $info = "empty";
                if (isset($_GET['info'])) {
                    $info = $_GET['info'];
                }
                include 'getpublications.php'; ?>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>