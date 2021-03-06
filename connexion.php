<?php
require "./classes/database.classes.php";
require "./classes/contact.classes.php";
require "./classes/utilisateur.classes.php";
?>
<?php
//Afficher message d'erreur
$visibility="d-none";
if(isset($_GET['error_msg'])){
    $visibility="";
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user=new user($_POST['username'],$_POST['pass']);
    $user->logIn();
    
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
            <img src="images/login-pic.png" class="img-fluid" >

            </div>
            <div class="col-12 col-lg-6">

            <form method="POST" class="row ">
                <h1 class="col-12 text-center mb-4 ">Sign in</h1>
                <div class="alert alert-danger col-11 <?php echo $visibility ?>" role="alert">
                 <?php echo $_GET['error_msg'] ?>
                </div>
                    <small class="req text-danger"></small>

                <div class="mb-3 col-12">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control login" id="Logusername" name="username" placeholder="Username">
                    <!-- <small class="reqU text-danger" id="errUsername"></small> -->
                </div>
                <div class="mb-3 col-12"> 
                    <label for="Pass" class="form-label">Password</label>
                    <input type="password" class="form-control login"  id="Logpass" name="pass" placeholder="Password">
                    <!-- <small class="reqP text-danger" id="errPass"></small> -->
                </div>
               
                <div class="col-12">
                     <input type="submit" value="submit " id="submit " class="btn btn-dark mt-3 col-12 ">
                    <p class="mt-3 ">No account?
                        <a href="inscription.php ">Sign up here</a> 
                    </p>
                </div>      
            </form>
        </div>
    </div>
</div>
    
    <script src="script.js"></script>
</body>

</html>