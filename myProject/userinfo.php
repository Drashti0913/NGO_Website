    <?php
    
    $con = mysqli_connect('localhost','root');
    if($con){
        echo "Connectoin Succesful";
    }else{
        echo "No Connection";
    }
  
    mysqli_select_db($con,'ngowebsite');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
  
   

    $query = " insert into userinfodata (name,email,mobile)
    values('$name','$email','$mobile') ";

    echo "$query";
    
    mysqli_query($con,$query);

    header('location:index.php');
    

    ?>