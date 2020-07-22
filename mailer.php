<?php
        $to_email_address="namanb009@gmail.com";
        $subject = $_POST[".vname"];
        $message="More Text";

        mail($to_email_address,$subject,$message);
?>


<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Eventors - Vendor Form</title>

        <link rel="stylesheet" href="styles.css">
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
                    <li class="nav-item"><a href="index.php" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid my-container-yellow">
            <div class="row">
                <div class="col-sm 12 text-center justify-content-center align-content-center" style="padding: 30vh">
                    <h3>Your response has been recorded.</h3>
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

                    <a href="vendorform.php">For Vendors</a> <br>
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
