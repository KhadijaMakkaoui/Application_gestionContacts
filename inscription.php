<?php
// session_start();
require "./classes/database.classes.php";
require "./classes/contact.classes.php";
require "./classes/utilisateur.classes.php";
?>
<?php

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user=new user($_POST["username"],$_POST["password"]);
    $user->singnUp($user);

 }
 $visibility="d-none";
 if(isset($_GET['error_msg'])){
     $visibility="";
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<?php 
    include "includes/header.php";
    ?>
    <div class="container h-100">
    <div class="row d-flex justify-content-md-center align-items-center vh-100">
           <div class="col-12 col-lg-6">
            <img src="images/Signup-pic.png" class="img-fluid" >

            </div>
            <div class="col-12 col-lg-6">

            <form method="POST" class="row">
                <h1 class="col-12 text-center mb-4 ">Sign up</h1>
                <div class="alert alert-danger col-12  <?php echo $visibility ?>" role="alert">
                    <?php echo $_GET['error_msg'] ?>
                </div>
                <div class="mb-3 col-12">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control insc" name="username" id="userName" placeholder="Username">
               <small class="text-danger" id="error-username"></small>
                </div>
                <div class="mb-3 col-12"> 
                    <label for="Pass" class="form-label">Password</label>
                    <input type="password" class="form-control insc" name="password" id="Pass" placeholder="Password">
               <small class="text-danger" id="error-password"></small>
                
                </div>
                <div class="mb-3 col-12">
                    <label for="PassVer" class="form-label">Verify password</label>
                    <input type="password" class="form-control insc" id="PassVer"  placeholder="Verify Password">
                    <small class="text-danger" id="error-password-cofirme"></small>
               
                </div>
                <div class="col-12">
                     <input type="submit" value="Sign in " id="signin" class="btn btn-dark mt-3 col-12">
                    <p class="mt-3 ">Already have an account?
                        <a href="connexion.php ">Sign in here</a> 
                    </p>
                </div>
               
                    
            </form>

        </div>
    </div>
</div>
    <script src="script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>