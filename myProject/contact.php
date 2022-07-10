<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">
                <img src="images/logo.jpg" class="rounded" alt="" width="40" height="27">
            </a>
            <a class="navbar-brand" href="index.php">NGO</a>
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

    <div class="jumbotron" style="background-image: url('images/bgngo.jpg');background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%; color:white;">
        <h1>NGOs</h1>
        <p>We can't help everyone.But everyone can help someone.</p>
    </div>

    <section class="my-2" id="contact"  style="background-image: url('images/bgcon.jpg');background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%; color:white;">
       

            <div class="py-5">
                <h2 class="text-center"> <b> Contact Us</b></h2>
            </div>
            <div class="w-50 pb-5 m-auto">
                <form action="userinfo.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea name="comment" class="form-control"></textarea>
                    </div>

                   
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
        <p class="bg-dark text-white text-center">
            © 2020 Smile Foundation. All Rights Reserved. | Partners Login | Privacy Policy
        </p>   
</body>
</html>