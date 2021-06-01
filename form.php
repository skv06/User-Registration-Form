
<?php

 $con = mysqli_connect("localhost","root","","user_form")            // To establish connection with database
 or die(mysqli_error($con));                                         // if connection not made stop the program

 // data collected from users
 $first_name = mysqli_real_escape_string($con,$_POST['firstname']);
 $last_name = mysqli_real_escape_string($con,$_POST['lastname']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $pass = $_POST['password'];
 $gender = $_POST['gender'];
 $phone = $_POST['phone'];

 // store insert query in a variable
 $user_registration_query = "insert into users(first_name, last_name, email, pass, gender, phone) 
 values ('$first_name', '$last_name', '$email', '$pass', '$gender', '$phone')"; 

 // execution of query
 $user_registration_submit = mysqli_query($con, $user_registration_query) 
 or die(mysqli_error($con));

 //$select_query = "SELECT first_name, last_name, email, phone FROM users";
 //$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
 
 //$row = mysqli_fetch_array($select_query_result);



 //echo "User successfully submitted";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>status</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- linking css -->
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <h1>User successfully submitted</h1>
        <div class="row">
            <div class="col-md-5">
                <h2>Name:</h2>
                <h4><?php echo $first_name; echo " "; echo $last_name;  ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Email:</h2>
                <h4><?php echo $email; ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <h2>Phone:</h2>
                <h4><?php echo $phone; ?></h4>
            </div>
        </div>

    </div>
</body>
</html>