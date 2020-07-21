<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if (isset($_POST["btn-send"]))
{

    $mailTo = "namanb009@gmail.com ";
    $subject="blah";
    $text="This nigga be looking for you";

    mail($mailTo,$subject,$text);
    header("Location = index.php");
}

?>


<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Eventors</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="main-body centered">

        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand"><img class="img-fluid logo" src="images/justlogoyellower.png"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navmenucontainer">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenucontainer" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>2
                    <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid my-container-yellow">
            <div class="row justify-content-center align-content-center">
                <div class="col-sm-12">
                    <form action="">

                    
                    </form>
                </div>

            </div>

        </div>




        <div class="container-fluid my-container-dark" id="contact-us">
            <div class="row align-content-center justify-content-center"
                style="padding-top: 10vh; padding-bottom: 10vh;">
                <div class="col-md-5 contact-us">
                    <h2>CONNECT WITH US</h2>
                    <h5 style="display: inline;">Email: </h5>
                    <p style="display: inline;">officialEmail@gmail.com</p> <br>
                    <h5 style="display: inline;">Phone: </h5>
                    <p style="display: inline;">8007386299</p><br>

                    <a href="#" class="fa fa-facebook media-icons" style="padding-right: 20px;"></a>
                    <a href="#" class="fa fa-instagram media-icons"></a>
                </div>

                <div class="col-md-5 contact-us">
                    <h2>WORK WITH US</h2>

                    <a href="#" data-toggle="modal" data-target="#VendorModal">For Vendors</a> <br>
                    <a href="">For Interships</a> <br>
                    <a href="">For Designers</a> <br>
                    <a href="">For Business Partners</a>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    </body>

</html>
