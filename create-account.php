<?php
    
    include("classes/connect.php");
    include("classes/create-account.php");

    $first_name ="";
    $last_name ="";
    $user_name ="";
    $email ="";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);

        if($result !="")
        {
            echo "<div style='text-align:center; font-size:12px;color:white;background-color:red;'>";
            echo $result; 
            echo "</div>";
        }else
        {
            header("Location: dialect-selection.php");
            die;
        }
        
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $user_name =$_POST['user_name'];
        $email =$_POST['email'];

    }

    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bigkas [Create an Account]</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-lg sticky-md-top" style="background-color: #619CFF;">
            <div class="container container-sm text-center">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/Image Files/logo.png" alt="Bigkas" width="200" height="100%">
                </a>                          
            </div>
        </nav>
        <!-- Main Content -->
        <div class="container-fluid" style="background-image: url('assets/Image Files/bg1.png'); background-size: cover; background-attachment: fixed; padding-top: 100px; padding-bottom: 100px;">
            <form method="post" action= >
                <div class="row">
                    <div class="col col-md-4">

                    </div>
                    <div class="col col-md-4">
                        <div class="container text-center" style="padding-top: 40px; padding-bottom: 40px;">
                            <h3 class="mb-4">SIGN UP</h3>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <input value="<?php echo $first_name ?>" name="first_name" type="text" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="inputFirstname" placeholder="First Name">
                                </div>
                                <div class="col-sm-6">
                                    <input value="<?php echo $last_name ?>" name="last_name" type="text" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="inputLastname" placeholder="Last Name">
                                </div>                            
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <input value="<?php echo $email ?>" name="email" type="email" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="inputEmail" placeholder="juan@email.com">
                                </div>                            
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <input value="<?php echo $user_name ?>" name="user_name" type="text" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="username" placeholder="username">
                                </div>                            
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <input name="password" type="password" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <input name="password2" type="password" class="form-control" style="border-radius: 25px; padding-left: 20px;" id="inputConfirmPassword" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <input type="submit" class="btn btn-primary btn-lg mx-auto" style="border-radius: 25px; border-color: white; border-width: 3px; margin-top: 1rem; width: 300px;" href="#" value="Sign Up">
                                <a class="text-center mt-4" href="login.php">Already have an account?</a>
                                <div class="row" style="padding: 0px;">
                                    <div class="col-4">
                                        <img src="assets/Image Files/line_left.png" style="width: 150px; align-content: right;">
                                    </div>
                                    <div class="col-4">
                                        <h2 class="mt-5 mb-3" style="margin-left: 0px !important; margin-right: 0px !important;"><i>or</i></h3>
                                    </div>
                                    <div class="col-4">
                                        <img src="assets/Image Files/line_right.png" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-2">
                                        <a type="button" class="btn btn-primary" style="background-color: white; border-width: 0px; border-radius: 50px; padding: 5px;" href="https://fb.com"><img src="assets/Image Files/fb.png" style="width: 50px;"></a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a type="button" class="btn btn-primary" style="background-color: white; border-width: 0px; border-radius: 50px; padding: 5px;" href="https://google.com"><img src="assets/Image Files/google.png" style="width: 50px;"></a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a type="button" class="btn btn-primary" style="background-color: white; border-width: 0px; border-radius: 50px; padding: 5px;" href="https://twitter.com"><img src="assets/Image Files/twitter.png" style="width: 50px;"></a>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        
                    </div>
                </div>
            </form>
        </div>

        <Footer>
            <div class="container-fluid" style="background-color: #232323; background-size: cover;">
                <div class="row">
                    <div class="col" style="padding-top: 15px; padding-bottom: 15px;">
                        <div class="row">
                            <div class="col-6">
                                
                            </div>
                            <div class="col-6">
                                
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <p class="text-muted">All Rights Reserved © 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Footer>

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
