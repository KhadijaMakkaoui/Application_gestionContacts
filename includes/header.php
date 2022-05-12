<?php

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#90CAF9">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"> 
                    <img src="images/contact-book.png" height="36" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse  justify-content-end " id="navbarNav">

                    <ul class="navbar-nav ">
                        <?php if(!isset($_SESSION['username'])):?>
                        <li class="nav-item notLog">
                            <a class="nav-link" aria-current="page" href="connexion.php">
                                Sign in 
                            </a>
                        </li>
                        <li class="nav-item notLog">
                            <a class="nav-link" aria-current="page" href="inscription.php">
                                Sign up 
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(isset($_SESSION['username'])):?>
                        <li class="nav-item log">
                            <a class="nav-link" href="profile.php">
                                <?php 
                                    echo $_SESSION['username'] ?>
                            </a>
                        </li>
                        <li class="nav-item log ">
                            <a class="nav-link" href="contactList.php">Contacts</a>
                        </li>
                        <li class="nav-item log">
                            <a class="nav-link" href="index.php">Logout</a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

    </html>