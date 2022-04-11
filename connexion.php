<!DOCTYPE html>
<html lang="en">
<?php 
$errMessage = $resultE = $resultP = $email_val = $pass_val = "";
$visibility = "d-none";

$pattern = "/^([a-z0-9_-]+)(\.[a-z0-9_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i";

//Validation
function input_test($data){
    $data = trim($data);
    $data= stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $visibility = "d-none";
    $isvalide = false;
    $email_val = $_POST['Email'];
    $pass_val = $_POST['Pass'];
    if (empty($email_val) || empty($pass_val)) {
      $errMessage = "BOTH FIELDS ARE REQUIRED";
      $visibility = "";
    } else {
      if (!preg_match($pattern, $email_val)) {
        $errMessage = "PLEASE ENTER A VALID USER NAME";
        $visibility = "";
      } else {
        $resultE = input_test($email_val);
        $resultP = input_test($pass_val);
        $isvalide = true;
        $visibility = "d-none";
      }
    }
    if ($isvalide) {
      //Échappe les caractères spéciaux dans une chaîne à utiliser dans une instruction SQL
      $userEmail = mysqli_real_escape_string($conn, $resultE);
      $userPass = mysqli_real_escape_string($conn, $resultP);
      $query = "SELECT * FROM comptes WHERE email= '$userEmail' AND mdp='$userPass'";
      $result = mysqli_query($conn, $query);
      if(!$result){
        //Returns a string description of the last error
        die("SQL query failed: " . mysqli_error($conn));
     }
      $row = mysqli_fetch_array($result);
     //Avoir le nombre de ligne dans un resultat
      $count = mysqli_num_rows($result);
  
      if ($count == 1) {
        $_SESSION['userName'] = $row['user_name'];
        $_SESSION['isLogin'] = true;
        //Logout après 24h
        $_SESSION['expireTime'] = time()+(24*60*60);
        
        if(!empty($_POST["rememberme"])){
          setcookie("email",$userEmail,time()+365*12*30*24*60*60);
          setcookie("password",$userPass,time()+365*12*30*24*60*60);
        }
        
  
        header("location: dashHome.php");
      } else {
        $errMessage = "Your Email or Password is Incorrect";
        $visibility = "";
  
      }
    }
  }
?>
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
            <form class="row col-10 col-lg-6 justify-content-center">
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
                     <input type="button" value="Signin " id="signin " class="btn btn-dark mt-3 col-12">
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