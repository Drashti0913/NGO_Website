<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
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
        <p>All we need is to buila a human relations with our deeds.That's only thing that lasts forever.</p>
    </div>

    <section class="my-5" id="help" style="background-image: url('images/bghelp.jpg');background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%; color:white;">>
        <div>
            <h2 class="text-center"> <b> Help to save Children now!</b></h2>
        </div>
<div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

       <form>
       <div class="w-50 m-auto p-5">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" id="name" autocomplete="off" class="form-control">
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
                    <label>How Would you like to help us?</label><br>
                    <input type="checkbox" name="help" id="">Donate
                    <input type="checkbox" name="help" id="">Volunteer
                    <input type="checkbox" name="help" id="">Member
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="amount" id="amount" autocomplete="off" class="form-control">
                </div>

                <input type="button" value="Donate" name="button" class="btn btn-danger" onclick="MakePayment()">
     </form>
     <script>
        function MakePayment(){
            var name = $("#name").val();
            var amount = $("#amount").val();
            var options = {
                        "key": "rzp_test_vDE2Czsbi9r6Jw", // Enter the Key ID generated from the Dashboard
                        "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",  
                        "name": name,
                        "description": "Test Transaction",
                        "image": "razorpay.svg",
                        // "account_id": "acc_Ef7ArAsdU5t0XL",
                        // "order_id": "order_DBJOWzybf0sJbb", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                        "handler": function(response) {
                           jQuery.ajax({
                                type:"POST",
                                url:"help.php",
                                data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                                success:function(result){
                                    window.location.href="success.php";
                                } 
                           });
                        },
                       
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                       
        }
     </script>
               

            <center>
                <a href="download.php?file=ngo" target="">Download PDF Now</a>
            </center>
    </section>

    </div>



    </section>
    <p class="bg-dark text-white text-center">
        © 2020 Smile Foundation. All Rights Reserved. | Partners Login | Privacy Policy
    </p>

</body>

</html>