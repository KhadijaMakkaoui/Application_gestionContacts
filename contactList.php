<?php
// session_start();

require "./classes/database.classes.php";
require "./classes/contact.classes.php";
require "./classes/utilisateur.classes.php";
?>
<?php
$name=$adresse=$phone=$email="";
$user=new user();
//Afficher message d'erreur
$visibility="d-none";
if(isset($_GET['error_msg'])){
    $visibility="";
}

$arr_contact=$user->getContactList();

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->AddContactByUser($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['adresse']);
}
if(isset($_GET['del'])){
    $user->DeleteContact($_GET['del']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <!-- <link rel="stylesheet" href="/bootsrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
</head>

<body>
<?php 
    include "includes/header.php";
    ?>
    <div class="container">
        <h1 class="my-5">Contacts</h1>
        <h3>Contacts list:</h3>
        <div id="listContact" class="table-responsive">
        <?php if(!empty($arr_contact)): ?>
            <table class="table table-striped">
                <thead>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Operations</th>
                </thead>
                <tbody>
                        <?php foreach($arr_contact as $row): ?>
                            <tr>
                                <th scope="row"><?php echo $row['name']; ?></th>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['adresse']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>"> 
                                        <img src="images/icons8-edit-24.png">
                                    </a>
                                    <a href="contactList.php?del=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this contact?');">
                                      <img src="images/icons8-delete-24.png">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                   

                </tbody>
            </table>
            <?php endif; ?>
            <?php if(empty($arr_contact)): ?>
                        <div id="emptyList">No contacts available.</div>
             <?php endif; ?>
        </div>
        <hr>
        <h3 id="title">Add contact:</h3>
        <div class="alert alert-danger col-11 <?php echo "$visibility" ?>" role="alert">
                 <?php if(isset($_GET['error_msg'])) echo $_GET['error_msg'] ?>
                </div>
        <form action="" method="POST" class="row my-5">
            <div class="mb-3 col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control contactList" name="name" id="name" placeholder="Enter name">
            <small class="text-danger" id="errN"></small>
            </div>
            <div class="mb-3 col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control contactList" name="phone"  id="phone" placeholder="Enter phone">
                <small class="text-danger" id="errP"></small>
            
            </div>
            <div class="mb-3 col-12">
                <label for="email" class="form-label">Email address</label>
                <input type="text" inputmode="email" class="form-control contactList" name="email" id="email" placeholder="Enter email">
                <small class="text-danger" id="errE"></small>
            </div>
            <div class="mb-3 col-12">
            <label for="adresse" class="form-label">Address</label>
                <textarea cols="" rows="" class="form-control contactList" name="adresse" id="adresse" placeholder="Enter adresse"></textarea>
                <small class="text-danger" id="errA"></small>
            </div>
            <div class="col-6 mx-auto">
                <input type="submit" value="Save" id="save " class="btn btn-dark mt-3 col-12 ">
            </div>

        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>