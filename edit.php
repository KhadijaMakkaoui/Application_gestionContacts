<?php
// session_start();
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
$name=$adresse=$phone=$email="";
$contact=new Contact($name,$email,$phone,$adresse,$_SESSION['username']);

$get_contact=$contact->getContactInfoId($_GET['id']);

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact->setName($_POST['name']);
    $contact->setEmail($_POST['email']);
    $contact->setPhone($_POST['phone']);
    $contact->setAdresse($_POST['adresse']);

    $contact->UpdateContact($_GET['id']); 
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit contact</title>
    <!-- <link rel="stylesheet" href="/bootsrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h3>Edit contact:</h3>
        <div class="alert alert-danger col-11 <?php echo $visibility ?>" role="alert">
                 <?php echo $_GET['error_msg'] ?>
                </div>
        <form action="" method="POST" class="row my-5">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="<?php  echo $get_contact[0]["name"] ?>"class="form-control contactList" name="name" id="name" placeholder="Enter name">
            <small class="text-danger" id="errN"></small>
            </div>
            <div class="mb-3 col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" value="<?php  echo $get_contact[0]["phone"] ?>" class="form-control contactList" name="phone"  id="phone" placeholder="Enter phone">
                <small class="text-danger" id="errP"></small>

            </div>
            <div class="mb-3 col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="text" value="<?php  echo $get_contact[0]["email"] ?>" inputmode="email" class="form-control contactList" name="email" id="email" placeholder="Enter email">
                <small class="text-danger" id="errE"></small>
            </div>
            <div class="mb-3 col-12">
            <label for="adresse" class="form-label">Address</label>
                <textarea cols=""  rows="" class="form-control contactList" name="adresse" id="adresse" placeholder="Enter adresse"><?php  echo $get_contact[0]["adresse"] ?>
                </textarea>
                <small class="text-danger" id="errA"></small>
            </div>
            <div class="col-6 mx-auto">
                <input type="submit" value="Update" id="save " class="btn btn-dark mt-3 col-12 ">
                <button class="btn btn-secondary mt-3 col-12"><a href="contactList.php" class="text-light">Cancel</a></button>
            </div>

        </form>
    </div>
    </div>
</body>
</html>