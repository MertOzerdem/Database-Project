<html lang="en">

<head>
    <script src="jquery.min.js"></script>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="random.css">
    <title>CynicalApe Lib</title>

    <script>
        $(document).ready(function () {
            // Variable to hold request
            var request;

// Bind to the submit event of our form
            $("#login_form").submit(function (event) {

                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();

                // Abort any pending request
                if (request) {
                    request.abort();
                }
                // setup some local variables
                var $form = $(this);

                // Let's select and cache all the fields
                var $inputs = $form.find("input, select, button, textarea");

                // Serialize the data in the form
                var serializedData = $form.serialize();

                // Let's disable the inputs for the duration of the Ajax request.
                // Note: we disable elements AFTER the form data has been serialized.
                // Disabled form elements will not be serialized.
                $inputs.prop("disabled", true);
                // Fire off the request to /form.php
                request = $.ajax({
                    type: 'POST',
                    url: "login_post.php",
                    data: serializedData,
                    success: function (response) {
                        // you will get response from your php page (what you echo or print)
                        if (response == -1) {
                            alert("WRONG USERNAME OR PASSWORD");
                            location.reload();
                        }

                        else {
                            window.location.href = "library.php";
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

    <a class="navbar-brand" href="index.php">CynicalApe Library</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav">

            <li class="nav-item active">

                <a class="nav-link" href="index.php">Login <span class="sr-only">(current)</span></a>

            </li>

            <li class="nav-item">

                <a class="nav-link" href="aboutNonLogin.php">About</a>

            </li>

        </ul>

    </div>

</nav>

<div class="container">

    <div class="container">

        <form id="login_form">

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="inputUsername">Username</label>

                    <input type="text" class="form-control" name="username" id="inputUsername"
                           placeholder="Enter Username" required>

                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-4 col-centered">

                    <label for="inputPassword">Password</label>

                    <input type="password" class="form-control" name="password" id="inputPassword"
                           placeholder="Enter Password" required>

                    <div class="text-center">

                        <br>

                        <button type="submit" class="btn btn-dark">Login</button>

                    </div>

                </div>

            </div>

        </form>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-centered">

                <div class="text-center">

                    <a class="btn btn-success" href="signup_page.php" role="button">Sign Up</a>

                    <small id="signupHelp" class="form-text text-muted text-center">Don't have an account? Sign up
                        here.
                    </small>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>