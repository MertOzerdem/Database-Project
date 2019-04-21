<!-- 
# SIGN UP PAGE
# OGUZ KAAN AGAC: 04/05/2018
# VER 1.0
?> -->

<!DOCTYPE html>

	<html>

<head> <!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="random.css">
    <script src="jquery.min.js"></script>
    <title>Sign Up</title>
    <script>
        $(document).ready(function(){
            // Variable to hold request
            var request;
            $("#signup_form").submit(function(event){
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
                    url: "signup.php",
                    data: serializedData,
                    success: function (response) {
                        if (response == 1)
                        {
                            alert("Signup successfull!");
                            window.location.href = "index.php";
                        }
                        else
                        {
                            alert("WRONG USERNAME OR PASSWORD");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
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

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

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

<form id="signup_form">

<div class="row">

<div class="form-group col-sm-4 col-centered">

<label for="exampleInputEmail1">Email address</label>

<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="joe@myemail.com" required>

<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

</div>

</div>

<div class="row">

<div class="form-group col-sm-4 col-centered">

<label for="inputUsername">Username</label>

<input type="text" class="form-control" name="username" id="inputUsername" placeholder="joe123x" required>

</div>

</div>

<div class="row">

<div class="form-group col-sm-4 col-centered">

<label for="exampleInputPassword1">Password</label>

<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>

</div>

</div>
    <div class="row">
        <div class="form-group col-sm-4 col-centered">
            <label for="inputForInst">Institute</label>
            <input type="text" class="form-control" name="institute" id="inputInstitute" placeholder="Bilkent University">
            <small id="instituteTypeHelp" class="form-text text-muted">Authors must provide a valid institute.</small>
        </div>
    </div>
<div class="row">

<div class="form-group col-sm-4 col-centered">

<label for="inputSelect1">Account Type</label>

<select class="form-control" name="account_type" id="inputSelect1">

<option>Author</option>

<option>Editor</option>

<option>Subscriber </option>

</select>

<small id="accountTypeHelp" class="form-text text-muted">Non-subscriber accounts require additional confirmation.</small>

<div class="text-center">

<br>

<button type="submit" class="btn btn-success">Sign Up</button>

</div>

</div>

</div>


</form>

</div>

</div>

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</body>

</html>