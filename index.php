<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php 
require "./classes/database.classes.php";
session_destroy();
    include "includes/header.php";
    ?>
    <div class=" bg-light vh-100 row flex-column justify-content-center align-content-center">
        <h1>Hello,Welcome to Contact Application</h1>
        <p>
            <a href="inscription.php">Sign up here</a>
            to start creating your contacts list.
        </p>
        <p>Already have an account?
            <a href="connexion.php">Login here</a>
        </p>
    </div>
</body>

</html>