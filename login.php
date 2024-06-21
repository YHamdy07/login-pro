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
        }

        .container{
        max-width: 450px;
        background-color: rgba(255,255,255,.1);
        padding: 5px 20px 10px 20px;
        margin-top: 10%;
        border-radius: 20px;;
        }
        label{
        color: #fff;
     }
     h2{
        padding-top: 20px;
        color: rgb(10, 0, 53);
        }

        .col-sm-11{
        padding-bottom: 10px;
     }
        body a{
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        }

        body label{
        padding-left: 18px;
        }
     p{
        color: #d1d1d1;
        }
    
        .btn{
        width: 100%;
        padding: 10px 70px 10px 70px;
        border: none !important;
        border-radius: 23px !important;
     }
     input[type=text],
     input[type=password]{
        border-radius: 25px;
        font-size: 18px;
        border: none !important;
        padding: 12px 12px 12px 23px;
        }
        hr{
        background-color: #fff;
        padding: 1px;
     }
        .row-bottom .col{
        display: inline-block;
        margin: 0;
     }
        @media only screen and (max-width:990){
        .navbar img{
            height: 65px;
            margin-top: 10px;
        }


        .container{
            max-width: 350;
            background-color: rgba(255,255,255,.1);
            padding: 5px 20px 10px 20px ;
            margin-top: 30%;
            border-radius: 20px;
        }
        }

        .navbar{
        text-align: center;
        }
    </style>


</head>
<body>
    <header>
        <nav class="navbar navar-expand-lg fixed-top">
            <a href=""><img src="logo3.png" height="100" style="padding-right:20px;" alt=""></a>
        </nav>
    </header>

    <section class="container">
        <h2>LOGIN</h2>
        <hr>

        <form class="form" method="post" action="">
            <div class="row justify-content-center">
                <div class="col-sm-11">
                    <label for="username" class="control-label">Username*</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-11">
                    <label for="password" class="control-label">Password*</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-11">
                    <p>Forgot Password ? <a href="">Click Here</a></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-11">
                    <div class="col-xs-offset-2 mt-2">
                        <button type="submit" class="btn btn-warning" name="submit">Login</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <div class="row-bottom">
            <div class="col">
                <p>Create Account <a href="register.php"> Register</a></p>
            </div>
        </div>
        
    </section>
   
</body>
</html>