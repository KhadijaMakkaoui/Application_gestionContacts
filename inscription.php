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
    <div class="container">
        <div class=" container vh-100 row justify-content-center align-content-center ">
            <form class="row col-10 col-lg-6">
                <h1 class="col-12 text-center ">Sign up</h1>
                <label class="col-12 mt-3 " for="username ">User Name</label>
                <input class="col-12 " type="text " name="userame " id="userame " placeholder="Username ">
                <label class="col-12 mt-3 " for="pass ">Password</label>
                <input class="col-12 " type="password " name="pass " id="pass " placeholder="Password ">
                <label class="col-12 mt-3 " for="passver ">Password verify</label>
                <input class="col-12 " type="password " name="passver " id="passver " placeholder="Password verify ">

                <input type="button " value="Sign up " id="signup " class="btn btn-primary mt-3 col-12 ">
                <p class="mt-3 ">Already have an account
                    <a href="inscription.php ">Login here</a> </p>
            </form>

        </div>
    </div>
</body>

</html>