<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Eventors - Designer Form</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../main.js"></script>

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
            <div class="row my-container-yellow" >
                <div class="col-sm-6 p-5 justify-self-start">
                    <h2>Designer Form</h2><br>
                    <form method="post" id="dform" name='vform' style="display: table;">

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


                            <tr>
                                <td align="left">
                                    <p>City* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><input type="text" id="city"> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p>Qualification* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><input type="text" id="qual"> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p>University* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><input type="text" id="uni"> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p>Are you still a student?* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><select id="desistudent">
                                            <option value="Select">Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p>Years of Experience* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><select id="exp">
                                            <option value="Select">Select</option>
                                            <option value="1 year">1 year</option>
                                            <option value="2 years">2 years</option>
                                            <option value="More than 2 years">More than 2 years</option>
                                            <option value="More than 5 years">More than 5 years</option>
                                        </select> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <p>Type of Designing you do* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><select id="destype">
                                            <option value="Select">Select</option>
                                            <option value="Set Designing">Set Designing</option>
                                            <option value="Cards Designing">Cards Designing</option>
                                            <option value="Website Designing">Website Designing</option>
                                            <option value="Other">Other</option>
                                        </select> <br></p>
                                </td>
                            </tr>


                            <tr>
                                <td align="left">
                                    <p>Insta/Facebook Handle* </p>
                                </td>
                                <td align="left">
                                    <p style="padding-left: 5px;"><input type="text" id="social"> <br></p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Your Resume</p>
                                </td>
                                <td>
                                    <p><input type="file" id="designerfile" accept=".pdf,.docs,.docx">
                                    </p>
                                </td>
                            </tr>


                        </table>

                        <table>
                            <tr>
                                <td align="left">
                                    <p>What is your story? Tell us about your family, hobbies ANYTHING! </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p> <textarea id="desc1" rows="4" cols="80"></textarea><br></p>
                                </td>
                            </tr>


                            <tr>
                                <td align="left">
                                    <p>Why do you want to join us?</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p> <textarea id="desc2" rows="4" cols="80"></textarea><br></p>
                                </td>
                            </tr>



                            <tr>
                                <td align="left">
                                    <p>A Special Message for us maybe?</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <p> <textarea id="desc3" rows="4" cols="80"></textarea><br></p>
                                </td>
                            </tr>


                        </table>


                        <button id="dform-send-btn" type="submit" name="submit">Submit</button>
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
                    <a href="">For Interships</a> <br>
                    <a href="designerform.php">For Designers</a> <br>
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
