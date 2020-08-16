<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
            content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Eventors - Designer Form</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../main.js"></script>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>

        <div class="row my-container-dark">
            <div class="col-12">

                <nav class="navbar navbar-expand-md my-navbar">
                    <a class="navbar-brand"><img class="m-2 img-fluid logo" src="../images/justlogoyellower.png"></a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navmenucontainer">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navmenucontainer" class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a href="#our-story" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#contact-us" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--Form Starts Here-->
        <div class="row my-container-yellow" style="overflow:hidden">
            <div class="col-sm-6 p-5 justify-self-start">
                <h2>Internship Form</h2><br>
                <form method="post" id="dform" name='vform' class="table-responsive"">

                    <table>
                        <tr>
                            <td align="left">
                                <p>Name* </p>
                            </td>
                            <td align="left">
                                <p style="padding-left: 5px;"><input type="text" id="name"> <br></p>
                            </td>
                        </tr>


                        <tr>
                            <td align="left">
                                <p>Email* </p>
                            </td>
                            <td align="left">
                                <p style="padding-left: 5px;"><input type="text" id="email"> <br></p>
                            </td>
                        </tr>


                        <tr>
                            <td align="left">
                                <p>Phone* </p>
                            </td>
                            <td align="left">
                                <p style="padding-left: 5px;"><input type="text" id="phone"> <br></p>
                            </td>
                        </tr>

                    </table>

                    <table>



                        <tr>
                            <td align="left">
                                <p>A Special Message for us maybe?</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left">
                                <p> <textarea id="desc3"></textarea><br></p>
                            </td>
                        </tr>


                    </table>


                    <button id="iform-send-btn" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>

        <!--Form ends here-->


        <div class="container-fluid my-container-dark" id="contact-us">
            <div class="row align-content-center justify-content-center"
                style="padding-top: 10vh; padding-bottom: 10vh;">
                <div class="col-md-5 contact-us">
                    <h2>CONNECT WITH US</h2>
                    <h5 style="display: inline;">Email: </h5>
                    <p style="display: inline;">officialEmail@gmail.com</p> <br>
                    <h5 style="display: inline;">Phone: </h5>
                    <p style="display: inline;">8007386299</p><br>

                    <a href="#" class="fa fa-facebook media-icons" style="padding-left: 20px;"></a>
                    <a href="#" class="fa fa-instagram media-icons"></a>
                </div>

                <div class="col-md-5 contact-us">
                    <h2>WORK WITH US</h2>

                    <a href="../Vendor/vendorform.php">For Vendors</a> <br>
                    <a href="interform.php">For Interships</a> <br>
                    <a href="../Designer/designerform.php">For Designers</a> <br>
                    <a href="">For Business Partners</a>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>

    </body>
