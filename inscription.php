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
                <h1 class="col-12 text-center mb-4 ">Sign up</h1>
                <div class="mb-3 col-12">
                    <label for="username" class="form-label">User Name</label>
                    <input type="email" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3 col-12"> 
                    <label for="Pass" class="form-label">Password</label>
                    <input type="email" class="form-control" id="Pass" placeholder="Password">
                </div>
                <div class="mb-3 col-12">
                    <label for="PassVer" class="form-label">Verify password</label>
                    <input type="email" class="form-control" id="PassVer" placeholder="Verify Password">
                </div>
                <div class="col-12">
                     <input type="button" value="Sign in " id="signin " class="btn btn-dark mt-3 col-12">
                    <p class="mt-3 ">Already have an account
                        <a href="inscription.php ">Sign in here</a> 
                    </p>
                </div>
               
                    
            </form>

        </div>
    </div>
</body>

</html>