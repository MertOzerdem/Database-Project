<!-- 
# PUBLISH PAGE
# OGUZ KAAN AGAC: 04/05/2018
# VER 1.0
?> -->

<?php
?>


<!DOCTYPE html>

<html>

<head> <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="random.css">

    <script src="jquery.min.js"></script>
    <title>Publish</title>
    <script>
        $(document).ready(function () {
            // Variable to hold request
            var request;
            $("#publish_form").submit(function (event) {
                event.preventDefault();

                if (request) {
                    request.abort();
                }
                var $form = $(this);
                var $inputs = $form.find("input, select, button, textarea");
                var serializedData = $form.serialize();
                $inputs.prop("disabled", true);
                request = $.ajax({
                    type: 'POST',
                    url: "publish_req.php",
                    data: serializedData,
                    success: function (response) {
                        if (response == 1) {
                            alert("Successful!");
                            window.location.href = "publish.php";
                        }
                        else if (response == -1)  {
                            alert("Author couldn't be found");
                            window.location.href = "publish.php";
                        }
                        else if (response == -2)  {
                            alert("Organization couldn't be found");
                            window.location.href = "publish.php";
                        }
                        else if (response == -4)  {
                            alert("Paper already submitted.");
                            window.location.href = "publish.php";
                        }
                        else {
                            alert("Insertion failed");
                            window.location.href = "publish.php";
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            });
        });
    </script>

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

        <h1 class="display-4">Submit Your Paper</h1>

        <p class="lead">Congratulations on your way to submit your work!</p>

        <hr class="my-4">

    </div>

    <div class="container">

        <form id="publish_form">

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="inputUsername">Title</label>

                    <input type="text" class="form-control" name="paperTitle" id="inputPaperTitle"
                           placeholder="On the Origin of Species" required>

                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="inputSelect1">Select an organization</label>

                    <select class="form-control" name="selectedOrganization" id="organization_select" required>

                        <?php
                        include 'organizationfill.php';
                        ?>
                    </select>
                    <br>


                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="url">URL</label>

                    <input type="text" class="form-control" name="paperURL" id="inputpaperURL"
                           placeholder="publication url" required>

                </div>

            </div>
            <br>
            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="url">Scientific Area</label>

                    <input type="text" class="form-control" name="scientificArea" id="inputscientificArea"
                           placeholder="Computer Science, bioinformatic etc.." required>

                </div>

            </div>
            <br>

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="url">Authors</label>

                    <input type="text" class="form-control" name="authors" id="inputAuthors"
                           placeholder="Usernames separated by comma" required>

                </div>

            </div>
            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <br>

                    <label for="exampleInputPassword1">Confirm your password</label>

                    <input type="password" class="form-control" name= "password" id="inputpassword" placeholder="Password"
                           required>
                    <br>


                    <div class="text-center">

                        <br>

                        <button type="submit" class="btn btn-success">Publish</button>


                    </div>

                </div>

            </div>

        </form>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>