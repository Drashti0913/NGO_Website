<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGOs</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> -->
    <link src="font.css" rel="stylesheet">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="images/logo.jpg" class="rounded" alt="" width="40" height="27">
            </a>

            <a class="navbar-brand" href="#home">NGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse fluid-container" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(cureent)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>

            </div>
    </nav>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->


        <div class="carousel-inner" id="home">
            <div class="carousel-item active">
                <img src="images/ngo6.jpg" alt="" width="1000" height="500">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ngo7.jpg" alt="" width="500" height="400">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ngo5.jpg" alt="" width="900" height="400">
                <div class="carousel-caption">
                </div>

            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5 p-3" id="about">
        <div>
            <h1 class="text-center"> <b> About Us</b></h1>
        </div>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/ngo 4.jpg" alt="" class="img-fluid aboutimg rounded py-5">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="py-5">Your Support is Powerful.</h2>
                    <h5> We have a high degree of public trust, which can make them a useful proxy for the concerns of society and stakeholders.NGOs can also be lobby groups for corporations, such as the World Economic Forum.NGO is "a not-for profit, voluntary citizen’s group that is organized on a local, national or international level to address issues in support of the public good.</h5>
                    <a href="about.php " class="btn btn-success my-4">check more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-3 bg-dark rounded text-white" id="Ourservices">
        <div class="py-4 ">
            <h1 class="text-center "> <b> Our Services</b></h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">

                    <div class="flip-card" tabIndex="0">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="card-img-top" src="images/ngoeducation.jpg" alt="Card image">
                            </div>
                            <div class="flip-card-back">
                                <p>
                                <h2 class="card-title">Education</h2>
                                </p>
                                <p class="card-text">Saraswati Vidhyalay</p>
                                <p><a href="service.php" class="btn btn-success">See Profile</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="flip-card" tabIndex="0">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="card-img-top" src="images/ngofood.jpg" alt="Card image">
                            </div>
                            <div class="flip-card-back">
                                <h2 class="card-title">Food</h2>
                                <p class="card-text">Annpurna Trust</p>
                                <a href="service.php" class="btn btn-success">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="flip-card" tabIndex="0">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="card-img-top" src="images/ngohealth.jpg" alt="Card image">
                            </div>
                            <div class="flip-card-back">
                                <h2 class="card-title">Health</h2>
                                <p class="card-text">Sarvajanik Hospital</p>
                                <a href="service.php" class="btn btn-success">See Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
    <footer>

        <div class="footer-container footer-one pt-100 pb-50" style="background-image: url('images/cont.jpg');background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%; color:black;">
            <div class="container wide">
                <div class="row">
                    <!--<div class="col footer-single-widget">
                =======  copyright text  ======
            
            </div>-->
                    <div class="col footer-single-widget col-sm-12 col-lg-3 col-md-3">
                        <!--=======  single widget  =======-->
                        <h5 class="widget-title"> <b>ADDRESS</b> </h5>

                        <!--=======  footer navigation container  =======-->
                        <br>
                        <div class="footer-nav-container">
                            <nav>
                                <p>24, Nand Deep Industrial Estate, Opposite VITS Hotel, Ram Krishna Mandir Road, &, Kondivita Rd, Bhim Nagar, Andheri East, Mumbai, Maharashtra 400059 Phone:+91-22-26104106/07</p>
                            </nav>
                        </div>

                        <!--=======  End of footer navigation container  =======-->

                        <!--=======  single widget  =======-->
                    </div>
                    <div class="col footer-single-widget col-sm-12 col-lg-3 col-md-3">
                        <!--=======  single widget  =======-->
                        <h5 class="widget-title"> <b> USEFUL LINKS</b></h5>
                        <br>
                        <!--=======  footer navigation container  =======-->

                        <div class="footer-nav-container">
                            <nav>
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                                    <li><a class="nav-link" href="index.php">Home</a></li>
                                    <li><a class="nav-link" href="about.php">About</a></li>
                                    <li><a class="nav-link" href="service.php">Services</a></li>
                                    <li><a class="nav-link" href="events.php">Events</a></li>
                                    <li><a class="nav-link" href="help.php">Help</a></li>
                                    <li><a class="nav-link" href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!--=======  End of footer navigation container  =======-->

                        <!--=======  single widget  =======-->
                    </div>

                    <div class="col footer-single-widget col-sm-12 col-lg-3 col-md-3">
                        <!--=======  single widget  =======-->
                        <h5 class="widget-title"> <b> FOLLOW US ON</b></h5>
                        <br>
                        <!--=======  footer navigation container  =======-->

                        <div class="footer-nav-container footer-social-links">
                            <nav>
                                <ul>
                                    <p><a href="http://twitter.com/" target="black"><img src="images/twitter.png" class="rounded" alt="" width="20" height="20"><i class="fa fa-twitter"></i> Twitter</a></p>
                                    <p><a href="http://facebook.com/" target="black"><img src="images/facebook.png" class="rounded" alt="" width="20" height="20"> <i class="fa fa-facebook"></i> Facebook</a></p>
                                    <p> <a href="http://instagram.com/" target="black"><img src="images/instagram.png" class="rounded" alt="" width="20" height="20"><i class="fa fa-instagram"></i> Instagram</a></p>



                                </ul>
                            </nav>
                        </div>

                        <!--=======  End of footer navigation container  =======-->


                        <!--=======  single widget  =======-->
                    </div>
                    <div class="col footer-single-widget col-sm-12 col-lg-3 col-md-3">
                        <!--=======  single widget  =======-->

                        <div class="footer-subscription-widget">
                            <h2 class="footer-subscription-title">Email</h2>
                            <p><a href="drashtibhavsar09@gmail.com" target="black">drashtibhavsar09@gmail.com</a></p>
                            <h2 class="footer-subscription-title">Website</h2>
                            <p><a href="www.NGOs.com" target="black">www.NGOs.com</a></p>

                        </div>



                        <!--=======  End of single widget  =======-->
                    </div>
                </div>

            </div>
        </div>

        <p class="bg-dark text-white text-center">
            © 2020 Smile Foundation. All Rights Reserved. | Partners Login | Privacy Policy
        </p>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>