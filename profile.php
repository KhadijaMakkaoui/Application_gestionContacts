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
    require "./classes/utilisateur.classes.php";

    include "includes/header.php";
    $u=new user($_SESSION['username']);
    $info=$u->getUserInfo();
    ?>
    <div class="container">
        <h2 class="mb-5">Welcome,<?php echo $_SESSION['username'] ?>!</h2>
        <h4>Your profile:</h4>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Username</th>
                    <td><?php echo $_SESSION['username'] ?></td>
                </tr>
                <tr>
                    <th scope="row">Signup date:</th>
                    <td><?php echo $info[0]['signupDate'] ?></td>

                </tr>
                <tr>
                    <th scope="row">Last login:</th>
                    <td><?php echo $info[0]['lastLogin'] ?></td>

                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>