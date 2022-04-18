<?php
session_start();
require "./classes/database.classes.php";
require "./classes/contact.classes.php";
require "./classes/utilisateur.classes.php";
?>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // require "./classes/utilisateur.classes.php";

    //   $user=new Utilisateur($_POST['username'],$_POST['pass']);
$user=new user("Ahmed","1234");

$user->logIn();
  
  // $date = date("Y-m-d h:i:s A");
//   header("Location: contactList.php");
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
    include "includes/header.html";
    ?>
<div class="container">
        <div class=" container vh-100 row justify-content-center align-content-center ">
            <form method="POST" class="row col-10 col-lg-6 justify-content-center">
                <h1 class="col-12 text-center mb-4 ">Sign in</h1>
                
                <div class="alert alert-danger col-11   <?php echo $visibility ?>" role="alert">
                 <?php //echo $errMessage ?>
                 
                </div>
                    <small class="req text-danger"></small>

                <div class="mb-3 col-12">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control login" id="username" placeholder="Username">
                    <!-- <small class="reqU text-danger"></small> -->
                </div>
                <div class="mb-3 col-12"> 
                    <label for="Pass" class="form-label">Password</label>
                    <input type="password" class="form-control login" id="pass" placeholder="Password">
                    <!-- <small class="reqP text-danger"></small> -->
                </div>
               
                <div class="col-12">
                     <input type="submit" value="submit " id="submit " class="btn btn-dark mt-3 col-12">
                    <p class="mt-3 ">No account?
                        <a href="inscription.php ">Sign up here</a> 
                    </p>
                </div>      
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>