<?php
include('config.php');

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verifypassword = $_POST['verifypassword'];

    //generate random codes
    $code = random_int(100000,999999);

    //check if username already exist to avoid user name duplication
    if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_user WHERE username= '{$username}'"))>0) {
        $msg= "This username has already registred. You can use characters and numbers as well.";
    }
    else{
        //check if both pass and username matched
        if($password === $verifypassword){
            $sql = "INSERT INTO tbl_user (firstname, lastname, gender, age, mobile, whatsapp, email, address, username, 
            password, code, verified, status, type, loggedin, profilied) VALUES (
            '{$firstname}', '{$lastname}', '{$gender}', '{$age}','{$mobile}', '{$whatsapp}', '{$email}', '{$address}', '{$username}', 
            '{$password}', '{$code}', '0', 'Active', 'User', '0', '0')";

            $result = mysqli_query($conn, $sql);

            if($result){
                $msg = "Username and Password accepted. Please contact with Admin to get virification code ";
            }
            else{
                $msg = "Something went wrong";
            }         
        }
        else{
            $msg = "Password and verify password do not match";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login system</title>
        <!--CSS FILE-->
        <link rel="stylesheet" href="login.css" class="style">


        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>

        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-image: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.2)), url(bg2.jpg);
                display: flex;
                background-attachment: fixed;
                justify-content: center;
                color: black;
            }
            input[type=text],input[type=number],input[type=email],input[type=password]{
                background-color: rgb(236,236,236);
                border-color: gray;
                padding: 12px 12px 12px 12px;
                border-radius: 25px;
                font-size: 18px;
            }
            body label{
                font-weight: 600;
            }
            .container{
                padding: 20px 20px 10px 60px;
            }
            .btn{
                padding: 12px 60px 12px 60px;
                border-radius: 25px;
                border: none;
            }
            .col-sm-6{
                padding-bottom: 20px;
            }
            .box-top{
                text-align: center;
            }
            .row-bottom .col{
                display: inline-block;
                margin: 0;
                padding: 0 10px 0 10px;
            }
            body a, body p{
                text-decoration: none;
                font-weight: 500;
            }
            

        </style>
    </head>


    <body>
        <header>
            <nav class="navbar navar-expand-lg fixed-top">
                <a href=""><img src="logo3.png" height="100" style="padding-left:20px;" alt=""></a>
            </nav>
        </header>
    
        <section class="container">  
            <div class="box-top">
                <h5>Welcome to register new user</h5>
            </div>             
            <hr>
            <div class="bottom-box">
                <form class="form" method="post" action="">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="firstname" class="control-label">Firstname*</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname"required>
                        </div>                               
                        <div class="col-sm-6">
                        <label for="lastname" class="control-label">Lastname*</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname"required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="gender" class="control-label">Gender*</label>
                            <label class="radio-inline" >
                            <input type="radio" name="gender" value="M">Male
                            </label>
                            <label class="radio-inline" >
                            <input type="radio" name="gender" value="F">Female
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="age" class="control-label">Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter age"></input>
                        </div>
                    </div>
                
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="mobile" class="control-label">Mobile Number*</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number" required>
                        </div>
                            
                        <div class="col-sm-6">
                            <label for="whatsapp" class="control-label">Whatsapp Number*</label>
                            <input type="text" class="form-control" name="whatsapp" placeholder="Enter whatsapp ">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="email" class="control-label">Email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                                
                        <div class="col-sm-6">
                            <label for="address" class="control-label">Address*</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter address ">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="username" class="control label">Username*</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username"required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="password" class="control-label">Password*</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password"required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <label for="verifypassword" class="control-label">Verify Password*</label>
                            <input type="password" class="form-control" name="verifypassword" placeholder="Verify Password"required>
                        </div>
                    </div>
    
                    <div class="row justify-content-center">
                        <div class="col-sm-11">
                            <div class="col-xs-offset-2 mt-2">
                                <button type="submit" class="btn btn-warning" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
            <div class="row justify-content-center">
                <div class="row-bottom">
                    <div class="col float-start">
                        <p>Already have an account! <a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
            
        </section>
       
    </body>
 </html>